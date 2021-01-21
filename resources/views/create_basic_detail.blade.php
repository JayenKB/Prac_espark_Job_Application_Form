@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Basic Detail</h2>
  <div class="card">
	<form action="{{route('post_step_one_create_basic_detail')}}" method="post">
	    <div class="card-header">Basic Detail</div>
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
			    	<label>First name:</label>
			      	<input type="text" class="form-control" id="" placeholder="Enter firstname" name="first_name" value="@if(old('first_name')!=''){{old('first_name')}}@elseif(isset($jobapp->first_name)){{$jobapp->first_name}}@else{{old('first_name')}}@endif">
			    </div>
			    <div class="col">
			    	<label>Last name:</label>
			      	<input type="text" class="form-control" id="" placeholder="Enter lastname" name="last_name" value="@if(old('last_name')!=''){{old('last_name')}}@elseif(isset($jobapp->last_name)){{$jobapp->last_name}}@else{{old('last_name')}}@endif">
			    </div>
			  </div>
			  <div class="form-row">
			  	<div class="col">
			    	<label>Designation</label>
			      	<input type="text" class="form-control" id="" placeholder="Enter designation" name="designation" value="@if(old('designation')!=''){{old('designation')}}@elseif(isset($jobapp->designation)){{$jobapp->designation}}@else{{old('designation')}}@endif">
			    </div>
			    <div class="col">
			    	<label>Email</label>
			      	<input type="text" class="form-control" id="" placeholder="Enter email" name="email" value="@if(old('email')!=''){{old('email')}}@elseif(isset($jobapp->email)){{$jobapp->email}}@else{{old('email')}}@endif">
			    </div>
			  </div>
		  		<div class="form-row">
					<div class="col">
				    	<label>Phone No:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter phone no." name="phoneno" value="@if(old('phoneno')!=''){{old('phoneno')}}@elseif(isset($jobapp->phoneno)){{$jobapp->phoneno}}@else{{old('phoneno')}}@endif">
				    </div>
				    <div class="col">
				    	<label>Zip Code</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter zipcode" name="zip" value="@if(old('zip')!=''){{old('zip')}}@elseif(isset($jobapp->zip)){{$jobapp->zip}}@else{{old('zip')}}@endif">
				    </div>  		
		  		</div>

			  <div class="form-row">
			    <div class="col">
			    	<label>Address 1</label>
			      	<textarea class="form-control" placeholder="Enter Address 1" name="address_1">@if(old('address_1')!=''){{old('address_1')}}@elseif(isset($jobapp->address_1)){{$jobapp->address_1}}@else{{old('address_1')}}@endif</textarea>
			    </div>
			    <div class="col">
			    	<label>Address 2</label>
			      	<textarea class="form-control" placeholder="Enter Address 2" name="address_2">@if(old('address_2')!=''){{old('address_2')}}@elseif(isset($jobapp->address_2)){{$jobapp->address_2}}@else{{old('address_2')}}@endif</textarea>
			    </div>
			  </div>
			  	<div class="form-row">
					<div class="col">
				    	<label>Gender:</label>
				      	<div class="form-check">
						  <label class="form-check-label">
						    <input type="radio" class="form-check-input" name="gender" value="male" @if(isset($jobapp->gender)){{$jobapp->gender == "male" ? 'checked' : ''}}@endif>Male
						  </label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
						    <input type="radio" class="form-check-input" name="gender" value="female" @if(isset($jobapp->gender)){{$jobapp->gender == "female" ? 'checked' : ''}}@endif>Female
						  </label>
						</div>
				    </div>
				    <div class="col">
				    	<label>RelationShip Status</label>
				      	<select class="form-control" name="relationship_status">
				      		<option @if(isset($jobapp->relationship_status)){{$jobapp->relationship_status == "single" ? 'selected' : ''}}@endif value="single">Single</option>
				      		<option value="married" @if(isset($jobapp->relationship_status)){{$jobapp->relationship_status == "married" ? 'selected' : ''}}@endif>Married</option>
				      	</select>
				    </div>  		
		  		</div>
		  		<div class="form-row">
					<div class="col">
				    	<label>City:</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter city" name="city" value="@if(old('city')!=''){{old('city')}}@elseif(isset($jobapp->city)){{$jobapp->city}}@else{{old('city')}}@endif">
				    </div>
				    <div class="col">
				    	<label>State</label>
				      	<input type="text" class="form-control" id="" placeholder="Enter state" name="state" value="@if(old('state')!=''){{old('state')}}@elseif(isset($jobapp->state)){{$jobapp->state}}@else{{old('state')}}@endif">
				    </div>  		
		  		</div>
		  		<div class="form-row">
					<div class="col">
				    	<label>Date of birth:</label>
				      	<input type="date" class="form-control" id="" name="dateofbirth" value="@if(old('dateofbirth')!=''){{old('dateofbirth')}}@elseif(isset($jobapp->dateofbirth)){{$jobapp->dateofbirth}}@else{{old('dateofbirth')}}@endif">
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