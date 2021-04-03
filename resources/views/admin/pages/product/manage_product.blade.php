@extends('admin.layout.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Manage Product
      </div>
      <div class="card-body" style="overflow-x:auto;">
        <table class="table table-hover" >
          <tr>
            <th>#</th>
            <th>Product Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
          </tr>
      @foreach($products as $product)
          <tr>
          <td>#</td>
          <td>{{$product->title}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->quantity}}</td>
          <td><a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-success">Edit</a></td>
          <td><a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-danger">Delete</a></td>
          </tr>
      @endforeach
        </table>

      </div>
    </div>
  </div>

  <!-- end Wrapper -->
</div>
<!-- main-panel ends -->
@endsection