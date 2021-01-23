@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Preferances</h2>
  	<div class="card">
    	<form action="{{route('post_step_seven_preferances')}}" method="post">
    		<input type="hidden" name="id" value="@if(isset($jobapp->id)){{$jobapp->id}}@endif">
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
			      		<input type="text" class="form-control" id="" placeholder="Enter preferd location" name="preferances_preferd_location" value="@if(old('preferances_preferd_location')!=''){{old('preferances_preferd_location')}}@elseif(isset($jobapp->preferances_preferd_location)){{$jobapp->preferances_preferd_location}}@else{{old('preferances_preferd_location')}}@endif">
			    	</div>
			    	<div class="col">
			    		<label>Notice period:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Notice period" name="preferances_notice_period" value="@if(old('preferances_notice_period')!=''){{old('preferances_notice_period')}}@elseif(isset($jobapp->preferances_notice_period)){{$jobapp->preferances_notice_period}}@else{{old('preferances_notice_period')}}@endif">
			    	</div>
			  	</div>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Expacted CTC:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Expacted CTC" name="preferances_expacted_CTC" value="@if(old('preferances_expacted_CTC')!=''){{old('preferances_expacted_CTC')}}@elseif(isset($jobapp->preferances_expacted_CTC)){{$jobapp->preferances_expacted_CTC}}@else{{old('preferances_expacted_CTC')}}@endif">
			    	</div>
			    	<div class="col">
			    		<label>Current CTC:</label>
			      		<input type="text" class="form-control" id="" placeholder="Enter Current CTC" name="preferances_current_CTC" value="@if(old('preferances_current_CTC')!=''){{old('preferances_current_CTC')}}@elseif(isset($jobapp->preferances_current_CTC)){{$jobapp->preferances_current_CTC}}@else{{old('preferances_current_CTC')}}@endif">
			    	</div>
			  	</div>
			  	<div class="form-row">
			    	<div class="col">
			    		<label>Department:</label>
			      		<select class="form-control" name="preferances_department">
			      			<option>Select</option>
			      			<option value="development" @if(isset($jobapp->preferances_department)){{$jobapp->preferances_department == "development" ? 'selected' : ''}}@endif>Development</option>
			      			<option value="design" @if(isset($jobapp->preferances_department)){{$jobapp->preferances_department == "design" ? 'selected' : ''}}@endif>Design</option>
			      			<option value="marketing" @if(isset($jobapp->preferances_department)){{$jobapp->preferances_department == "marketing" ? 'selected' : ''}}@endif>Marketing</option>
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