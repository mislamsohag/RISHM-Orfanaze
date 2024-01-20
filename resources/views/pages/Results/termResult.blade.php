<!DOCTYPE html>
<html>

<head>
    <title>Result Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <a href="http://202.5.38.86/ems/boardResultEntryForm" class="btn btn-info btn-sm pull-right entryBtn"
                    style="display: none;">Result Entry</a>
                <h4 class="institute">Al Jameatul Falahia Kamil Madrasah Feni</h4>
                <p>Tutorial Result</p>
            </div>
            <div class="col-sm-2 col-lg-2"></div>
        </div>
        <div class="row">
            <form action="http://202.5.38.86/ems/getTutorialResultPost" method="POST" id="submitForm">
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
                                        <option value="10">2024</option>
                                        <option value="9">2023</option>
                                        <option value="8">2022</option>
                                        <option value="7">2021</option>
                                        <option value="6">2020</option>
                                        <option value="5">2019</option>
                                        <option value="4">2018</option>
                                        <option value="3">2017</option>
                                        <option value="2">2016</option>
                                        <option value="1">2015</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Student Id</td>
                                <td class="separator">:</td>
                                <td>
                                    <input type="text" name="student_id" class="form-control student_id" id='student_id'
                                        placeholder="16010293">
                                </td>
                            </tr>
                            <tr>
                                <td>Exam Name</td>
                                <td class="separator">:</td>
                                <td>
                                    <select class="form-control input-sm" name="fk_exam_name_wise_batch_id"
                                        id="exam_name" required data-placeholder="select" class="chosen-select">

                                    </select>
                                </td>
                                <td><input type="hidden" name="sarId" id="sarId" value=""></td>
                                <td><input type="hidden" name="sectionId" id="sectionId" value=""></td>
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
</body>

</html>

<script type="text/javascript">
    $('#student_id').on('change', function () {
        var sessionId = $("#exam_year").val();
        var examOption = $("#exam_name");
        var stdId = $(this).val();
        var total = stdId.length;
        if (total >= 8) {
            $.ajax({
                url: 'getTutorialExamName',
                type: 'GET',
                dataType: 'json',
                data: { 'sessionId': sessionId, 'stdId': stdId, },
                beforeSend: function () {

                },
                success: function (data) {
                    if (data.status == 'ok') {
                        examOption.empty();
                        examOption.append('<option value="" selected disabled>Please Select..</option>');
                        $.each(data.results.exam_name, function (index, value) {
                            examOption.append('<option value="' + value.enwbId + '">' + value.exam_name + '</option>');

                        });
                    }
                    $("#sarId").val(data.results.sarId);
                    $("#sectionId").val(data.results.sectionId);
                },
                error: function (data) {
                    alert('error occurred! Please Check');
                }
            });
        }
    })
</script>