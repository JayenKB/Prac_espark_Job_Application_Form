@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Basic Detail</h2>
  <div class="text-right">
  	<a href="{{route('home')}}" class="btn btn-danger">back</a>
  </div>
  	<div class="card">
	  <div class="card-header">Basic Detail</div>
	  	<div class="card-body">
	  		<ul>
	  			<li>First Name : {{$jobapp->first_name}}</li>
	  			<li>Lsat Name : {{$jobapp->last_name}}</li>
	  			<li>Designation : {{$jobapp->designation}}</li>
	  			<li>Email: {{$jobapp->email}}</li>
	  			<li>Phone No: {{$jobapp->phoneno}}</li>
	  			<li>City: {{$jobapp->city}}</li>
	  			<li>State: {{$jobapp->state}}</li>
	  			<li>Gender: {{$jobapp->gender}}</li>
	  			<li>Zip code: {{$jobapp->zip}}</li>
	  			<li>RelationShip Status: {{$jobapp->relationship_status}}</li>
	  			<li>Date Of Birth: {{$jobapp->dateofbirth}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Education Detail</h2>
  	<div class="card">
	  <div class="card-header">Education Detail</div>
	  	<div class="card-body">
	  		<h3>SSC Result</h3>
	  		<ul>
	  			<li>Name Of board : {{$jobapp->ssc_name_of_bord}}</li>
	  			<li>Passiong Year : {{$jobapp->ssc_passing_year}}</li>
	  			<li>Percentage : {{$jobapp->ssc_percentage}}</li>
	  		</ul>
	  		<h3>HSC/Diploma Result</h3>
	  		<ul>
	  			<li>Name Of board : {{$jobapp->hsc_name_of_bord}}</li>
	  			<li>Passiong Year : {{$jobapp->hsc_passing_year}}</li>
	  			<li>Percentage : {{$jobapp->hsc_percentage}}</li>
	  		</ul>
	  		<h3>Bachelor degree</h3>
	  		<ul>
	  			<li>Caurse Name : {{$jobapp->bechlor_course_name}}</li>
	  			<li>University : {{$jobapp->bechlor_university}}</li>
	  			<li>Passiong Year  : {{$jobapp->bechlor_passing_year}}</li>
	  			<li>Percentage  : {{$jobapp->bechlor_percentage}}</li>
	  		</ul>
	  		<h3>Master degree</h3>
	  		<ul>
	  			<li>Caurse Name : {{$jobapp->master_course_name}}</li>
	  			<li>University : {{$jobapp->master_university}}</li>
	  			<li>Passiong Year  : {{$jobapp->master_passing_year}}</li>
	  			<li>Percentage  : {{$jobapp->master_percentage}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Work Experience</h2>
  	<div class="card">
	  <div class="card-header">Work Experience</div>
	  	<div class="card-body">
	  		<ul>
	  			<li>Company name : {{$jobapp->workex_company_name}}</li>
	  			<li>Designation : {{$jobapp->workex_designation}}</li>
	  			<li>From : {{$jobapp->from_date}}</li>
	  			<li>to: {{$jobapp->to_date}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Language Known</h2>
  	<div class="card">
	  <div class="card-header">Language Known</div>
	  	<div class="card-body">
	  		<ul>
	  			<li>Language KNown : {{$jobapp->language_known}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Technologies youo know</h2>
  	<div class="card">
	  <div class="card-header">Technologies youo know</div>
	  	<div class="card-body">
	  		<ul>
	  			<li>PHP : {{$jobapp->technologies_you_know}}</li>
	  			<li>MySQL : {{$jobapp->mysql_technologies_you_know}}</li>
	  			<li>Laravel : {{$jobapp->laravel_technologies_you_know}}</li>
	  			<li>Oracle : {{$jobapp->oracle_technologies_you_know}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Referance Contact</h2>
  	<div class="card">
	  <div class="card-header">Referance Contact</div>
	  	<div class="card-body">
	  		<ul>
	  			<li>Name : {{$jobapp->referance_contact_name}}</li>
	  			<li>Contact No : {{$jobapp->referance_contact_number}}</li>
	  			<li>Relation : {{$jobapp->referance_contact_relation}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Preferances</h2>
  	<div class="card">
	  <div class="card-header">Preferances</div>
	  	<div class="card-body">
	  		<ul>
	  			<li>Preferd location  : {{$jobapp->preferances_preferd_location}}</li>
	  			<li>Notice period : {{$jobapp->preferances_notice_period}}</li>
	  			<li>Expacted CTC : {{$jobapp->preferances_expacted_CTC}}</li>
	  			<li>Current	 CTC : {{$jobapp->preferances_current_CTC}}</li>
	  			<li>Department : {{$jobapp->preferances_department}}</li>
	  		</ul>
	  	</div>
	</div>
	
</div>
@endsection