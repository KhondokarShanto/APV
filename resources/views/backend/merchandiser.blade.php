@extends('backend.master');

@section('content')
<div class="card">
  <h2>All Merchandisers</h2>
  <div>
    <a class="btn-success" href="{{'/create/merchandiser'}}">Add New Merchandiser</a>
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
    @foreach($merchandisers as $merchandiser)
        <tr>
          <td>{{$merchandiser ->id}}</td>
          <td>{{$merchandiser ->name}}</td>
          <td>{{$merchandiser ->email}}</td>
          <td>{{$merchandiser ->phone}}</td>
          <td>{{$merchandiser ->details}}</td>
          <td><a class="btn btn-success" href="">Update</a> <b></b><a class="btn btn-danger" href="">Delete</a></td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>
@endsection
