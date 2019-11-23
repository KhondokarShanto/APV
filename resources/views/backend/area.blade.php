@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
  <div class="card">
    <h2>All Areas</h2>
    <div>
      <a class="btn-success" href="{{'/create/area'}}">Create Area</a>
    </div>

  </br></br>

  <table class="table table-bordered" id="datatable">
    <thead>
      <tr>
        <th scope="col">Srial</th>
        <th scope="col">Name</th>
        <th scope="col">Area-Code</th>
        <th scope="col">Discription</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <?php $id=1?>
    @foreach($areas as $area)
    <tbody>
        <tr>
          <td>{{$area->id}}</td>
          <td>{{$area->name}}</td>
          <td>{{$area->postcode}}</td>
          <td>{{$area->discription}}</td>
          <td>
            <a href="{{route('edit.area',[$area->id])}}"class="btn btn-success">
              Update
            </a>
            <b></b>
            <a href="{{route('delete.area',[$area->id])}}"class="btn btn-danger">
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
