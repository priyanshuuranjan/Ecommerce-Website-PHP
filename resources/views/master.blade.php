<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}

</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 160px;
    }

    img.slider-img {
        height: 400px !important
    }

    .custom-product {
        height: 600px
    }

    .slider-text {
        background-color: #35443585 !important;
        margin-left: 200px;
    }

    .trending-image {
        height: 100px;
    }

    .trening-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 30px;
    }

    .detail-img {
        height: 240px;
        margin-top: 140px;
    }

    .search-box {
        width: 500px !important
    }

    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }

    // navbar css
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap");

    .logoo {
        margin-top: 0px;
        height: 30px;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "spartan", sans-serif;
    }

    h1 {
        font-size: 45px;
        line-height: 64px;
        color: #222;
    }

    h2 {
        font-size: 40px;
        line-height: 54px;
        color: #222;
    }

    h4 {
        font-size: 20px;
        color: #222;
    }

    h6 {
        font-weight: 700;
        font-size: 12px;
    }

    p {
        font-size: 16px;
        color: #465b52;
        margin: 15px 0 20px 0;
    }

    .section-p1 {
        padding: 40px 80px;
    }

    .section-m1 {
        margin: 40px 0;
    }

    body {
        width: 100%;
    }

    /* Header start */
    #header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 80px;
        background-color: #e3e6f3;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.6);
        z-index: 999;
        position: sticky;
        top: 0;
        left: 0;
    }

    #navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* Removing the Bullets points */
    #navbar li {
        list-style: none;
        padding: 0 20px;
        /* 0 mtlb  top to bottom or 20px mtlb left to right; */
        font-weight: 600;
        color: #1a1a1a;
    }

    /* chnage kr rhe hai text size or color ko */
    #navbar li a {
        font-size: 16px;
        font-weight: 600;
        color: #1a1a1a;
    }

    #navbar li a:hover {
        color: #088178;
    }

    #mobile {
        display: none;
        align-items: center;
    }




    /* Email section css */

    #newsletter {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        align-items: center;
        background-image: url("assets/banner/b14.png");
        background-repeat: no-repeat;
        background-position: 20% 30%;
        background-color: #041e42;
    }

    #newsletter h4 {
        font: size 14px;
        font-weight: 600;
        color: #818ea0;
    }

    #newsletter p {
        font: size 14px;
        font-weight: 600;
        color: #818ea0;
    }

    #newsletter p span {
        color: #ffbd27;
    }

    #newsletter .form {
        display: flex;
        width: 40%;
    }

    #newsletter input {
        height: 3.125rem;
        padding: 0 1.25em;
        font-size: 14px;
        width: 100%;
        border-radius: 4px;
        outline: none;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    #newsletter button {
        background-color: #088178;
        color: #fff;
        white-space: nowrap;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    /* footer column work here */
    footer .col {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    footer .logo {
        margin: bottom 30px;
    }

    footer h4 {
        font-size: 14px;
        padding-bottom: 20px;
    }

    footer p {
        font-size: 13px;
        margin: 0 0 8px 0;
    }

    footer a {
        text-decoration: none;
        color: #222;
        font-size: 13px;
        margin: 10px;
    }

    footer .follow i {
        color: #465b52;
        padding-right: 4px;
        cursor: pointer;
    }

    footer .install .row img {
        border: 1px solid #088178;
        border-radius: 6px;
    }

    footer .install img {
        margin: 10px 0 15px 0;
    }

    footer .follow i:hover,
    footer a:hover {
        color: #088178;
    }

    footer .copyright {
        width: 100%;
        text-align: center;
    }

    /* Start Media Queries */

    @media (max-width: 799px) {
        .section-p1 {
            padding: 40px 40px;
        }

        #navbar {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            position: fixed;
            top: 0;
            right: -300px;
            height: 100vh;
            width: 300px;
            background-color: #e3e6f3;
            box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
            padding: 80px 0 0 10px;
            transition: 0.3s;
        }

        #navbar.active {
            right: 0px;
        }

        #navbar li {
            margin-bottom: 25px;
        }

        #mobile {
            display: flex;
            align-items: center;
        }

        #mobile i {
            color: #1a1a1a;
            font-size: 24px;
            padding-left: 20px;
        }

        #hero {
            height: 65vh;
            padding: 0 20px;
            background-position: top 30% right 23%;
        }

        #feature {
            justify-content: center;
        }

        #feature .fe-box {
            margin: 15px 15px;
        }

        #product1 .pro-container {
            justify-content: center;
        }

        #product1 .pro {
            margin: 15px;
        }

        #newsletter .form {
            width: 70%;
        }
    }

    /* for small mobile devices */

    @media (max-width: 477px) {
        .section-p1 {
            padding: 20px;
        }

        #header {
            padding: 10px 30px;
        }

        h1 {
            padding: 10px 30px;
        }

        h2 {
            font-size: 32px;
        }

        #hero {
            padding: 0 118px;
            background-position: 25%;
        }

        #feature {
            justify-content: space-between;
        }

        #feature .fe-box {
            width: 155px;
            margin: 0 0 15px 0;
        }

        #product1 .pro {
            width: 100%;
        }

        #newsletter {
            padding: 40px 20px;
        }

        #newsletter .form {
            width: 100%;
        }

        footer .copyright {
            text-align: start;
        }
    }
</style>

</html>
