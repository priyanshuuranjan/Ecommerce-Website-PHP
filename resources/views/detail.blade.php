@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
            </div>
            <div class="col-sm-6" style="margin-top:60px;">
                <a href="/" style="font-size: 24px;">
                    <i class="fa-solid fa-arrow-left fa-bounce fa-2xl" style="color: #7089b2;"></i>Go Back
                </a>

                <h2>{{ $product['name'] }}</h2>
                <h3>Price : {{ $product['price'] }}</h3>
                <h4>Details: {{ $product['description'] }}</h4>
                <h4>category: {{ $product['category'] }}</h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{ $product['id'] }}>
                    <button class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat fa-2xl"></i>Add to
                        Cart</button>
                </form>
                <br><br>

            </div>
        </div>
    </div>
@endsection
