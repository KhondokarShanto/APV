@extends('backend.master');

@section('content')
<div class="container bg-dark">
  <h2>Role</h2>
  <div>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
      Add New Role
    </a>
    <b></b>
  </div>
  
  <div class="collapse" id="collapseExample">
    <div class="container bg-dark">
      <form class="form-inline" method="POST" action="{{ route('role_create') }}">
      @csrf
        <div class="form-group mx-sm-3 mb-2">
          <label for="name" class="sr-only">Role Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Role Name">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Create</button>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="card">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
          @foreach($roles as $role)
            <tr>
              <td>{{$role ->id}}</td>
              <td>{{$role ->name}}</td>
              <td>
                <a class="btn btn-success" href="{{ route('role_update_page', $role->id)}}">Update</a>
                <b></b>
                <a class="btn btn-danger" href="{{ route('role_delete', $role->id)}}">Delete</a> 
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
