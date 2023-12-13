<nav class="main-nav noPrintShow" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button><!--//nav-toggle-->
		</div><!--//navbar-header-->
		<div class="navbar-collapse collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active nav-item"><a href="{{url('home')}}">Home</a></li>
				<li class="nav-item"><a href="{{url('employee')}}">Employees</a></li>
				<li class="nav-item"><a href="{{url('students')}}">Student Info</a></li>
				<li class="nav-item"><a href="{{url('notice')}}">Notice</a></li>

				<li class="nav-item dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
						data-close-others="false" href="{{('pdfResult')}}">Result <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="{{url('termResult')}}">Terminal Result</a></li>
						<li class="nav-item"><a href="{{url('tutorialResult')}}">Tutorial Result</a></li>
						<li class="nav-item"><a href="{{url('boardResult')}}">Board Result</a></li>
						<li class="nav-item"><a href="{{url('pdfResult')}}">PDF Result</a></li>
					</ul>
				</li><!--//dropdown-->

				
				<li class="nav-item dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
						data-close-others="false" href="#">Study Plan <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li class="nav-item"><a href="{{url('syllabus')}}">Syllabus</a></li>
						<li><a href="{{url('classrRoutine')}}">Class Routine</a></li>
						<li><a href="{{url('examroutine')}}">Exam Routine </a></li>
					</ul>
				</li><!--//dropdown-->

				<li class="nav-item"><a href="{{url('gallery')}}">Photo Gallery</a></li>

				<li class="nav-item dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0"
						data-close-others="false" href="{{url('admission')}}">Admission <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="{{url('admission/onlineAdmission')}}">Online Admission</a></li>
						<li><a href="{{url('admission/admissionForm')}}" target='_blank'>Admission Form Print</a>
						</li>
						<li><a href="{{url('admission/updateApplication')}}" >Admission Form Update</a></li>
						<li><a href="{{url('admission/admissionResult')}}">Admission Result Check</a>
						</li>
					</ul>
				</li>
				<li class="nav-item"><a href="{{url('contact')}}">Contact Us</a></li>
			</ul>
		</div>
	</div>
</nav>