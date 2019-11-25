@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')

<div class="card">
  <h2>All Distributors</h2>
</br></br>

<table class="table table-bordered" id="datatable">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
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
          <td>
            <a href="{{ route('details.user',[$distributor->id])}}"class="btn btn-success">
              Details
            </a>
            <b></b>
            <a href="{{route('delete.distributor',[$distributor->id])}}"class="btn btn-danger">
              Delete
            </a>
          </td>
        </tr>
        @endforeach
  </tbody>
</table>
</table>
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
