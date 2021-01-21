@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Education Detail</h2>
  <div class="card">
	<form action="{{route('post_step_two_create_education_detail')}}" method="post">
	    <div class="card-header">Education Detail</div>
	    <div class="card-body">
	    		@csrf
	    		@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
		  		<h3>SSC Result</h3>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Name of Bord:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter name of bord" name="ssc_name_of_bord" value="@if(old('ssc_name_of_bord')!=''){{old('ssc_name_of_bord')}}@elseif(isset($jobapp->ssc_name_of_bord)){{$jobapp->ssc_name_of_bord}}@else{{old('ssc_name_of_bord')}}@endif">
			    	</div>
				    <div class="col">
				    	<label>Passing Year:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter passing year" name="ssc_passing_year">
				    </div>
				    <div class="col">
				    	<label>Percentage:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter percentage" name="ssc_percentage">
				    </div>
			  	</div>
			  	<h3>HSC/Diploma Result</h3>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Name of Bord:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter name of bord" name="hsc_name_of_bord">
			    	</div>
				    <div class="col">
				    	<label>Passing Year:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter passing year" name="hsc_passing_year">
				    </div>
				    <div class="col">
				    	<label>Percentage:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter percentage" name="hsc_percentage">
				    </div>
			  	</div>
			  	<h3>Bachelor Degree</h3>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Course Name:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Course name" name="bechlor_course_name">
			    	</div>
				    <div class="col">
				    	<label>University:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter university" name="bechlor_university">
				    </div>
				    <div class="col">
				    	<label>Passiong Year:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter passing year" name="bechlor_passing_year">
				    </div>
				    <div class="col">
				    	<label>Percentage:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter percentage" name="bechlor_percentage">
				    </div>
			  	</div>
			  	<h3>Master Degree</h3>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Course Name:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Course name" name="master_course_name">
			    	</div>
				    <div class="col">
				    	<label>University:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter university" name="master_university">
				    </div>
				    <div class="col">
				    	<label>Passiong Year:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter passing year" name="master_passing_year">
				    </div>
				    <div class="col">
				    	<label>Percentage:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter percentage" name="master_percentage">
				    </div>
			  	</div>
	    </div> 
	    <div class="card-footer text-right">
	    	<!-- <a href="{{route('step_one_create_basic_detail')}}" class="btn btn-danger">Previous</a> -->
	        <button type="submit" class="btn btn-primary">Next</button>
	    </div>
	</form>
  </div>
</div>
@endsection