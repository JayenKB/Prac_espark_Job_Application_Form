@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Work Experience</h2>
  	<div class="card">
    	<form action="{{route('post_step_three_workexperience_detail')}}" method="post">
    		<input type="hidden" name="id" value="@if(isset($jobapp->id)){{$jobapp->id}}@endif">
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
				      		<input type="text" class="form-control" id="" placeholder="Enter company name" name="workex_company_name" value="@if(old('workex_company_name')!=''){{old('workex_company_name')}}@elseif(isset($jobapp->workex_company_name)){{$jobapp->workex_company_name}}@else{{old('workex_company_name')}}@endif">
				    	</div>
					    <div class="col">
					    	<label>Designation:</label>
					      	<input type="text" class="form-control" id="" placeholder="Enter designation" name="workex_designation" value="@if(old('workex_designation')!=''){{old('workex_designation')}}@elseif(isset($jobapp->workex_designation)){{$jobapp->workex_designation}}@else{{old('workex_designation')}}@endif">
					    </div>
					    <div class="col">
					    	<label>From:</label>
					      	<input type="date" class="form-control" id="" name="from_date" value="@if(old('from_date')!=''){{old('from_date')}}@elseif(isset($jobapp->from_date)){{$jobapp->from_date}}@else{{old('from_date')}}@endif">
					    </div>
					    <div class="col">
					    	<label>To:</label>
					      	<input type="date" class="form-control" id="" name="to_date" value="@if(old('to_date')!=''){{old('to_date')}}@elseif(isset($jobapp->to_date)){{$jobapp->to_date}}@else{{old('to_date')}}@endif">
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