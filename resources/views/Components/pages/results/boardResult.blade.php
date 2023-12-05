<!DOCTYPE html>
<html>

<head>
   <title>Result Search</title>
   <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
   <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
   <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
   <style type="text/css">
      .container {
         text-align: center;
         padding: 10px;
         border: 5px solid #449D44;
         height: 310px;
         width: 600px;
         margin-top: 80px;
      }

      .institute {
         background-color: #449D44;
         font-size: 18px;
         color: white;
      }

      .separator {
         font-size: 18px;
         font-weight: bold;
      }

      .row {
         margin: -10px -10px;
      }

      .btn-group-sm>.btn,
      .btn-sm {
         margin-right: -100px !important;
      }
   </style>
</head>

<body>
   <div class="container">
      <div class="row institute">
         <div class="col-sm-2 col-lg-2"></div>
         <div class="col-sm-8 col-lg-8">
            <a href="{{url('#')}}" class="btn btn-info btn-sm pull-right entryBtn"
               style="display: show;">Result Entry</a>
            <h4 class="institute">Rajapur Siddikia Hafizia Nurani Madrasha and Atimkhana</h4>
            <p>Board Result</p>
            <marquee>
               Total Examinee = 264, <span>A+&nbsp(34),&nbsp</span>
               <span>A&nbsp(68),&nbsp</span>
               <span>B&nbsp(45),&nbsp</span>
               <span>A-&nbsp(50),&nbsp</span>
               F&nbsp(66)
               <span>Absent&nbsp(1),&nbsp</span>

               Science:
               <span>A+&nbsp(10),&nbsp</span>
               <span>A&nbsp(14),&nbsp</span>
               <span>B&nbsp(6),&nbsp</span>
               <span>A-&nbsp(15),&nbsp</span>
               F&nbsp(9)

               General:
               <span>A+&nbsp(24),&nbsp</span>
               <span>A&nbsp(54),&nbsp</span>
               <span>A-&nbsp(35),&nbsp</span>
               <span>B&nbsp(39),&nbsp</span>
               F&nbsp(57)
               <span>Absent&nbsp(1),&nbsp</span>

            </marquee>

         </div>
         <div class="col-sm-2 col-lg-2"></div>
      </div>
      <div class="row">
         <form action="{{url('#')}}" method="POST" id="submitForm">
            <input type="hidden" name="_token" value="TTxh5pR12p6mOqL7dFIdtXAJG2V2OHkVuW1fYCqH">
            <div class="form-row">
               <div class="col-xs-12 col-lg-12">
                  <table class="table">
                     <tr>
                        <td>Select Session</td>
                        <td class="separator">:</td>
                        <td colspan="4">
                           <select class="form-control input-sm" name="exam_year" id="exam_year" required
                              data-placeholder="select" class="chosen-select">
                              <option value="2020" selected="">2020</option>
                              <option value="2019">2019</option>
                           </select>
                        </td>
                     </tr>
                     <tr>
                        <td>Board Roll</td>
                        <td class="separator">:</td>
                        <td>
                           <input type="text" name="board_roll" class="form-control board_roll" id='board_roll'
                              placeholder="16010293">
                        </td>
                     </tr>
                     <tr>
                        <td>Exam Name</td>
                        <td class="separator">:</td>
                        <td>
                           <select class="form-control input-sm" name="exam_name" id="exam_name" required
                              data-placeholder="select" class="chosen-select">
                              <option value="1">JDC</option>
                              <option value="2" selected="">Dakhil</option>
                              <option value="3">Alim</option>
                           </select>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="6">
                           <button type="submit" class="btn btn-success btn-block" data-toggle="modal"
                              data-target="#myModal" id="submitBtn">view</button>
                        </td>
                     </tr>
                  </table>
               </div>
            </div>
         </form>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="widget-content progressReportDiv" id="wrp-bg">
            </div>
         </div>
      </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title" style="text-align: center;"></h4>
            </div>
            <div class="modal-body">
               <table class="table table-bordered table-striped">
                  <tr>
                     <td>SL</td>
                     <td>Roll</td>
                     <td>Group</td>
                     <td>GPA</td>
                     <td>Grade Letter</td>
                     <td>Status</td>
                  </tr>
                  <tbody id="dynamic">

                  </tbody>
               </table>
            </div>
            <div class="modal-footer">
               <a type="button" href="{{url('#')}}" class="btn btn-info">Search Again</a>
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>

      </div>
   </div>
</body>

</html>
<script type="text/javascript">
   $('#submitBtn').click(function (e) {
      e.preventDefault();
      var exam_year = $("#exam_year").val();
      var board_roll = $("#board_roll").val();
      var exam_name = $("#exam_name").val();
      $.ajax({
         url: 'getBoardResult',
         type: 'GET',
         dataType: 'json',
         data: { 'exam_year': exam_year, 'board_roll': board_roll, 'exam_name': exam_name },
         beforeSend: function () {

         },
         success: function (data) {
            console.log(data);
            if (data.status == true) {
               $.each(data.datas, function (index, value) {
                  var exam_name = '';
                  var exam_year = value.exam_year;
                  var board_roll = value.board_roll;
                  var status = '';
                  var group = '';
                  if (value.group == 1) {
                     group = "General";
                  } else {
                     group = "Science";
                  }
                  var grade_letter = '';
                  if (value.gpa > 0) {
                     status = "Passed";
                     if (value.gpa >= 1 && value.gpa < 2) {
                        grade_letter = "D";
                     } else if (value.gpa >= 2 && value.gpa < 3) {
                        grade_letter = "C";
                     } else if (value.gpa >= 3 && value.gpa < 3.5) {
                        grade_letter = "B";
                     } else if (value.gpa >= 3.5 && value.gpa < 4) {
                        grade_letter = "A-";
                     } else if (value.gpa >= 4 && value.gpa < 5) {
                        grade_letter = "A";
                     } else {
                        grade_letter = "A+";
                     }
                  } else {
                     status = "Failed";
                     grade_letter = 0;
                  }
                  if (value.exam_name == 1) {
                     exam_name = "JDC Examination";
                  } else if (value.exam_name == 2) {
                     exam_name = "Dakhil Examination";
                  } else {
                     exam_name = "Alim Examination";
                  }
                  $('.modal-title').empty().html(exam_name + ' Result ' + exam_year);
                  var content = '<tr>' +
                     '<td>' + value.id + '</td>' +
                     '<td>' + value.board_roll + '</td>' +
                     '<td>' + group + '</td>' +
                     '<td>' + value.gpa + '</td>' +
                     '<td>' + grade_letter + '</td>' +
                     '<td>' + status + '</td>' +
                     '</tr>'
                  $("#dynamic").empty().append(content)
               });
            } else {
               $('.modal-title').empty().html('<div class="alert alert-danger">No Result Found...</div>');
               $("#dynamic").empty();
            }
         },
         error: function (data) {
            alert('error occurred! Please Check');
         }
      });
   })
</script>
<script type="text/javascript">
   $(document).ready(function () {
      $.getJSON("http://jsonip.com/?callback=?", function (data) {
         if (data.ip == "202.5.38.67") {
            $('.entryBtn').removeAttr('style');
         }
      });
   });
</script>