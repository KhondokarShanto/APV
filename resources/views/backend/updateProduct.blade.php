@extends('backend.master');

@section('content')
<div class="card">
  <div class="card-header">
    {{_('Choose Your Product')}}
  </div>

    <form id="product" action="{{ route('productUpdate', $edit->id) }}" method="POST">
      @csrf
      @method('PATCH')
    <div>
      <label for="name"><b>Name</b></label>
      <input type="text" name="name"value="{{$edit->name}}" placeholder="Enter Name" required>
    </div>
    <div>
      <label for="email"><b>Email</b></label>
      <input type="text" name="email" value="{{$edit->email}}" placeholder="Enter Email" required>
    </div>
    <div>
      <label for="phone"><b>Phone</b></label>
      <input type="number" name="phone" value="{{$edit->phone}}" placeholder="Enter phone" required>
    </div>

    <div>
      <textarea name="product" value="{{$edit->product}}" rows="4" cols="50" placeholder="Write here your query..."></textarea>
    </div>
    <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>


  </form>
      </div>
@endsection
