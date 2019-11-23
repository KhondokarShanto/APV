@extends('backend.master');

@section('content')
<form id="order" action="{{ route('storeOrder') }}" method="post">
  @csrf

  <div>
    <label for="name"><b>Name</b></label>
    <input type="text" name="name" placeholder="Enter Name" required>
  </div>
  <div>
    <label for="email"><b>Email</b></label>
    <input type="text" name="email" placeholder="Enter Email" required>
  </div>
  <div>
    <label for="phone"><b>Phone</b></label>
    <input type="number" name="phone" required>
  </div>

  <div>
    <textarea name="order" rows="4" cols="50" placeholder="Write here your query..."></textarea>
  </div>
  <div>
    <div>
      <a href="{{'/store/order'}}"><button type="submit" class="btn btn-primary">Create</button></a>
    </div>
  </form>
@endsection
