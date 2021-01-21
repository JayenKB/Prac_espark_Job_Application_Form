@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Work Experience</h2>
  	<div class="card">
    	<form action="{{route('post_step_three_workexperience_detail')}}" method="post">
    		<div class="card-header">Work Experience</div>
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
				    		<label>Company Name:</label>
				      		<input type="text" class="form-control" id="" placeholder="Enter company name" name="workex_company_name">
				    	</div>
					    <div class="col">
					    	<label>Designation:</label>
					      	<input type="text" class="form-control" id="" placeholder="Enter designation" name="workex_designation">
					    </div>
					    <div class="col">
					    	<label>From:</label>
					      	<input type="date" class="form-control" id="" name="from_date">
					    </div>
					    <div class="col">
					    	<label>To:</label>
					      	<input type="date" class="form-control" id="" name="to_date">
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