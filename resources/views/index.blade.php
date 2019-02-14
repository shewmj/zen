
@extends('layouts.base')


@section('title', 'MJS')

@section('content')        

<div class="flex-center">
	<section class="scroll-nav">
		<nav class="navbar">
			<div class="navbar-menu" id="nav-menu" >
				<div class="navbar-start">
					<a class="navbar-item" id="home2">MJS</a>
					<a class="navbar-item" id="abou2">About</a>     
					<a class="navbar-item" id="proj2">Projects</a>
					<a class="navbar-item" id="educ2">Education</a>
					<a class="navbar-item" id="resu2">Resume</a>	  
				</div>
			</div>

		</nav>
	</section>

	<section class="start-view"  id="home">
		<div class="content flex-center full-height">
	        <div class="m-b-md">
	            <span class="initials">M</span>atthew
	            <span class="initials">J</span>ack
	            <span class="initials">S</span>hew
	        </div>

    	</div>
    	
    	<nav class="navbar">
			<div class="navbar-menu" id="nav-menu" >
				<div class="navbar-start">
					<a class="navbar-item" id="home1">MJS</a>
					<a class="navbar-item" id="abou1">About</a>     
					<a class="navbar-item" id="proj1">Projects</a>
					<a class="navbar-item" id="educ1">Education</a>
					<a class="navbar-item" id="resu1">Resume</a>	  
				</div>
			</div>
		</nav>
		

	</section>
	<section class="grey" id="abou">
		<div class="content flex-center full-height">
	        <div class="m-b-md">
	            About
	        </div>
	    </div>
	</section>

	<section id="proj">
		<div class="content flex-center full-height">
	        <div class="m-b-md">
	            Projects
	        </div>
	    </div>
	</section>

	<section  class="grey" id="educ">
		<div class="content flex-center full-height">
	        <div class="m-b-md">
	            Education
	        </div>
	    </div>
	</section>

	<section id="resu">
		<div class="content flex-center full-height">
	        <div class="m-b-md">
	            Resume
	        </div>
	    </div>
	</section>
    
    
</div>
<script src="js/script.js"></script>


@endsection
