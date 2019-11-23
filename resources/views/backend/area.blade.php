@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
  <div class="container bg-dark">
    <h2>Area</h2>
    <p>
      <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Add New Area
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="container bg-dark">
          <form class="form-inline" method="POST" action="{{ route('store.area') }}">
              @csrf
          <div class="form-group mx-sm-3 mb-2">
            <label for="name" class="sr-only">Area Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Area Name">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="postcode" class="sr-only">postcode</label>
            <input type="text" name="postcode" class="form-control" id="postcode" placeholder="postcode">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="discription" class="sr-only">discription</label>
            <input type="text" name="discription" class="form-control" id="discription" placeholder="discription">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
    </div>
  <!-- //...................................................................................................................... -->
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
          <td>{{$id++}}</td>
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
