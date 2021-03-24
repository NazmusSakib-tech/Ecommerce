

            @extends('layouts.master')

@section('content')

 <!-- Start Sidebar + Content -->

 <div class="container margin-top-20">
    <div class="row">
        <div class="col-md-4">
            
            @include('partials.product-sidebar')
        </div>

        <div class="col-md-8">
            <div class="widget">
                <h3>All Product</h3>
                <div class="row">

                @foreach($products as $product)

                    <div class="col-md-3">
                        <div class="card">
                        <!-- <img class="card-img-top feature-img" src="{{asset('product/images/products/galaxy.png')}}" alt="Card image"> -->
                        @foreach($product->images as $image)

                        <img class="card-img-top feature-img" src="{{asset('images/products/'.$image->image)}}" alt="Card image">
                         @endforeach

                        <div class="card-body">
                                <h4 class="card-title">
                                    {{$product->title}}</h4>
                                <p class="card-text">
                                    Taka- {{$product->price}}</p>
                                <a href="#" class="btn btn-primary btn-outline-warning">See Profile</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- End Sidebar + Content -->

@endsection


