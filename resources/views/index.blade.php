@extends('welcome')
  
@section('content')
<div class="container">
	  <h2>List</h2>
	  <div class="text-right">
	  	<a href="{{route('step_one_create_basic_detail')}}" class="btn btn-primary">Add Job Application</a>
	  </div>
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Firstname</th>
	        <th>Lastname</th>
	        <th>Email</th>
	        <th>View</th>
	        <th>Update</th>
	        <th>Delete</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@foreach($jobapp as $jdata)
	      <tr>
	        <td>{{$jdata->first_name}}</td>
	        <td>{{$jdata->last_name}}</td>
	        <td>{{$jdata->email}}</td>
	        <td><a href="{{route('view',$jdata->id)}}">View</a></td>
	        <td><a href="{{route('edit',$jdata->id)}}">Update</a></td>
	        <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('delete',$jdata->id)}}">Delete</a></td>
	      </tr>
	      @endforeach
	    </tbody>
	  </table>
</div>
@endsection