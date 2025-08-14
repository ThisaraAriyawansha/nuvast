<footer class="footer-section">
    <div class="container relative">

        <div class="sofa-img">
            <img src="images/sofa.png" alt="NUVAST Furniture" class="img-fluid">
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Newsletter" class="img-fluid"></span><span>Subscribe to Our Newsletter</span></h3>

                    <form action="#" class="row g-3">
                        <div class="col-auto">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="col-auto">
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">NUVAST<span>.</span></a></div>
                <p class="mb-4">NUVAST brings you premium furniture that combines style, comfort and durability. Our handcrafted pieces are designed to transform your living spaces into elegant, functional environments that reflect your unique taste.</p>

                <ul class="list-unstyled custom-social">
                    <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fa fa-brands fa-pinterest"></span></a></li>
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}">Shop</a></li>
                            <li><a href="{{ route('aboutUs') }}">About us</a></li>
                            <li><a href="{{ route('services') }}">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('blog.show') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact us</a></li>
                            <li><a href="{{ route('myAcc') }}">User Account</a></li>
                            <li><a href="{{ route('cart') }}">Cart</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}">Our Collections</a></li>
                            <li><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}">Living Room</a></li>
                            <li><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}">Bedroom</a></li>
                            <li><a href="{{ route('contact') }}">Office</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Delivery Info</a></li>
                            <li><a href="#">Returns Policy</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Care Guide</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script> NUVAST Furniture. All Rights Reserved.</p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>