@extends('backend.master');

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-5">
      	<div class="col-lg-5 col-md-5">
      	</div>
      	<div class="col-lg-7 col-md-5">
	        <div class="card card-user">
	          <div class="content">
	            <div class="author" style="margin-top: 20px; margin-left:50px; text-align:center;">
	              <img class="avatar border-white" src="" alt="..."/ style="height: 200px; width: 450px;">
	            </div>
	          </div>
	        </div>
      	</div>
    </div>
    <div class="col-md-12">
        <div class="header" style="margin-left: 20px;">
          <h2 class="title">User Details</h2>
        </div>
        <div class="col-md-12">
          	<table class="table table-hover">
	            <thead>
	              <tr>
	                <th scope="col-md-4">User Name:</th>
	                <th scope="col-md-4">First Name</th>
	                <th scope="col-md-4">Last Name</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	                <td class="col-md-4">{{$user->user_name}}</td>
	                <td class="col-md-4">{{$user->first_name}}</td>
	                <td class="col-md-4">{{$user->last_name}}</td>
	              </tr>
	            </tbody>

	            <thead>
	              <tr>
	                <th scope="col-md-4">Phone Number</th>
	                <th scope="col-md-4">Email</th>
	                <th scope="col-md-4">Address</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	                <td class="col-md-4">{{$user->phone_no}}</td>
	                <td class="col-md-4">{{$user->email}}</td>
	                <td class="col-md-4">{{$user->address}}</td>
	              </tr>
	            </tbody>

	            <thead>
	              <tr>
	                <th scope="col-md-4">User Type</th>
	                <th scope="col-md-4">Date of Brth</th>
	                <th scope="col-md-4">NID</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	              	<td class="col-md-4">{{$user->type}}</td>
	              	<td class="col-md-4">{{$user->birth_date}}</td>
	                <td class="col-md-4">{{$user->nid}}</td>
	              </tr>
	            </tbody>

	            <thead>
	              <tr>
	              	<th scope="col-md-4">Status</th>
	                <th scope="col-md-4">Guardian Name</th>
	                <th scope="col-md-4">Guardian Contact</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	              	<td class="col-md-4">{{$user->status}}</td>
	              	<td class="col-md-4">{{$user->guardian_name}}</td>
	                <td class="col-md-4">{{$user->guardian_phone}}</td>
	              </tr>
	            </tbody>
          	</table>
          	<div class="text-center" style="margin-bottom: 10px; ">
          		<a href="{{ route('show.user')}}">
          			<button type="button" class="btn btn-success">
				      Back
				    </button>
          		</a>
		        @if (auth()->user()->type=='admin')
		        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			      Update User
			    </button>
		        @endif
		    </div>
      	</div>
    </div>
</div>

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
@endsection
