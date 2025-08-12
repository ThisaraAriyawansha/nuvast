<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="n_logo_white.png" alt="Nuvast Furniture Logo" style="height: 80px; width: auto;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ request()->routeIs('product.category') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}">Shop</a>
                </li>
                <li class="nav-item {{ request()->routeIs('aboutUs') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('aboutUs') }}">About us</a>
                </li>
                <li class="nav-item {{ request()->is('services') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item {{ request()->routeIs('blog.show') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('blog.show')}}">Blog</a>
                </li>
                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li><a class="nav-link" href="{{ route('myAcc') }}"><img src="images/user.svg" alt="User"></a></li>
                <li><a class="nav-link" href="{{ route('cart') }}"><img src="images/cart.svg" alt="Cart"></a></li>
            </ul>
        </div>
    </div>
</nav>