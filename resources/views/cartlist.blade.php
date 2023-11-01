@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <a href="/" style="font-size: 28px;"> <i class="fa-solid fa-arrow-left fa-bounce fa-2xl" style="color: #385d9f;"></i>
                <h1 style="text-align: center; margin-top: 10px; margin-bottom: 30px; margin-left:30rem;">Result for Products
                </h1>

                @foreach ($products as $item)
                    <div class="row searched-item cart-list-devider" style="display: flex; align-items: center;margin-left:50rem;">
                        <div class="col-sm-3" style="text-align: center;">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->gallery }}">
                            </a>
                        </div>
                        <div class="col-sm-4" style="text-align: center;">
                            <div>
                                <h2>{{ $item->name }}</h2>
                                <h5>{{ $item->description }}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3" style="text-align: center;">
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="btn btn-success" href="ordernow"
                style="display: block; text-align: center; font-size: 24px; width: 150px; margin-left:100rem; margin-bottom:60px;">Order Now</a>


        </div>
    </div>
@endsection
