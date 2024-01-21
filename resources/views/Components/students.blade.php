
<div class="col-md-12 noPrintShow">
			<div class="page-wrapper">
				<header class="page-heading clearfix">
					<h1 class="heading-title pull-left">Student Info</h1>
					<div class="breadcrumbs pull-right">
						<ul class="breadcrumbs-list">
							<li class="breadcrumbs-label">You are here:</li>
							<li><a href="index.html">Home</a><i class="fa fa-angle-right"></i></li>
							<li class="current">Leadership Team</li>
						</ul>
					</div><!--//breadcrumbs-->
				</header>
			</div>
		</div>
		<div class="col-md-9">
			<div class="form-group" style="background: #FFF; padding: 10px;">
				<label for="sel1">Select Class :</label>
				<select class="form-control" id="category" name="class_id">
					<option value="" selected="selected">Please Select Class</option>
					<option value="27">Class-I</option>
					<option value="28">Class- II</option>
					<option value="29">Class-III</option>
					<option value="30">Class-IV</option>
					<option value="31">Class-V</option>
					<option value="32">Class-VI</option>
					<option value="33">Class-VII</option>
					<option value="34">Class-VIII</option>
					<option value="35">Class-IX</option>
					<option value="36">Class-X</option>
					<option value="37">Alim 1st Year</option>
					<option value="38">Alim 2nd Year</option>
					<option value="39">Fazil 1st Year</option>
					<option value="40">Fazil 2nd Year</option>
					<option value="41">Fazil 3rd Year</option>					
					<option value="42">kamil 1st year</option>
				</select>
			</div>

			<div style="background: #FFF;" class="table-responsive">
				<table class="table table-striped">
					<thead style="background: #002E5B;">
						<tr>
							<th style=" color: #FFF;">#</th>
							<th style=" color: #FFF;">Picture</th>
							<th style=" color: #FFF;">Name</th>
							<th style=" color: #FFF;">Father Name</th>
							<th style=" color: #FFF;">Phone</th>
							<th style=" color: #FFF;">E-mail</th>
							<th style=" color: #FFF;">Details</th>
						</tr>
					</thead>
					<tbody id="data">
						<tr>
							<td align="center"><span><img src="../public/images/ajax-loader.gif" style="display:none"
										id="loader" alt="loading"></span></td>
							<td align="center" colspan="6"><strong id="warning" style="color:#EC971F;"><i
										class="fa fa-warning"></i> No Record Found.</strong></td>
						</tr>
					</tbody>
				</table><!--//table-->
			</div><!--//table-responsive-->


			<script>
				$(function () {
					$('#category').on('change', function (e) {
						var class_id = e.target.value;
						var loader = $('#loader');
						var warning = $('#warning');
						warning.hide();
						loader.show();

						$("#data").load('http://falahiafeni.edu.bd/view/stdLists' + '/' + class_id + '/show');
					});
				});
			</script>
		</div>