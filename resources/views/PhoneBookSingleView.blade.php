@extends('layout.layout')

@section('content')

	<!-- Edit Modal HTML -->
	<form method="post" action="">
	  <div class="form-group">
	    <label for="exampleFormControlInput1">Name</label>
	    <input type="text" class="form-control" readonly  name="name" id="exampleFormControlInput1" placeholder="Name" value="{{ $user->name }}">
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Email</label>
	    <input type="email" class="form-control" readonly name="email" id="exampleFormControlInput1" placeholder="Email" value="{{ $user->email }}">
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Address</label>
	    <input type="text" class="form-control" readonly name="address" id="exampleFormControlInput1" placeholder="Address" value="{{ $user->address }}">
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Phone</label>
	    <input type="text" class="form-control" readonly name="phone" id="exampleFormControlInput1" placeholder="Phone" value="{{ $user->phone }}">
	  </div>

	  <div class="form-group">
	    <a href="{{ URL::to('/')}}" class="btn btn-primary mb-2">Home</a>
	  </div>
	</form>

@endsection