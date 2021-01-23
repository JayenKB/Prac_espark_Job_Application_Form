@extends('welcome')
  
@section('content')
<div class="container">
	@if ($message = Session::get('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	@endif
	  <h2>List</h2>
	  <div class="text-right">
	  	<a href="{{route('step_one_create_basic_detail')}}" class="btn btn-primary">Add Job Application</a>
	  </div>
	  <table class="table table-striped">
	    <thead>
	      <tr>
	      	<th>Sr No.</th>
	        <th>Firstname</th>
	        <th>Lastname</th>
	        <th>Email</th>
	        <th>View</th>
	        <th>Update</th>
	        <th>Delete</th>
	      </tr>
	    </thead>
	    <tbody>
	    	@php $i=1; @endphp
	    	@foreach($jobapp as $jdata)
	      <tr>
	      	<td>{{$i++}}</td>
	        <td>{{$jdata->first_name}}</td>
	        <td>{{$jdata->last_name}}</td>
	        <td>{{$jdata->email}}</td>
	        <td><a href="{{route('view',Crypt::encrypt($jdata->id))}}" class="btn btn-info">View</a></td>
	        <td><a href="{{route('edit',$jdata->id)}}" class="btn btn-secondary">Update</a></td>
	        <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('delete',Crypt::encrypt($jdata->id))}}">Delete</a></td>
	      </tr>
	      @endforeach
	    </tbody>
	  </table>
</div>
@endsection