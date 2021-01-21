@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Preferances</h2>
  	<div class="card">
    	<form action="{{route('post_step_seven_preferances')}}" method="post">
    		<div class="card-header">Preferances</div>
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
		  		<div class="form-row">
			    	<div class="col">
			    		<label>Preferd location:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter preferd location" name="preferances_preferd_location">
			    	</div>
			    	<div class="col">
			    		<label>Notice period:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Notice period" name="preferances_notice_period">
			    	</div>
			  	</div>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Expacted CTC:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Expacted CTC" name="preferances_expacted_CTC">
			    	</div>
			    	<div class="col">
			    		<label>Current CTC:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Current CTC" name="preferances_current_CTC">
			    	</div>
			  	</div>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Department:</label>
			      		<select class="form-control" name="preferances_department">
			      			<option>Select</option>
			      			<option>Development</option>
			      			<option>Design</option>
			      			<option>Marketing</option>
			      		</select>
			    	</div>
			  	</div>
		    </div> 
		    <div class="card-footer text-right">
		        <button type="submit" class="btn btn-primary">Next</button>
		    </div>
	    </form>
  	</div>
</div>
@endsection