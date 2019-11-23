@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection


@section('content')
<div class="card">
  <h2>All Suppliers</h2>

  </br></br> 

  <table class="table table-bordered" id="datatable">
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($suppliers as $supplier)
      <tr>
        <td>{{$supplier->id}}</td>
        <td>{{$supplier->user_name}}</td>
        <td>{{$supplier->email}}</td>
        <td>{{$supplier->phone_no}}</td>
        <td>
          <a href="{{ route('details.user',[$supplier->id])}}"class="btn btn-success">
            Details
          </a>
          <b>
          </b>
          <a href="{{ route('delete.supplier',[$supplier->id])}}"class="btn btn-danger">
            Delete
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
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