@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Technologies you know</h2>
  	<div class="card">
    	<form action="{{route('post_step_five_technologies_you_know')}}" method="post">
    		<input type="hidden" name="id" value="@if(isset($jobapp->id)){{$jobapp->id}}@endif">
    		<div class="card-header">Technologies you know</div>
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
				    <input type="checkbox" class="form-check-input" name="technologies_you_know" value="php" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "php" ? 'checked' : ''}}@endif>PHP
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="technologies_you_know" value="beginer" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "beginer" ? 'checked' : ''}}@endif>Beginer
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="technologies_you_know" value="mideator" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "mideator" ? 'checked' : ''}}@endif>Mideator
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="technologies_you_know" value="expert" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "expert" ? 'checked' : ''}}@endif>Expert
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="mysql_technologies_you_know" value="mysql" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "mysql" ? 'checked' : ''}}@endif>MySQL
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="mysql_technologies_you_know" value="beginer" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "beginer" ? 'checked' : ''}}@endif>Beginer
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="mysql_technologies_you_know" value="mideator" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "mideator" ? 'checked' : ''}}@endif>Mideator
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="mysql_technologies_you_know" value="expert" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "expert" ? 'checked' : ''}}@endif>Expert
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="laravel_technologies_you_know" value="laravel" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "laravel" ? 'checked' : ''}}@endif>Laravel
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="laravel_technologies_you_know" value="beginer" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "beginer" ? 'checked' : ''}}@endif>Beginer
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="laravel_technologies_you_know" value="mideator" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "mideator" ? 'checked' : ''}}@endif>Mideator
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="laravel_technologies_you_know" value="expert" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "expert" ? 'checked' : ''}}@endif>Expert
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="oracle_technologies_you_know" value="oracle" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "oracle" ? 'checked' : ''}}@endif>Oracle
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="oracle_technologies_you_know" value="beginer" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "beginer" ? 'checked' : ''}}@endif>Beginer
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="oracle_technologies_you_know" value="mideator" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "mideator" ? 'checked' : ''}}@endif>Mideator
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="oracle_technologies_you_know" value="expert" @if(isset($jobapp->technologies_you_know)){{$jobapp->technologies_you_know == "expert" ? 'checked' : ''}}@endif>Expert
				  </label>
				</div>
		    </div> 
		    <div class="card-footer text-right">
		    	<a href="{{route('step_four_language_known')}}" class="btn btn-danger">Previous</a>
		        <button type="submit" class="btn btn-primary">Next</button>
		    </div>
	    </form>
  	</div>
</div>
@endsection