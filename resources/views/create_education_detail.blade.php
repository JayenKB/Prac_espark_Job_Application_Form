@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Education Detail</h2>
  <div class="card">
	<form action="{{route('post_step_two_create_education_detail')}}" method="post">
		<input type="hidden" name="id" value="@if(isset($jobapp->id)){{$jobapp->id}}@endif">
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
				      	<input type="text" class="form-control" id="" placeholder="Enter passing year" name="ssc_passing_year" value="@if(old('ssc_passing_year')!=''){{old('ssc_passing_year')}}@elseif(isset($jobapp->ssc_passing_year)){{$jobapp->ssc_passing_year}}@else{{old('ssc_passing_year')}}@endif">
				    </div>
				    <div class="col">
				    	<label>Percentage:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter percentage" name="ssc_percentage" value="@if(old('ssc_percentage')!=''){{old('ssc_percentage')}}@elseif(isset($jobapp->ssc_percentage)){{$jobapp->ssc_percentage}}@else{{old('ssc_percentage')}}@endif">
				    </div>
			  	</div>
			  	<h3>HSC/Diploma Result</h3>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Name of Bord:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter name of bord" name="hsc_name_of_bord" value="@if(old('ssc_name_of_bord')!=''){{old('ssc_name_of_bord')}}@elseif(isset($jobapp->ssc_name_of_bord)){{$jobapp->ssc_name_of_bord}}@else{{old('ssc_name_of_bord')}}@endif">
			    	</div>
				    <div class="col">
				    	<label>Passing Year:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter passing year" name="hsc_passing_year" value="@if(old('hsc_passing_year')!=''){{old('hsc_passing_year')}}@elseif(isset($jobapp->hsc_passing_year)){{$jobapp->hsc_passing_year}}@else{{old('hsc_passing_year')}}@endif">
				    </div>
				    <div class="col">
				    	<label>Percentage:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter percentage" name="hsc_percentage" value="@if(old('hsc_percentage')!=''){{old('hsc_percentage')}}@elseif(isset($jobapp->hsc_percentage)){{$jobapp->hsc_percentage}}@else{{old('hsc_percentage')}}@endif">
				    </div>
			  	</div>
			  	<h3>Bachelor Degree</h3>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Course Name:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Course name" name="bechlor_course_name" value="@if(old('bechlor_course_name')!=''){{old('bechlor_course_name')}}@elseif(isset($jobapp->bechlor_course_name)){{$jobapp->bechlor_course_name}}@else{{old('bechlor_course_name')}}@endif">
			    	</div>
				    <div class="col">
				    	<label>University:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter university" name="bechlor_university" value="@if(old('bechlor_university')!=''){{old('bechlor_university')}}@elseif(isset($jobapp->bechlor_university)){{$jobapp->bechlor_university}}@else{{old('bechlor_university')}}@endif">
				    </div>
				    <div class="col">
				    	<label>Passiong Year:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter passing year" name="bechlor_passing_year" value="@if(old('bechlor_passing_year')!=''){{old('bechlor_passing_year')}}@elseif(isset($jobapp->bechlor_passing_year)){{$jobapp->bechlor_passing_year}}@else{{old('bechlor_passing_year')}}@endif">
				    </div>
				    <div class="col">
				    	<label>Percentage:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter percentage" name="bechlor_percentage" value="@if(old('bechlor_percentage')!=''){{old('bechlor_percentage')}}@elseif(isset($jobapp->bechlor_percentage)){{$jobapp->bechlor_percentage}}@else{{old('bechlor_percentage')}}@endif">
				    </div>
			  	</div>
			  	<h3>Master Degree</h3>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Course Name:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Course name" name="master_course_name" value="@if(old('master_course_name')!=''){{old('master_course_name')}}@elseif(isset($jobapp->master_course_name)){{$jobapp->master_course_name}}@else{{old('master_course_name')}}@endif">
			    	</div>
				    <div class="col">
				    	<label>University:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter university" name="master_university" value="@if(old('master_university')!=''){{old('master_university')}}@elseif(isset($jobapp->master_university)){{$jobapp->master_university}}@else{{old('master_university')}}@endif">
				    </div>
				    <div class="col">
				    	<label>Passiong Year:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter passing year" name="master_passing_year" value="@if(old('master_passing_year')!=''){{old('master_passing_year')}}@elseif(isset($jobapp->master_passing_year)){{$jobapp->master_passing_year}}@else{{old('master_passing_year')}}@endif">
				    </div>
				    <div class="col">
				    	<label>Percentage:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter percentage" name="master_percentage" value="@if(old('master_percentage')!=''){{old('master_percentage')}}@elseif(isset($jobapp->master_percentage)){{$jobapp->master_percentage}}@else{{old('master_percentage')}}@endif">
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