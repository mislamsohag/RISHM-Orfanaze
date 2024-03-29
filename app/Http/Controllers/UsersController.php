<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{

    function RegistrationPage(){
            return view('pages.auth.registrationPage');
        }

    function LoginPage(){
        return view('pages.auth.loginPage');
    }


    function VerifyOTPPage(){
        return view('pages.auth.verifyOtpPage');
    }
    
    function PasswordResetPage(){
        return view('pages.auth.passwordResetPage');
    }
    
    function ProfilePage(){
        return view('pages.dashboard.profile-page');
    } 
    function dashboard(){
        return view('pages.dashboardPage');
    } 

    function UserRegistration(Request $request)
    {
        // dd($request->input());

        try {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);

            return redirect('/loginPage')->with('success');
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'failed',
                'message' => $exception->getMessage(),
            ],401);
        }

    }


    function UserLogin(Request $request)
    {
        // dd($request->input());

        $count = User::where('email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->select('id')->first();
        // dd($count);
        if ($count == null) {
            return redirect()->back()->with("Your email or password don't match");                
        } 
        else {
            // Jwt token issue
            $token = JWTToken::CreateToken($request->email, $count->id);
            return redirect('/')->cookie('token', $token, 60*24*30);
        }
    }


    //User Verification and send OTP
    function SendOTPCode(Request $request)
    {
        dd($request->input('email'));

        $email = $request->input('email'); //catch email
        $otp = rand(100000, 999900); // make 4 digit random OTP

        // find user matching request email
        $count = User::where('email', '=', $email)->count();

        if ($count != 1) {
            return response()->json([
                'status' => 'failed',
                'message' => "Don't match your email"
            ]);
        } else {
            // Send OTP Via Mailable
            Mail::to($email)->send(new OTPMail($otp));
            // OTP Update on Database by User Model
            User::where('email', '=', $email)->update(['otp' => $otp]);
            return response()->json([
                'status' => 'success',
                'message' => '6 digit OTP send your email successfully'
            ],200);
        }
    }


    function VerifyOTP(Request $request)
    {
        $email=$request->input('email');
        $otp=$request->input('otp');

        $count=User::where('email','=', $email)
        ->where('otp', '=', $otp)
        ->count();

        if($count !=1){
            return response()->json([
                'status'=>'failed',
                'message'=>'Your OTP is wrong! please check valid OTP'
            ]);
        }else{
            // OTP Update
            User::where('email', '=', $email)->update(['otp'=>'0']);
            // Password Issue and Token Issue
            $token=JWTToken::CreateTokenForSetPassword($request->input('email'));
            return response()->json([
                'status'=>'success',
                'message'=>'OTP verification successfully'
            ],200)->cookie('token', $token, 60*24*30);
        }
    }

    function ResetPassword(Request $request){
        try{
            $email=$request->header('email');
            $password=$request->input('password');

            User::where('email', '=', $email)->update(['password'=>$password]);
            return response()->json([
                'status'=>'success',
                'message'=>'User password reset successfully'
            ],200);            
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'failed',
                'message'=>$e
            ],200);
        }
    }

    function UserLogout(){
        // return redirect('/login-page')->cookie('token','',-1);
        return redirect('/')->cookie('token','',-1);
    }


    function UserProfile(Request $request){
        $id=$request->header('id');

        $user=User::where('id', $id)->first();
        return response()->json([
            'status'=>'success',
            'message'=>'Request success and data received',
            'data'=>$user
        ], 200);
        
    }
    

    function ProfileUpdate(Request $request){
        try{
            $email=$request->header('email');
            
            $firstName=$request->input('firstName');
            $lastName=$request->input('lastName');
            $mobile=$request->input('mobile');
            $password=$request->input('password');

            User::where('email','=', $email)->update([
                'firstName'=>$firstName,
                'lastName'=>$lastName,
                'mobile'=>$mobile,
                'password'=>$password,
            ]);
            return response()->json([
                'status'=>'success',
                'message'=>'Profile Update Successfully',
            ], 200);
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'failed',
                'message'=>'Something went wrong!',
            ], 200);
        }
    }

}
