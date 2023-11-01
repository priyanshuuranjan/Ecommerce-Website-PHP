@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fertilizer Shop</title>
    <style>
        .trending-wrapper {
            text-align: center;
            margin: 20px; /* Adjust margin as needed */
            padding: 20px; /* Adjust padding as needed */
        }

        #newsletter {
            text-align: center;
        }

        #newsletter p {
            font-size: 30px;
            margin-bottom: 40px;
            margin-top: 40px;
        }

        .trending-item {
            display: inline-block;
            margin: 10px; /* Adjust margin between items as needed */
            border: 1px solid #ccc;
            padding: 10px; /* Adjust padding as needed */
            text-align: center;
        }

        .trending-image {
            max-width: 100%;
            height: auto;
        }

        h3 {
            font-size: 20px;
            margin: 10px 0; /* Adjust margin as needed */
        }
    </style>

</head>
<body>

        <div class="custom-product">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach ($products as $item)
                        <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">
                            <a href="detail/{{ $item['id'] }}">
                                <img class="slider-img" src="{{ $item['gallery'] }}">
                                <div class="carousel-caption slider-text">
                                    <h3>{{ $item['name'] }}</h3>
                                    <p>{{ $item['description'] }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="trending-wrapper">
                <section id="newsletter" class="section-p1 section-m1" style="clear: both">
                    <div style="text-align: center; margin-left: 60em;">
                        <p style="font-size: 30px; margin-bottom:40px; margin-top:40px;">
                            <span>Products</span><br>
                        </p>
                    </div>


                </section>
                @foreach ($products as $item)
                    <div class="trening-item">
                        <a href="detail/{{ $item['id'] }}">
                            <img class="trending-image" src="{{ $item['gallery'] }}">
                            <div class="">
                                <h3>{{ $item['name'] }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    @endsection

</body>
</html>
