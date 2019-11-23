@extends('backend.master');

@section('content')
<div class="card">
  <form id="area" action="{{route('update.area',[$edit->id])}}" method="POST">
    @csrf
    @method('PATCH')
    <div>
      <label for="name"><b>Name</b></label>
      <input type="text" name="name" value="{{$edit->name}}" placeholder="Enter Name" required>
    </div>
    <div>
      <label for="postcode"><b>Area Code</b></label>
      <input type="text" name="postcode" value="{{$edit->postcode}}" placeholder="Area Code" required>
    </div>
    <div>
      <label for="discription"><b>Area discription</b></label>
      <input type="text" name="discription" value="{{$edit->discription}}" placeholder="Area discription" required>
    </div>
    <div>
      <a><button type="submit" class="btn btn-primary">Submit</button></a>
        Update
      </a>
    </div>
  </form>
</div>

@endsection
