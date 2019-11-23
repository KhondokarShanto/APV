@extends('backend.master');

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-5">
      	<div class="col-lg-5 col-md-5">
      	</div>
      	<div class="col-lg-7 col-md-5">
	        <div class="card card-user">
	          <div class="content">
	            <div class="author" style="margin-top: 20px; margin-left:50px; text-align:center;">
	              <img class="avatar border-white" src="" alt="..."/ style="height: 200px; width: 450px;">
	            </div>
	          </div>
	        </div>
      	</div>
    </div>
    <div class="col-md-12">
        <div class="header" style="margin-left: 20px;">
          <h2 class="title">Product Details</h2>
        </div>
        <div class="col-md-12">
          	<table class="table table-hover">
          		<thead>
	              <tr>
	                <th scope="col-md-6">Product Status:</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	                <td class="col-md-6">
	                  {{$product->status}}
	                </td>
	              </tr>
	            </tbody>

	            <thead>
	              <tr>
	                <th scope="col-md-6">Name:</th>
	                <th scope="col-md-6">Price</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	                <td class="col-md-6">
	                  {{$product->name}}
	                </td>
	                <td class="col-md-6">
	                  {{$product->price}}
	                </td>
	              </tr>
	            </tbody>

	            <thead>
	              <tr>
	                <th scope="col-md-6">Quantity</th>
	                <th scope="col-md-6">Band</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	                <td class="col-md-6">{{$product->quantity}}</td>
	                <td class="col-md-6">{{$product->brand}}</td>
	              </tr>
	            </tbody>

	            <thead>
	              <tr>
	                <th scope="col-md-6">Supplier</th>
	                <th scope="col-md-6">Description</th>
	              </tr>
	            </thead>
	            <tbody style="color: #3390ff; text-decoration: bold;">
	              <tr>
	              	<td class="col-md-6">{{$product->name}}</td>
	                <td class="col-md-6">{{$product->description}}</td>
	              </tr>
	            </tbody>
          	</table>
          	<div class="text-center" style="margin-bottom: 10px; ">
          		<a href="{{ route('show.product')}}">
          			<button type="button" class="btn btn-success">
				      Back
				    </button>
          		</a>
          		<b></b>
		        @if (auth()->user()->type=='admin')
		        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			      Update Products
			    </button>
		        @endif
		    </div>
      	</div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
     	<div class="modal-content">
	        <div class="modal-header">
	           <h5 class="modal-title" id="exampleModalLabel"> Update Product Details</h5>
	           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	           <span aria-hidden="true">&times;</span>
	           </button>
	        </div>

        	<div class="modal-body">
          		<form action="{{ route('update.product',[$product->id])}}" method="post" role="form" >
            	@csrf 
		            <div class="form-group">    
		            	<label for="name">Name:</label>
		                <input class="form-control" id="name" type="text" name="name" placeholder=" Name" value="{{$product->name}}"/>
		            </div>

		            <div class="form-group">    
		                <label for="name">Price:</label>
		                <input class="form-control" id="price" type="text" name="price" placeholder="Price" value="{{$product->price}}" />
		            </div>

		            <div class="form-group">    
		                <label for="name">Description:</label>
		                <input class="form-control" id="description" type="text" name="description" placeholder="Description" value="{{$product->description}}" />
		            </div>

		            <div class="form-group">    
		                <label for="name">Quantity:</label>
		                <input class="form-control" id="quantity" type="text" name="quantity" placeholder="Quantity" value="{{$product->quantity}}" />
		            </div>

		            <div class="form-group">    
		                <label for="name">Brand:</label>
		                <input class="form-control" id="brand" type="text" name="brand" placeholder="Brand" value="{{$product->brand}}" />
		            </div>

		            <div class="form-group">    
		                <label for="name">Status:</label>
		                <select class="form-control" id="status" name="status" >
	                    	<option value="{{$product->status}}">
	                      		{{$product->status}}
	                      	</option>
	                      	<option value="active">
	                      		Active
	                      	</option>
	                    </select>
		            </div>

		            <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                <button type="submit" class="btn btn-primary">Update</button>
		            </div>
           		</form>
        	</div>
     	</div>
  	</div>
</div>
@endsection