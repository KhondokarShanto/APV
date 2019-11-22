@extends('backend.master');

@section('content')
<form id="requisition" action="{{ route('storeRequisition') }}" method="post">
  @csrf
  <div>
    <label for="name"><b>Name</b></label>
    <input type="text" name="name" placeholder="Enter Name" required>
  </div>
  <div>
    <label for="email"><b>E-mail</b></label>
    <input type="text" name="email" placeholder="email" required>
  </div>
  <div>
    <label for="phone"><b>Phone</b></label>
    <input type="text" name="phone" placeholder="phone" required>
  </div>
  <div>
    <label for="details"><b>Details</b></label>
    <input type="text" name="details" placeholder="details" required>
  </div>
  <div>
    <a href="{{'/store/requisition'}}"><button type="submit" class="btn btn-primary">Create</button></a>
  </div>
</form>
@endsection
