@extends('backend.master');

@section('content')
<div class="card">
  <div class="card-header">
    {{_('Recomend the areas we can cover')}}
  </div>
  <form id="area" action="{{ route('areaUpdate', $edit->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div>
      <label for="name"><b>Name</b></label>
      <input type="text" name="name" value="{{$edit->name}}" placeholder="Enter Name" required>
    </div>
    <div>
      <label for="name"><b>Area Code</b></label>
      <input type="text" name="code" value="{{$edit->code}}" placeholder="Area Code" required>
    </div>
    <div>
      <a><button type="submit" class="btn btn-primary">Submit</button></a>
    </div>
  </form>
</div>

@endsection
