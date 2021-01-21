@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Language Known</h2>
  	<div class="card">
    	<form action="{{route('post_step_four_language_known')}}" method="post">
    		<div class="card-header">Language Known</div>
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
		  		<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="hindi">Hindi
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="hindi_read">Read
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="hindi_write">Write
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="hindi_speak">Speak
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="english">English
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="english_read">Read
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="english_write">Write
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="english_speak">Speak
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="gujrati">Gujrati
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="gujrati_read">Read
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="gujrati_write">Write
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="gujrati_speak">Speak
				  </label>
				</div>
		    </div> 
		    <div class="card-footer text-right">
		        <button type="submit" class="btn btn-primary">Next</button>
		    </div>
	    </form>
  	</div>
</div>
@endsection