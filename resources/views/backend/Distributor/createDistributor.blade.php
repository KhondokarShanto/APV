@extends('backend.master');

@section('content')
<form id="distributor" action="{{ route('create.distributor') }}" method="post">
  @csrf
  <div>
    <label for="name"><b>Name</b></label>
    <input type="text" name="name" placeholder="Enter Name" required>
  </div>
  <div>
    <label for="email"><b>E-mail</b></label>
    <input type="text" name="email" placeholder="email" required>
  </div>
  <div>
    <label for="phone"><b>Phone</b></label>
    <input type="text" name="phone" placeholder="phone" required>
  </div>
  <div>
    <label for="details"><b>Details</b></label>
    <input type="text" name="details" placeholder="details" required>
  </div>
  <div>
    <a href="{{'/store/distributor'}}"><button type="submit" class="btn btn-primary">Create</button></a>
  </div>
</form>
@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
     	<div class="modal-content">
	        <div class="modal-header">
	           <h5 class="modal-title" id="exampleModalLabel"> Update User Details</h5>
	           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	           <span aria-hidden="true">&times;</span>
	           </button>
	        </div>

        	<div class="modal-body">
          		<form action="{{ route('update.user',[$user->id])}}" method="post" role="form" >
            	@csrf
		            <div class="form-group">
		            	<label for="name">First Name:</label>
		                <input class="form-control" id="first_name" type="text" name="first_name" placeholder="First Name" value="{{$user->first_name}}"/>
		            </div>

		            <div class="form-group">
		                <label for="name">Last Name:</label>
		                <input class="form-control" id="last_name" type="text" name="last_name" placeholder="Last Name" value="{{$user->last_name}}" />
		            </div>

		            <div class="form-group">
		                <label for="name">User Name:</label>
		                <input class="form-control" id="user_name" type="text" name="user_name" placeholder="User Name" value="{{$user->user_name}}" />
		            </div>

		            <div class="form-group">
		                <label for="name">Phone Number:</label>
		                <input class="form-control" id="phone_no" type="text" name="phone_no" placeholder="Phone Number" value="{{$user->phone_no}}" />
		            </div>

		            <div class="form-group">
		                <label for="name">Email:</label>
		                <input class="form-control" id="email" type="text" name="email" placeholder="Email" value="{{$user->email}}" />
		            </div>

		            <div class="form-group">
		            	<label for="name">User Type:</label>
		                <select class="form-control" id="type" name="type" >
	                      <option value="{{$user->type}}">{{$user->type}}</option>
	                      @foreach( $roles as $role)
	                      <option value="{{ $role->name}}">{{ $role->name}}</option>
	                      @endforeach
	                    </select>
		            </div>

		            <div class="form-group">
		                <label for="name">NID:</label>
		                <input class="form-control" id="nid" type="text" name="nid" placeholder="NID" value="{{$user->nid}}" />
		            </div>

		            <div class="form-group">
		                <label for="name">Date of Birth:</label>
		                <input class="form-control" id="birth_date" type="text" name="birth_date" placeholder="Date of Birth" value="{{$user->birth_date}}" />
		            </div>

		            <div class="form-group">
		                <label for="name">Address:</label>
		                <input class="form-control" id="address" type="text" name="address" placeholder="Address" value="{{$user->address}}" />
		            </div>

		            <div class="form-group">
		                <label for="name">Guardian Name:</label>
		                <input class="form-control" id="guardian_name" type="text" name="guardian_name" placeholder="Guardian Name" value="{{$user->guardian_name}}" />
		            </div>

		            <div class="form-group">
		                <label for="name">Guardian Phone:</label>
		                <input class="form-control" id="guardian_phone" type="text" name="guardian_phone" placeholder="Guardian Phone" value="{{$user->guardian_phone}}" />
		            </div>

		            <div class="form-group">
		                <label for="name">Status:</label>
		                <select class="form-control" id="status" name="status" >
	                    	<option value="{{$user->status}}">
	                      		{{$user->status}}
	                      	</option>
	                      	@if($user->status=='pending')
	                      	<option value="active">
	                      		Active
	                      	</option>
	                      	@else
	                      	<option value="pending">
	                      		Pending
	                      	</option>
	                      	@endif
	                    </select>
		            </div>

		            <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-primary">Update</button>
		            </div>
           		</form>
        	</div>
     	</div>
  	</div>
</div>
