@extends('welcome')
  
@section('content')
<style type="text/css">
	span{ font-weight: bold; }
</style>
<div class="container">
  <h2>Basic Detail</h2>
  <div class="text-right">
  	<a href="{{route('home')}}" class="btn btn-danger">back</a>
  </div>
  	<div class="card">
	  <div class="card-header">Basic Detail</div>
	  	<div class="card-body">
	  		<ul>
	  			<li><span> First Name:</span> {{$jobapp->first_name}}</li>
	  			<li><span> Last Name:</span> {{$jobapp->last_name}}</li>
	  			<li><span> Designation:</span> {{$jobapp->designation}}</li>
	  			<li><span> Email:</span> {{$jobapp->email}}</li>
	  			<li><span> Phone No:</span> {{$jobapp->phoneno}}</li>
	  			<li><span> City: </span> {{$jobapp->city}}</li>
	  			<li><span> State: </span> {{$jobapp->state}}</li>
	  			<li><span> Gender: </span> {{$jobapp->gender}}</li>
	  			<li><span> Zip code:</span> {{$jobapp->zip}}</li>
	  			<li><span> RelationShip Status:</span> {{$jobapp->relationship_status}}</li>
	  			<li><span> Date Of Birth:</span> {{$jobapp->dateofbirth}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Education Detail</h2>
  	<div class="card">
	  <div class="card-header">Education Detail</div>
	  	<div class="card-body">
	  		<h3>SSC Result</h3>
	  		<ul>
	  			<li><span> Name Of board:</span> {{$jobapp->ssc_name_of_bord}}</li>
	  			<li><span> Passiong Year: </span> {{$jobapp->ssc_passing_year}}</li>
	  			<li><span> Percentage:</span> {{$jobapp->ssc_percentage}}</li>
	  		</ul>
	  		<h3>HSC/Diploma Result</h3>
	  		<ul>
	  			<li><span> Name Of board:</span> {{$jobapp->hsc_name_of_bord}}</li>
	  			<li><span> Passiong Year:</span> {{$jobapp->hsc_passing_year}}</li>
	  			<li><span> Percentage:</span> {{$jobapp->hsc_percentage}}</li>
	  		</ul>
	  		<h3>Bachelor degree</h3>
	  		<ul>
	  			<li><span> Caurse Name:</span> {{$jobapp->bechlor_course_name}}</li>
	  			<li><span> University: </span> {{$jobapp->bechlor_university}}</li>
	  			<li><span> Passiong Year: </span> {{$jobapp->bechlor_passing_year}}</li>
	  			<li><span> Percentage: </span> {{$jobapp->bechlor_percentage}}</li>
	  		</ul>
	  		<h3>Master degree</h3>
	  		<ul>
	  			<li><span> Caurse Name: </span> {{$jobapp->master_course_name}}</li>
	  			<li><span> University: </span> {{$jobapp->master_university}}</li>
	  			<li><span> Passiong Year: </span> {{$jobapp->master_passing_year}}</li>
	  			<li><span> Percentage: </span> {{$jobapp->master_percentage}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Work Experience</h2>
  	<div class="card">
	  <div class="card-header">Work Experience</div>
	  	<div class="card-body">
	  		<ul>
	  			<li><span> Company name: </span> {{$jobapp->workex_company_name}}</li>
	  			<li><span> Designation: </span> {{$jobapp->workex_designation}}</li>
	  			<li><span> From: </span> {{$jobapp->from_date}}</li>
	  			<li><span> to: </span> {{$jobapp->to_date}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Language Known</h2>
  	<div class="card">
	  <div class="card-header">Language Known</div>
	  	<div class="card-body">
	  		<ul>
	  			<li><span> Language KNown:</span> {{$jobapp->language_known}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Technologies youo know</h2>
  	<div class="card">
	  <div class="card-header">Technologies youo know</div>
	  	<div class="card-body">
	  		<ul>
	  			<li><span> PHP: </span> {{$jobapp->technologies_you_know}}</li>
	  			<li><span> MySQL: </span> {{$jobapp->mysql_technologies_you_know}}</li>
	  			<li><span> Laravel: </span> {{$jobapp->laravel_technologies_you_know}}</li>
	  			<li><span> Oracle: </span> {{$jobapp->oracle_technologies_you_know}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Referance Contact</h2>
  	<div class="card">
	  <div class="card-header">Referance Contact</div>
	  	<div class="card-body">
	  		<ul>
	  			<li><span> Name: </span> {{$jobapp->referance_contact_name}}</li>
	  			<li><span> Contact No: </span> {{$jobapp->referance_contact_number}}</li>
	  			<li><span> Relation: </span> {{$jobapp->referance_contact_relation}}</li>
	  		</ul>
	  	</div>
	</div>
	<h2>Preferances</h2>
  	<div class="card">
	  <div class="card-header">Preferances</div>
	  	<div class="card-body">
	  		<ul>
	  			<li><span> Preferd location: </span> {{$jobapp->preferances_preferd_location}}</li>
	  			<li><span> Notice period: </span> {{$jobapp->preferances_notice_period}}</li>
	  			<li><span> Expacted CTC: </span> {{$jobapp->preferances_expacted_CTC}}</li>
	  			<li><span> Current	 CTC: </span> {{$jobapp->preferances_current_CTC}}</li>
	  			<li><span> Department: </span> {{$jobapp->preferances_department}}</li>
	  		</ul>
	  	</div>
	</div>
	
</div>
@endsection