@extends('layout.layout')

@section('content')

	<!-- Edit Modal HTML -->
	<form method="post" action="{{ route('phonebookupdate.PhoneBookUpdate', $user->id ) }}">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleFormControlInput1">Name</label>
	    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name" value="{{ $user->name }}">
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Email</label>
	    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email" value="{{ $user->email }}">
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Address</label>
	    <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="Address" value="{{ $user->address }}">
	  </div>

	  <div class="form-group">
	    <label for="exampleFormControlInput1">Phone</label>
	    <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Phone" value="{{ $user->phone }}">
	  </div>

	  <div class="form-group">
	    <button type="submit" class="btn btn-primary mb-2">Update</button>
	  </div>
	</form>
	
@endsection