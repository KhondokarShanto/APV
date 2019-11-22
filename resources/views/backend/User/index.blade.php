@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection


@section('content')
<div class="card">
  <h2>All Users</h2>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create User
  </button>

  </br></br> 

  <table class="table table-bordered" id="datatable">
  <thead>
    <tr>
      <th scope="col">Sl.</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Phone</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->user_name}}</td>
          <td>{{$user->type}}</td>
          <td>{{$user->phone_no}}</td>
          @if($user->status=='pending')
          <td>
            <button type="button" class="btn btn-warning" >
              {{$user->status}}
            </button>
          </td>
          @else
          <td>
            <button type="button" class="btn btn-success" >
              {{$user->status}}
            </button>
          </td>
          @endif
          <td>
            <a href="{{ route('details.user',[$user->id])}}"class="btn btn-success">
              Details
            </a>
            <b></b>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-id="{{!! $user->id !!}}" data-target="#exampleModal2">
              Update
            </button>
            <b>
            </b>
            <a href="{{ route('delete.user',[$user->id])}}"class="btn btn-danger">
              Delete
            </a>
          </td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"> Create New User</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
        </div>

        <div class="modal-body">
          <form action="{{ route('registration')}}" method="post" role="form" >
            @csrf 
              <div class="form-group">
                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}"  placeholder="First Name" autofocus>

                @if ($errors->has('first_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" autofocus>

                @if ($errors->has('last_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="user_name" type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{ old('user_name') }}"  placeholder="Username" autofocus>

                @if ($errors->has('user_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('user_name') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="phone_no" type="text" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" placeholder="Phone Number" autofocus>

                @if ($errors->has('phone_no'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone_no') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email" autofocus>

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="nid" type="text" class="form-control{{ $errors->has('nid') ? ' is-invalid' : '' }}" name="nid" value="{{ old('nid') }}" placeholder="NID" autofocus>

                @if ($errors->has('nid'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nid') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="birth_date" type="text" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date') }}"  placeholder="Birth Date" autofocus>

                @if ($errors->has('birth_date'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('birth_date') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address" autofocus>

                @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="guardian_name" type="text" class="form-control{{ $errors->has('guardian_name') ? ' is-invalid' : '' }}" name="guardian_name" value="{{ old('guardian_name') }}"  placeholder="Guardian Name" autofocus>

                @if ($errors->has('guardian_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('guardian_name') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group">
                <input id="guardian_phone" type="text" class="form-control{{ $errors->has('guardian_phone') ? ' is-invalid' : '' }}" name="guardian_phone" value="{{ old('guardian_phone') }}" placeholder="Guardian Phone" autofocus>

                @if ($errors->has('guardian_phone'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('guardian_phone') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" placeholder="Password" autofocus>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>

              <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
              </div>

              <div class="form-group">
                <select class="form-control" id="type" name="type" >
                  <option value="">Select User Type</option>

                  @foreach( $roles as $role)
                  <option value="Supplier">
                    {{ $role->name}}
                  </option>
                  @endforeach

                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  Close
                </button>
                <button type="submit" class="btn btn-primary">
                  Create
                </button>
              </div>
          </form>
        </div>
     </div>
  </div>
</div>
@endsection

@section('javascripts')
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
  <script>
      $(document).ready( function () {
          $('#datatable').DataTable();
      });
  </script>
@endsection