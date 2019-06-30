@extends('layout.layout')

@section('content')

	<table class="table table-striped table-hover">
        <thead>
            <tr>
            	<th></th>
                <th>Name</th>
                <th>Email</th>
				<th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

			@if ($users)
			    @foreach ($users as $user)
                <tr>
					<td>
						<span class="custom-checkbox">
							<input type="checkbox" id="checkbox1" name="options[]" value="1">
							<label for="checkbox1"></label>
						</span>
					</td>

					    	<td>{{ $user->name }}</td>
	                        <td>{{ $user->email }}</td>
							<td>{{ $user->address }}</td>
	                        <td>{{ $user->phone }}</td>
	                        <td class="view">
	                            
	                            <a href="{{ URL::to('phonebookeditform/' . $user->id)}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

	                            <!-- <a href="{{ URL::to('phonebookedit/' . $user->id)}}" class="edit" data-toggle="modal" data-target="#editEmployeeModal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
	                             -->
	                            <a onclick="return confirm('Are you sure to Delete user?')" href="{{ URL::to('phonebookdelete/' . $user->id)}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
	                            <a href="{{ route('phonebooksingleview', $user->id) }}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="View">visibility</i></a>
	                        </td>    
                    
                </tr>
            	@endforeach
			@endif

        </tbody>
    </table>
	<div class="clearfix">
        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
        <ul class="pagination">
            <li class="page-item disabled"><a href="#">Previous</a></li>
            <li class="page-item"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item active"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
    </div>

@endsection