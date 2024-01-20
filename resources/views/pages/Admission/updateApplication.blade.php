@extends('Layouts.app')

@section('content')
<body>
	<div class="container">
		<div class="row" style="background-color:#337AB7; color:#eee">
			<div class="col-md-2">
				<h3 class="logo col-md-5 col-sm-5 lineHeight" >
				<a href="javascript:;" ><img src="{{asset('../images/RSIHNM.png')}}" class="" alt="Logo" style="width:90px;height:90px"></a>
				</h3><!--//logo--> 
			</div>
			<div class="col-md-10">
				<h2 class="text-center">RAJAPUR SIDDIKIA HAFIZIA NURANI MADRASHA AND ATIMKHANA</h2>
				<h2 class="text-center">রাজাপুর ছিদ্দিকিয়া হাফিজিয়া নূরানী মাদ্রাসা ও এতিমখানা</h2>			
				<p class="text-center">রাজাপুর, খিলপাড়া, হাজিগঞ্জ, চাঁদপুর, Phone: 0189-1533721, www.rshma.org</p>

				<div class='pull-right'><a href="{{url('editApplicantsView')}}" class='btn btn-warning btn-sm'>Update Application</a></div>
				<br><br>
			</div>
		</div>
		<div style="padding:20px;padding-bottom:100px;" id="formDiv">
			<label><b>Type Your Applicant Number:</b> </label>
			<input type="number" name="tracking_no" id="tracking_no" style="border:2px solid gray;height:25px;width:200px;border-radius: 2px;" >
			<button id="btn_search">Search</button>
		</div>
		
		<div class="row" id="printContent"></div>

		<div class="row" style='height:50px;background-color:#337AB7'>
			<p style='text-align:center;'>
				Copyright &copy; 2023. Developed by : <a href="{{url('#')}}" target='_blank' style='color:#fff'>SohagTech</a>
			</p>
		</div>
	</div>
	</body>
</html>

	

@endsection