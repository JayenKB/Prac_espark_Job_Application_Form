@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Language Known</h2>
  	<div class="card">
    	<form action="{{route('post_step_four_language_known')}}" method="post">
    		<input type="hidden" name="id" value="@if(isset($jobapp->id)){{$jobapp->id}}@endif">
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
				    <input type="checkbox" class="form-check-input" name="language_known" value="hindi" @if(isset($jobapp->language_known)){{$jobapp->language_known == "hindi" ? 'checked' : ''}}@endif>Hindi
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="read" @if(isset($jobapp->language_known)){{$jobapp->language_known == "read" ? 'checked' : ''}}@endif>Read
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="write" @if(isset($jobapp->language_known)){{$jobapp->language_known == "write" ? 'checked' : ''}}@endif>Write
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="speak" @if(isset($jobapp->language_known)){{$jobapp->language_known == "speak" ? 'checked' : ''}}@endif>Speak
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="english" @if(isset($jobapp->language_known)){{$jobapp->language_known == "english" ? 'checked' : ''}}@endif>English
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="read" @if(isset($jobapp->language_known)){{$jobapp->language_known == "read" ? 'checked' : ''}}@endif>Read
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="write" @if(isset($jobapp->language_known)){{$jobapp->language_known == "write" ? 'checked' : ''}}@endif>Write
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="speak" @if(isset($jobapp->language_known)){{$jobapp->language_known == "speak" ? 'checked' : ''}}@endif>Speak
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="gujrati" @if(isset($jobapp->language_known)){{$jobapp->language_known == "gujrati" ? 'checked' : ''}}@endif>Gujrati
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="read" @if(isset($jobapp->language_known)){{$jobapp->language_known == "read" ? 'checked' : ''}}@endif>Read
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="write" @if(isset($jobapp->language_known)){{$jobapp->language_known == "write" ? 'checked' : ''}}@endif>Write
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="language_known" value="speak" @if(isset($jobapp->language_known)){{$jobapp->language_known == "speak" ? 'checked' : ''}}@endif>Speak
				  </label>
				</div>
		    </div> 
		    <div class="card-footer text-right">
		    	<a href="{{route('step_three_workexperience_detail')}}" class="btn btn-danger">Previous</a>
		        <button type="submit" class="btn btn-primary">Next</button>
		    </div>
	    </form>
  	</div>
</div>
@endsection