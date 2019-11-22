@extends('backend.master');

@section('content')
  <form id="area" action="{{ route('storeArea') }}" method="post">
    @csrf
    <div>
      <label for="name"><b>Name</b></label>
      <input type="text" name="name" placeholder="Enter Name" required>
    </div>
    <div>
      <label for="name"><b>Area Code</b></label>
      <input type="text" name="code" placeholder="Area Code" required>
    </div>
    <div>
      <a href="{{'/store/area'}}"><button type="submit" class="btn btn-primary">Create</button></a>
    </div>
  </form>
@endsection
