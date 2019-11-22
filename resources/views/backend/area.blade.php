@extends('backend.master');

@section('content')
  <div class="card">
    <h2>All Areas</h2>
    <div>
      <a class="btn-success" href="{{'/create/area'}}">Create Area</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Srial</th>
          <th scope="col">Name</th>
          <th scope="col">Area-Code</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $id=1?>
        @foreach($areas as $area)
          <tr>
            <td>{{$id++}}</td>
            <td>{{$area ->name}}</td>
            <td>{{$area ->code}}</td>
            <td><a href="{{route('areaEdit',[$area->id])}}"class="btn btn-success">
              Update
            </a>
            <b>
            </b>
            <a href="{{route('areadelete',[$area->id])}}"class="btn btn-danger">
              Delete
            </a>
          </td>
          </tr>

        @endforeach
      </tbody>
    </table>
  </div>
@endsection
