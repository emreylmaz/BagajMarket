@extends('layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Row -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    @foreach($products as $product)
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{asset('/uploads/products/').'/'.$product->photo}}" alt="{{$product -> name}}">
                        <div class="card-body">
                            <h4 class="card-title">{{$product -> price}}</h4>
                            <p class="card-text">{{$product-> name }}</p>
                            <a href="{{route('cart.add',$product->id)}}" class="btn btn-primary">Cart added</a>
                        </div>
                    </div>
                    @endforeach
                    <!-- Card -->
                </div>
                <!-- column -->
                <!-- column -->

                <!-- column -->
                <!-- column -->

                <!-- column -->
                <!-- column -->

                <!-- column -->
            </div>
            <!-- Row -->
        </div>
    </div>
@endsection
