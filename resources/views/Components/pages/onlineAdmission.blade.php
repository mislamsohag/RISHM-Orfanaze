<body>
    <div class="container">
        <div class="row bg-primary">
            <div class="col-md-2">
                <h3 class="logo col-md-5 col-sm-5 lineHeight">
                    <a href="{{url('javascript:;')}}"><img src="{{asset('images/logo.gif')}}" class="thumbnail"
                            alt="Logo"></a>
                </h3><!--//logo-->
            </div>
            <div class="col-md-10">
                <h1 style="line-height: 30px;">RAZAPUR SIDDIQIA HAFIZI MADRASAH & ORFANAZE</h1>
                <p>Vill: Razapur, P.O: Khilpara, P.S: Hajigonj, Dist: Chandpur, Phone: +880 1812-060163, www.abc.org</p>

                <div class='pull-right'><a href="{{url('#')}}" class='btn btn-warning btn-sm'>New Application</a></div>
                <div class='pull-right'><a href="{{url('instruction.html')}}" target='_blank'
                        class='btn btn-success btn-sm'>Show
                        Instruction</a></div>
                <br><br>
            </div>
        </div>

        <div class="alert alert-danger info-error" style="display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul></ul>
        </div>

        <div class="alert alert-success info-suc" style="display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Congratulation!</strong> &nbsp;Registration Successful. Your Tracking Number is:<br><br>
            <ul></ul>
        </div>
        <div class="alert alert-warning db-error" style="display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Oops!</strong> &nbsp;<label></label></span><br><br>
        </div>

        <div class="col-md-12" style="padding-top:10px">
            <div class="col-md-9">
                <p style="color:red;" class="">* Required Field
                    <span class='loading' style='display:none;'><img src="{{asset('images/ajax-loader.gif')}}"></span>
                </p>
                <p style="font-weight:bolder" class=""><strong>Tracking No: </strong><span class="trackId"></span></p>
                <a class="btn btn-info" id="print" style="display:none">print</a>
            </div>
            <div class="col-md-3" id="uploadPreview">
                <img src="{{asset('images/applicant-default.png')}}" class="thumbnail" style="height:200" alt="Logo">
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <form method="POST" action="{{url('#')}}" accept-charset="UTF-8" class="form-horizontal admissionFormVal"
                id="admissionForm" enctype="multipart/form-data"><input name="_token" type="hidden"
                    value="rhi04qsomMSmx8fmMgzij2jVoVbdr3CaatXA8yDS">
                <fieldset>
                    <legend><span class="glyphicon glyphicon-info-sign"></span> Personal Information</legend>
                </fieldset>
                <div class="form-group">
                    <label class="col-md-2 col-sm-2 col-lg-2">Student Name (Bangla) <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4 col-sm-4 col-lg-4 ">
                        <input name="student_name_bangla" id="s_n_b" class="form-control input-sm" type="text"
                            placeholder="Student Name (Bangla)">
                    </div>
                    <label class="col-md-2 col-sm-2 col-lg-2">Student Name (English) <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <input name="student_name_english" value="" class="form-control input-sm" type="text"
                            placeholder="Student Name (English)">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Father's Name (Bangla) <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="father_name_bangla" value="" class="form-control input-sm" type="text"
                            placeholder="Father's Name (Bangla)">
                    </div>

                    <label class="col-md-2">Father's Name (English) <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="father_name_english" value="" class="form-control input-sm" type="text"
                            placeholder="Father's Name (English)">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Mother's Name (Bangla) <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="mother_name_bangla" value="" class="form-control input-sm" type="text"
                            placeholder="Mother's Name (Bangla)">
                    </div>

                    <label class="col-md-2">Mother's Name (English) <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="mother_name_english" value="" class="form-control input-sm" type="text"
                            placeholder="Mother's Name (English)">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Guardian Name <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="guardian_name" value="" class="form-control input-sm" type="text"
                            placeholder="Guardian Name ">
                    </div>
                    <label class="col-md-2">Guardian Relation <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="guardian_relation" value="" class="form-control input-sm" type="text"
                            placeholder="i.e: Father/Mother/Brother">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Occupation <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="occupation" value="" class="form-control input-sm" type="text"
                            placeholder="Business/Service">
                    </div>
                    <label class="col-md-2">Yearly Income <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="yearly_income" value="" class="form-control input-sm" type="text"
                            placeholder="120000">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Parent's/Guardian Contact No: <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input type='text' name="parents_guardian_contact_address" class="form-control input-sm"
                            placeholder="guardian mobile no">
                    </div>
                    <label class="col-md-2">Image <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input type="file" name="applicant_image" id="applicantImage" class="form-control input-sm"
                            placeholder="Student Image">
                        <span id="imageAlert" style="color:red;"></span>
                    </div>
                </div>

                <fieldset>
                    <legend><span class="glyphicon glyphicon-info-sign"></span> Permanent Address</legend>
                </fieldset>
                <div class="form-group">
                    <label class="col-md-2">House Name <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="permanent_house_name" value="" class="form-control input-sm" type="text"
                            placeholder="House Name">
                    </div>
                    <label class="col-md-2">Road Name <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="permanent_road_name" value="" class="form-control input-sm" type="text"
                            placeholder="Road Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Village <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="permanent_village" value="" class="form-control input-sm" type="text"
                            placeholder="Village Name">
                    </div>
                    <label class="col-md-2">Ward <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="permanent_ward" value="" class="form-control input-sm" type="text"
                            placeholder="Ward No.">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Post Office <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="permanent_post_office" value="" class="form-control input-sm" type="text"
                            placeholder="Post Office">
                    </div>
                    <label class="col-md-2">Police Station <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="permanent_police_station" value="" class="form-control input-sm" type="text"
                            placeholder="Police Station">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">District <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="permanent_district" value="" class="form-control input-sm" type="text"
                            placeholder="District">
                    </div>
                    <label class="col-md-2">Phone/Mobile <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="permanent_phone_mobile" value="" class="form-control input-sm" type="text"
                            placeholder="018000000000">
                    </div>
                </div>

                <fieldset>
                    <legend><span class="glyphicon glyphicon-info-sign"></span> Present Address</legend>
                </fieldset>
                <div class="form-group">
                    <label class="col-md-2">House Name <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="present_house_name" value="" class="form-control input-sm" type="text"
                            placeholder="House Name">
                    </div>
                    <label class="col-md-2">Road Name <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="present_road_name" value="" class="form-control input-sm" type="text"
                            placeholder="Road Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Village <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="present_village" value="" class="form-control input-sm" type="text"
                            placeholder="Village Name">
                    </div>
                    <label class="col-md-2">Ward <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="present_ward" value="" class="form-control input-sm" type="text"
                            placeholder="Ward No.">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Post Office <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="present_post_office" value="" class="form-control input-sm" type="text"
                            placeholder="Post Office">
                    </div>
                    <label class="col-md-2">Police Station <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="present_police_station" value="" class="form-control input-sm" type="text"
                            placeholder="Police Station">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">District <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="present_district" value="" class="form-control input-sm" type="text"
                            placeholder="District">
                    </div>
                    <label class="col-md-2">Phone/Mobile <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="present_phone_mobile" value="" class="form-control input-sm" type="text"
                            placeholder="018000000000">
                    </div>
                </div>
                <hr>

                <fieldset>
                    <legend><span class="glyphicon glyphicon-info-sign"></span> Physical Information</legend>
                </fieldset>
                <div class="form-group">
                    <label class="col-md-2">Height <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="height_ft" value="" style="width:49%; display:inline;"
                            class="form-control input-sm" type="text" placeholder="ft: 4">
                        <input name="height_inch" value="" style="width:49%; display:inline;"
                            class="form-control input-sm" type="text" placeholder="inch: 10">
                    </div>
                    <label class="col-md-2">Body Color <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="body_color" value="" class="form-control input-sm" type="text"
                            placeholder="Body Color">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Blood Group <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <select name="blood_group" class="form-control input-sm">
                            <option value="">-Select Blood group-</option>
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>

                    <label class="col-md-2">Symbol of identification <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="symbol_of_identification" value="" class="form-control input-sm" type="text"
                            placeholder="Symbol of identification">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Date of Birth <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="date_of_birth" value="" class=" col-md-1 form-control input-sm" type="text"
                            placeholder="Date of Birth (e.g. dd/mm/yyyy)">
                    </div>
                    <label class="col-md-2">Gender <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <select name="gender" class="form-control input-sm">
                            <option value="">Select Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">National ID / Birth ID <span
                            style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="national_id" id="n_i" class="form-control input-sm" type="text"
                            placeholder="National Id or Birth Certificate Id">
                    </div>
                </div>
                <fieldset>
                    <legend><span class="glyphicon glyphicon-info-sign"></span> Previous Institute Information
                        <small>[Not necessary for Play Class]</small>
                    </legend>
                </fieldset>
                <div class="form-group">
                    <label class="col-md-2">Institute Name</label>
                    <div class="col-md-4">
                        <input name="pre_institute_name" value="" class="form-control input-sm" type="text"
                            placeholder="Institute Name">
                    </div>
                    <label class="col-md-2">Class </label>
                    <div class="col-md-4">
                        <input name="pre_class" value="" class="form-control input-sm" type="text"
                            placeholder="Class Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Roll </label>
                    <div class="col-md-4">
                        <input name="pre_class_roll" value="" class="form-control input-sm" type="text"
                            placeholder="Roll No">
                    </div>
                    <label class="col-md-2">Result</label>
                    <div class="col-md-4">
                        <input name="pre_result" value="" class="form-control input-sm" type="text"
                            placeholder="GPA or Mark">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">Post Office </label>
                    <div class="col-md-4">
                        <input name="pre_post_office" value="" class="form-control input-sm" type="text"
                            placeholder="Post Office">
                    </div>
                    <label class="col-md-2">Police Station <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <input name="pre_police_station" value="" class="form-control input-sm" type="text"
                            placeholder="Police Station">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-2">District </label>
                    <div class="col-md-4">
                        <input name="pre_district" value="" class="form-control input-sm" type="text"
                            placeholder="District">
                    </div>
                </div>


                <fieldset>
                    <legend><span class="glyphicon glyphicon-info-sign"></span> Admission Information</legend>
                </fieldset>
                <div class="form-group">
                    <label class="col-md-2">Class Name <span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <select name="fk_class_id" required value="" class="form-control input-sm" id="class_name_id">
                            <option>Select Class</option>
                        </select>
                    </div>
                    <label class="col-md-2">Group Name<span style="color:red;font-weight: bolder;">*</span></label>
                    <div class="col-md-4">
                        <select name="fk_group_id" required value="" class="form-control input-sm" id="group_name_id">
                            <option>Select group</option>
                        </select>
                    </div>
                </div>
                <div id="#" class="col-md-12">
                </div>
                <div id="#" class="col-md-12">
                </div>
                <div style='text-align:center'>
                    <input class="btn btn-primary btn_submit" type="submit" value="Registration" style="display:none">
                </div><br>
            </form>
        </div>
    </div>
    <div class="bg-primary container" style='height:50px;'>
        <div class="col-md-12">
            <p style='text-align:center; align-items:center;'>
                Copyright &copy; 2023. Developed by : <a href="{{url('#')}}" target='_blank' style='color:#fff'>SohagTech</a>
            </p>
        </div>
    </div>
</body>

</html>