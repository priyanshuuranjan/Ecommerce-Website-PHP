@extends('master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Payment Page</title>

        <style>
            @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");

            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: "spartan", sans-serif;
            }

            .custom-product {
                text-align: center;
                margin-top: 60px;
            }

            h2 {
                font-size: 32px;
                color: #385d9f;
                margin-bottom: 20px;
            }

            table {
                margin: 0 auto;
                width: 80%;
                border-collapse: collapse;
            }

            table,
            th,
            td {
                border: 1px solid #ccc;
            }

            th,
            td {
                padding: 10px;
                text-align: center;
            }

            tbody tr:nth-child(odd) {
                background-color: #f2f2f2;
            }

            .form-group {
                margin: 20px 0;
                text-align: left;
            }

            textarea {
                width: 50%;
                max-width: 50%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 5px;
                resize: none;
            }

            label {
                display: block;
                font-size: 18px;
                color: #385d9f;
            }

            input[type="radio"] {
                margin: 5px;
            }

            button {
                background-color: #385d9f;
                color: white;
                padding: 10px 20px;
                font-size: 18px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            button:hover {
                background-color: #7089b2;
            }
        </style>
    </head>

    <body>
        <div class="custom-product">
            <h2>Payment Section</h2>
            <table>
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>₹ {{ $total }}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>₹ 30</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>₹ 100</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>₹ {{ $total + 100 }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="form-group" style="text-align: center;">
                        <label for="address">Enter your Details address <i
                                class="fa-solid fa-arrow-down fa-shake fa-2xl"></i></label>
                        <textarea name="address" placeholder="Enter your address"></textarea>
                    </div>

                    <div class="form-group" style="text-align: center;">
                        <label for="payment">Payment Method</label>
                        <br>
                        <input type="radio" value="online" name="payment">
                        <span>Online Payment</span>
                        <br>
                        <input type="radio" value="emi" name="payment">
                        <span>EMI Payment</span>
                        <br>
                        <input type="radio" value="cod" name="payment">
                        <span>Cash on Delivery</span>
                    </div>
                    <button type="submit">Order Now</button>
                </form>
            </div>
        </div>
    </body>

    </html>
@endsection
