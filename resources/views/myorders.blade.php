@extends('master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Order</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                min-height: 100vh;
                margin: 0;
                background-color: #f5f5f5;
            }

            .custom-product {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .trending-wrapper {
                text-align: center;
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                margin: 20px;
            }

            .searched-item {
                margin-bottom: 20px;
                padding: 15px;
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .trending-image {
                max-width: 100%;
                height: auto;
            }
        </style>

    </head>

    <body>
        <h2 style="text-align: center;">
            <a href="/" style="font-size: 24px; text-decoration: none; color: #7089b2;">
                <i class="fa-solid fa-arrow-left fa-bounce fa-2xl" style="color: #385d9f;"></i>
            </a>
            My orders
        </h2>
        <div class="custom-product">
            <h2>
                <a href="/" style="font-size: 24px; text-decoration: none; color: #7089b2;">
                    <i class="fa-solid fa-arrow-left fa-bounce fa-2xl" style="color: #385d9f;"></i>
                </a>
                My orders
            </h2>
            <div class="col-sm-10">
                <div class="trending-wrapper">


                    @foreach ($orders as $item)
                        <div class="row searched-item cart-list-devider">
                            <div class="col-sm-3">
                                <a href="detail/{{ $item->id }}">
                                    <img class="trending-image" src="{{ $item->gallery }}" alt="{{ $item->name }}">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <div class="">
                                    <h2>Name: {{ $item->name }}</h2>
                                    <h5>Delivery Status: {{ $item->status }}</h5>
                                    <h5>Address: {{ $item->address }}</h5>
                                    <h5>Payment Status: {{ $item->payment_status }}</h5>
                                    <h5>Payment Method: {{ $item->payment_method }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
