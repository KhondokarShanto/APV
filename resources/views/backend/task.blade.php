@extends('backend.master');

@section('content')
<div class="card">
  <h2>All Tasks</h2>
  <div>
    <a class="btn-success" href="{{'/create/task'}}">Create new task</a>
<div class="container">

  <div class="card">

  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>

    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
        <tr>
          <td>{{$task ->id}}</td>
          <td>{{$task ->name}}</td>
          <td>{{$task ->email}}</td>
          <td>{{$task ->phone}}</td>

        </tr>
        @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>
@endsection
