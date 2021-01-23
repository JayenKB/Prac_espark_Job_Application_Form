@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Referance Contact</h2>
  	<div class="card">
    	<form action="{{route('post_step_six_referance_contact')}}" method="post">
    		<div class="card-header">Referance Contact</div>
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
				    		<label>Name:</label>
				      		<input type="text" class="form-control" id="" placeholder="Enter name" name="referance_contact_name" value="@if(old('referance_contact_name')!=''){{old('referance_contact_name')}}@elseif(isset($jobapp->referance_contact_name)){{$jobapp->referance_contact_name}}@else{{old('referance_contact_name')}}@endif">
				    	</div>
				    	<div class="col">
				    		<label>Contact Number:</label>
				      		<input type="text" class="form-control" id="" placeholder="Enter contact number" name="referance_contact_number" value="@if(old('referance_contact_number')!=''){{old('referance_contact_number')}}@elseif(isset($jobapp->referance_contact_number)){{$jobapp->referance_contact_number}}@else{{old('referance_contact_number')}}@endif">
				    	</div>
				    	<div class="col">
				    		<label>Relation:</label>
				      		<input type="text" class="form-control" id="" placeholder="Enter relation" name="referance_contact_relation" value="@if(old('referance_contact_relation')!=''){{old('referance_contact_relation')}}@elseif(isset($jobapp->referance_contact_relation)){{$jobapp->referance_contact_relation}}@else{{old('referance_contact_relation')}}@endif">
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