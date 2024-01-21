<div class="col-md-12 noPrintShow">
	<div class="page-wrapper">
		<header class="page-heading clearfix">
			<h1 class="heading-title pull-left">Result</h1>
			<div class="breadcrumbs pull-right">
				<ul class="breadcrumbs-list">
					<li class="breadcrumbs-label">You are here:</li>
					<li><a href="{{url('home')}}">Home</a><i class="fa fa-angle-right"></i></li>
					<li class="current">Leadership Team</li>
				</ul>
			</div><!--//breadcrumbs-->
		</header>
	</div>
</div>

<div class="col-md-9">
	<div style="background: #FFF;" class="table-responsive">
		<table class="table table-bordered">
			<thead style="background: #002E5B;">
				<tr>
					<th style=" color: #FFF;">#</th>
					<th style=" color: #FFF;">Class</th>
					<th style=" color: #FFF;" width="350">Title</th>
					<th style=" color: #FFF;">Published Date</th>
					<th style=" color: #FFF;">Download</th>
				</tr>
			</thead>
			
			<tbody>
				@foreach($results as $result)
				<tr>
					<td>{{$result['id']}}</td>
					<td>{{$result['class']}}</td>
					<td><a href='javascript:;'>{{$result['resultTitle']}}</a> <span class="label label-success"></span>
					</td>
					<td><i class="fa fa-calendar"></i> {{$result['date']}}</td>

					<td>
						<a href="{{asset('../results/3183608Jan2023.pdf')}}" target="_blank"
							class="btn btn-success btn-sm"><i class='fa fa-download'>
								&nbsp;{{$result['download']}}</i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table><!--//table-->
	</div><!--//table-responsive-->
	<tr>
		<td colspan="6">

		</td>
	</tr>
</div>