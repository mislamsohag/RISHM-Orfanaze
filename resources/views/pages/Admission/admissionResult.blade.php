@extends('Layouts.app')

@section('content')

<body class="home-page">
  <div class="wrapper">
    <div class="content container">
      <div class="row cols-wrapper">
        <div class="col-md-12" style=" margin-left:-15px !important">
          <div class="page-wrapper">
            <header class="page-heading clearfix">
              <h1 class="heading-title pull-left">Admission Result</h1>
              <div class="breadcrumbs pull-right">
                <ul class="breadcrumbs-list">
                  <li class="breadcrumbs-label">You are here:</li>
                  <li><a href="{{url('home')}}">Home</a><i class="fa fa-angle-right"></i></li>
                  <li class="current">Leadership Team</li>
                </ul>
              </div>
            </header>
          </div>
        </div>
        <div class="col-md-12">
          <style type="text/css">
            @media print {
              .noPrintShow {
                display: none
              }

              .copyright {
                display: none
              }

              .social {
                display: none
              }
            }
          </style>
          <div class="col-md-12 noPrintShow">
            <div class="widget stacked">
              <div class="widget-header" id="printPreviewNone">
                <i class="icon-plus-sign"></i>

              </div> <!-- /widget-header -->

              <div class="widget-content" id="wrp-bg">
                <form method="GET" action="" accept-charset="UTF-8" class="form-horizontal form-wrp"
                  id="admissionResultCheckpost">
                  <div class="form-group printNone">
                    <label class="col-sm-2">Applicant ID</label>
                    <div class="col-sm-3 ">
                      <input type="number" id="tracking" name="tracking" class="form-control input-sm" required
                        placeholder="Tracking No" autofocus />
                      </div>
                      <button id="btn_search">Search</button>
                    <span id="loader"></span>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="widget stacked printShow">
              <div class="widget-header class_for_print_media_two">
              </div> <!-- /widget-header -->
              <div class="widget-content progressReportDiv" id="wrp-bg">
                <div
                  style="padding: 0px 0px 0px 15px;text-align:center; color: #5E6C4B; font-size: 24px; line-height:25px;"
                  class="row title_heading" id="heading">
                  <span>
                    <img src="{{asset('/images')}}/RSIHNM.png" class="logo" style="height:50px;width:50px;" alt="Logo">
                  </span>
                  <span class="school_name">রাজাপুর ছিদ্দিকিয়া হাফিজিয়া নূরানী মাদ্রাসা ও এতিমখানা</span><br>
                  <h3>Admission Test Result-2023</h3>
                  <table class="table table-bordered" style="text-align: center;">
                    <tbody id="tableContent"></tbody>
                  </table>
                  <span id="wait-mgs" class="noPrintShow" style="display: none;"><strong style="color: red;">Result
                      Processing...</strong>
                  </span>

                </div>
              </div>
            </div>
          </div>
          <script>
            $("#tracking").on('keyup', function (e) {
              var trackingNo = parseInt($(this).val());
              if (isNaN(trackingNo) || $(this).val() == '' || $(this).val().length < 5) {
                return false;
              } else {
                $("#wait-mgs").show();
              }
              var tableContent = $("#tableContent");
              var content = '';
              $.ajax({
                url: "{{url('#')}}" + trackingNo + "/show",
                type: 'GET',
                success: function (data) {
                  var i = 0;
                  $.each(data, function (index, value) {
                    var batchNameText = value.batch_name;
                    var batchArr = batchNameText.split('-');
                    i++;
                    if (i == 1) {
                      var result = 0;
                      if (value.admission_test_mark >= 19) { result = "Passed" }
                      else { result = "Failed" }

                      content = '<tr><td>Name</td><td colspan="3" style="text-transform: capitalize;">' + value.student_name_english + '</td></tr>';
                      content += '<tr>' +
                        '<td>Fathers Name</td>' +
                        '<td style="text-transform: capitalize;">' + value.father_name_english + '</td>' +
                        '<td>Mothers Name</td>' +
                        '<td style="text-transform: capitalize;">' + value.mother_name_english + '</td>' +
                        '</tr>';
                      content += '<tr>' +
                        '<td>Mobile</td>' +
                        '<td>' + value.present_phone_mobile + '</td>' +
                        '<td>Class</td>' +
                        '<td>' + batchArr[1] + '</td>' +
                        '</tr>';
                      content += '<tr>' +
                        '<td>Marks</td>' +
                        '<td>' + value.admission_test_mark + '</td>' +
                        '<td>Result</td>' +
                        '<td>' + result + '</td>' +
                        '</tr>';
                    }

                  });

                  tableContent.empty().append(content);
                  $('#toggle-mgs').show();
                  $("#wait-mgs").hide();
                }
              });

            });
            $('#admissionResultCheckpost').on('keyup keypress', function (e) {
              var keyCode = e.keyCode || e.which;
              if (keyCode === 13) {
                e.preventDefault();
                return false;
              }
            });
          </script>

        </div>
        
      </div>
    </div>
  </div>

</body>
@endsection