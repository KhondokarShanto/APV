@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
<div class="card">
  <h2>All Products</h2>

  @if(auth()->user()->type=='admin')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
      Create Products
    </button>
  @endif
  
  </br></br> 

  <table class="table table-bordered" id="datatable">
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->brand}}</td>
          <td>{{$product->status}}</td>
          <td>
            <a href="{{ route('details.product',[$product->id])}}"class="btn btn-success">
              Details
            </a>
            <b></b>
            <a href="{{ route('delete.product',[$product->id])}}"class="btn btn-danger">
              Delete
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>


<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel"> Create New Product</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
        </div>

        <div class="modal-body">
          <form action="{{ route('store.product')}}" method="post" role="form" >
            @csrf 
              <div class="form-group">    
                <label for="name">Name:</label>
                <input class="form-control" id="name" type="text" name="name" placeholder=" Name" />
              </div>

              <div class="form-group">    
                <label for="name">Price:</label>
                <input class="form-control" id="price" type="text" name="price" placeholder="Price" />
              </div>

              <div class="form-group">    
                <label for="name">Description:</label>
                <input class="form-control" id="description" type="text" name="description" placeholder="Description" />
              </div>

              <div class="form-group">    
                <label for="name">Quantity:</label>
                <input class="form-control" id="quantity" type="text" name="quantity" placeholder="Quantity" />
              </div>

              <div class="form-group">    
                <label for="name">Brand:</label>
                <input class="form-control" id="brand" type="text" name="brand" placeholder="Brand" />
              </div>

              <div class="form-group">
                <label for="name">Supplier: Select Supplier Name</label>
                <select class="form-control" id="supplier" name="supplier" >
                  <option value="outCollection">Out Collection</option>
                  @foreach( $suppliers as $supplier)
                  <option value="{{ $supplier->user_name}}">
                    {{ $supplier->user_name}}</option>
                  @endforeach
                </select>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
          </form>
        </div>
     </div>
  </div>
</div>
@endsection


@section('javascripts')
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
  <script>
      $(document).ready( function () {
          $('#datatable').DataTable();
      });
  </script>
@endsection
