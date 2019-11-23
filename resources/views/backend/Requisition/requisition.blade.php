@extends('backend.master');

@section('content')
<div class="card">
  <h2>All Requisitions</h2>
  <div>
    <a class="btn-success" href="{{'/create/requisition'}}">Create Requisitions</a>
  </div>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Details</th>
      <th scope="col">Actionss</th>
    </tr>
  </thead>
  <tbody>
    @foreach($requisitions as $requisition)
        <tr>
          <td>{{$requisition ->id}}</td>
          <td>{{$requisition ->name}}</td>
          <td>{{$requisition ->email}}</td>
          <td>{{$requisition ->phone}}</td>
          <td>{{$requisition ->details}}</td>
          <td><a class="btn btn-success" href="">Update</a> <b></b><a class="btn btn-danger" href="">Delete</a></td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
@endsection
