@extends('backend.master');

@section('content')
<div class="card">
  <div class="card-header">
    {{_('Confirm Your Order')}}
  </div>
    <form id="order" action="{{ route('orderUpdate', $edit->id) }}" method="POST">
      @csrf
      @method('PATCH')
    <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
      <div class="col-md-6">
      <input type="text" name="name" value="{{$edit->name}}"placeholder="Enter Name" required="required" autofocus="autofocus" class="form-control ">
    </div>
    </div>
    <div class="form-group row">
       <label for="email"class="col-md-4 col-form-label text-md-right">Email</label>
        <div class="col-md-6">
      <input type="text" name="email" value="{{$edit->email}}" placeholder="Enter Email" required="required" autofocus="autofocus" class="form-control">
    </div>
    </div>
    <div class="form-group row">
      <label for="phone"class="col-md-4 col-form-label text-md-right">Phone</label>
      <div class="col-md-6">
      <input type="number" name="phone" value="{{$edit->phone}}" placeholder="Enter phone" required="required" autofocus="autofocus" class="form-control">
    </div>
    </div>
    <div class="col-md-6">
      <textarea name="order"value="{{$edit->order}}" rows="4" cols="50" placeholder="Write here your order..."></textarea>
    </div>
    <div class="form-group row">
    <div class="col-md-6">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
  </form>
</div>
@endsection
