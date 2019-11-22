@extends('backend.master');

@section('content')
<div class="card">
  <h2>All Distributors</h2>
  <div>
    <a class="btn-success" href="{{'/create/distributor'}}">Add New Distributors</a>
  </div>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Details</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($distributors as $distributor)
        <tr>
          <td>{{$distributor ->id}}</td>
          <td>{{$distributor ->name}}</td>
          <td>{{$distributor ->email}}</td>
          <td>{{$distributor ->phone}}</td>
          <td>{{$distributor ->details}}</td>
          <td><a class="btn btn-success" href="">Update</a> <b></b><a class="btn btn-danger" href="">Delete</a></td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
@endsection
