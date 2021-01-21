@extends('welcome')
  
@section('content')
<div class="container">
  <h2>Technologies you know</h2>
  	<div class="card">
    	<form action="{{route('post_step_five_technologies_you_know')}}" method="post">
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
				    <input type="checkbox" class="form-check-input" name="technologies_you_know" value="php">PHP
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="technologies_you_know" value="beginer">Beginer
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="technologies_you_know" value="mideator">Mideator
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="technologies_you_know" value="expert">Expert
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="mysql_technologies_you_know" value="mysql">MySQL
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="mysql_technologies_you_know" value="mysql_beginer">Beginer
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="mysql_technologies_you_know" value="mysql_mideator">Mideator
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="mysql_technologies_you_know" value="mysql_expert">Expert
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="laravel_technologies_you_know" value="laravel">Laravel
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="laravel_technologies_you_know" value="laravel_beginer">Beginer
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="laravel_technologies_you_know" value="laravel_mideator">Mideator
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="laravel_technologies_you_know" value="laravel_expert">Expert
				  </label>
				</div>
				<div class="form-check">
				  <label class="form-check-label">
				    <input type="checkbox" class="form-check-input" name="oracle_technologies_you_know" value="oracle">Oracle
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="oracle_technologies_you_know" value="oracle_beginer">Beginer
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="oracle_technologies_you_know" value="oracle_mideator">Mideator
				  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <label class="form-check-label">
				    <input type="radio" class="form-check-input" name="oracle_technologies_you_know" value="oracle_expert">Expert
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