@extends('backend.master');

@section('content')
    <div class="card">
      <h2>All Orders</h2>
      <div>
        <a class="btn-success" href="{{'/create/order'}}">Create Order</a>
      <div class="card">

      <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Order</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $id=1?>
        @foreach($orders as $order)
            <tr>
              <td>{{$order ->id}}</td>
              <td>{{$order ->name}}</td>
              <td>{{$order ->email}}</td>
              <td>{{$order ->phone}}</td>
              <td>{{$order ->order}}</td>
              <td>
                <a href="{{route('orderEdit',[$order->id])}}"class="btn btn-success">
                Update
              </a>
              <b>
              </b>
              <a href="{{route('orderdelete',[$order->id])}}"class="btn btn-danger">
                Delete
              </a>
            </td>
            </tr>
            @endforeach
      </tbody>
    </table>
    </div>
    </div>
@endsection
