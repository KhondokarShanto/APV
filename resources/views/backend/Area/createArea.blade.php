@extends('backend.master');

@section('content')
  <form id="area" action="{{ route('create.area') }}" method="post">
    @csrf
    <div>
      <label for="name"><b>Name</b></label>
      <input type="text" name="name" placeholder="Enter Name" required>
    </div>
    <div>
      <label for="postcode"><b>Area Code</b></label>
      <input type="text" name="postcode" placeholder="Area Code" required>
    </div>
    <div>
      <label for="discription"><b>Area description</b></label>
      <input type="text" name="discription" placeholder="Area discription" required>
    </div>
    <div>
      <a href="{{'/store/area'}}"><button type="submit" class="btn btn-primary">Create</button></a>
    </div>
  </form>
@endsection
