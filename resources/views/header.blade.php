<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Style for the navigation bar */
        .navbar {
            background-color: #889fca;
            width: 100%;
            height: 60px;
            overflow: hidden;
        }

        /* Style for the navigation links */
        .navbar a {
            display: inline-block; /* Make the links appear horizontally */
            color: white;
            text-align: center;
            padding: 22px 20px;
          font-size: 25px;
            text-decoration: none;
        }

        /* Style for the cart icon */
        .cart-icon {
            font-size: 24px;
            vertical-align: middle; /* Align the cart icon vertically in the container */
        }

        /* Style for the cart icon container (adjust as needed) */
        .cart-container {
            float: right;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <a href="#">Home</a>
            <a href="#">Order</a>
        </div>
        <div class="navbar-right">
            <div class="cart-container">
                <a href="#">
                    <span class="cart-icon">&#x1F6D2;</span> <!-- You can use any cart icon here -->
                </a>
            </div>
        </div>
    </div>
</body>
</html>
