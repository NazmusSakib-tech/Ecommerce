@extends('admin.layout.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add Product
      </div>
      <div class="card-body">
      <form action="{{route('admin.product.update', $product->id)}}" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
       @include('admin.partials.messages')
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name ="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->title}}">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" id="" cols="30" rows="10">{{$product->description}}</textarea>
            <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
          </div>

          
          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" name ="price" id="exampleInputEmail1" value="{{$product->price}}">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>

          
          <div class="form-group">
            <label for="exampleInputEmail1">Quantity</label>
            <input type="number" class="form-control" name ="quantity" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->quantity}}">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <label for="product_imagae">Image</label>
            <input type="file" class="form-control" name ="product_imagae" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->image}}">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          
          <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
      </div>
    </div>
  </div>

  <!-- end Wrapper -->
</div>
<!-- main-panel ends -->
@endsection