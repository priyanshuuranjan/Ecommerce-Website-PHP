<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}

?>


<section id="header">
    <a href="cart.html"><img src="assets/blogo.png" class="logoo" alt="" /></a>

    <div>
        <ul id="navbar">
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/=myorders">Orders</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="blog.html">Contact</a></li>
            <li>
                <a href="/cartlist"><i class="fa fa-duotone fa-bag-shopping">{{ $total }}</i></a>
                @if (Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </li>
        @else
            <li><a href="/login">Login</a></li>
            @endif
        </ul>
        </li>
        </ul>
    </div>
    <div id="mobile">
        <a href="/cartlist"><i class="fa fa-duotone fa-bag-shopping"></i></a>
        <li>cart({{ $total }})</li>
    </div>
</section>
