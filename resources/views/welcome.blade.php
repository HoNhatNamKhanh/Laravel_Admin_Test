@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5 justify-content-center">
            @foreach($products as $product)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{$product->slide_url}}" alt="Product image" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder text-danger ">{{$product->title}}</h5>
                                <!-- Product price-->
                                ${{$product->price}}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection
