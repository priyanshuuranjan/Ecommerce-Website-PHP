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
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="#product1">Features</a></li>
            <li><a href="blog">Blog</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="blog.html">Contact</a></li>
            <li>
                <a href="/cartlist"><i class="fa fa-duotone fa-bag-shopping">{{ $total }}</i></a>
            </li>
        </ul>
    </div>
    <div id="mobile">
        <a href="/cartlist"><i class="fa fa-duotone fa-bag-shopping"></i></a>
        <li>cart({{ $total }})</li>
    </div>
</section>
