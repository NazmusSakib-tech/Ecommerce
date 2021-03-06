

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

                @foreach($products as $products)

                    <div class="col-md-3">
                        <div class="card">
                        <!-- <img class="card-img-top feature-img" src="{{asset('product/images/products/galaxy.png')}}" alt="Card image"> -->
                        @php $i = 1; @endphp
                        @foreach($products->images as $image)
                        
                        @if($i >0)
                        <img class="card-img-top feature-img" src="{{asset('images/products/'.$image->image)}}" alt="Card image">
                        @endif
                        
                        @php $i--; @endphp
                        @endforeach

                        <div class="card-body">
                                <h4 class="card-title">
                                    {{$products->title}}</h4>
                                <p class="card-text">
                                    Taka- {{$products->price}}</p>
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


