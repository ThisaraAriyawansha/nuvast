<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

    <script src="assets/js/tailwind-cdn.js"></script>


		<!-- Bootstrap CSS -->
		<link href="publicsite/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="publicsite/css/tiny-slider.css" rel="stylesheet">
		<link href="publicsite/css/style.css" rel="stylesheet">
		<title>NUVAST Furnitures</title>
		<link rel="shortcut icon" href="green_n.png">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        

	</head>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        
            /* Hero section animations */


            .intro-excerpt {
                opacity: 0;
                transform: translateY(50px);
                animation: fadeInUp 1s ease-out forwards;
                animation-delay: 0.2s;
            }

            .hero-img-wrap img {
                opacity: 0;
                transform: translateX(50px);
                animation: slideInRight 1s ease-out forwards;
                animation-delay: 0.5s;
            }

            /* Keyframes for animations */
            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(50px);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes slideInRight {
                0% {
                    opacity: 0;
                    transform: translateX(50px);
                }
                100% {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            /* Button hover animations */
            .btn-secondary, .btn-white-outline {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .btn-secondary:hover, .btn-white-outline:hover {
                transform: translateY(-3px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

        </style>

	<body>

		<!-- Start Header/Navigation -->
        @include('layouts.nav-2')

		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
            <div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
                                <h1 style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">NUVAST</h1>
								<p class="mb-4">Discover exquisite furniture crafted for elegance and comfort. Transform your space with our timeless designs and superior quality</p>
								<p><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="btn btn-secondary me-2">Shop Now</a><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="publicsite/images/Generate a minimalis_re.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>   
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">
					<!-- Start Column 1 - Description Column -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Elegantly Crafted for Your Home</h2>
						<p class="mb-4">
							Discover our premium range of furniture designed to combine comfort, style, and durability. 
							From modern sofas to handcrafted wooden tables, every piece is made to elevate your living space.
						</p>
						<p><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="btn">Shop Now</a></p>
					</div>
					<!-- End Column 1 -->

					<!-- Start Product Columns - Dynamically Generated -->
    				@foreach($products->take(3) as $product)
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<div class="product-item w-100 d-flex flex-column" style="text-decoration: none; color: inherit;">
								<!-- Image container with fixed aspect ratio -->
								<div class="product-image-container" style="height: 200px; overflow: hidden;">
										<img src="{{ $product['image'] }}" 
											class="img-fluid product-thumbnail w-100 h-100 object-fit-cover" 
											alt="{{ $product['image'] }}">
								</div>
								
								<!-- Product info -->
								<div class="product-info p-3 flex-grow-1 d-flex flex-column" style="height: 120px;">
<a href="singleProduct?product-id={{ $product['id'] }}" style="text-decoration: none; color: inherit;">
    <h3 class="product-title mb-2" 
        style="font-size: 1rem; line-height: 1.3; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
        {{ $product['name'] }}
    </h3>
</a>

									
									<div class="mt-auto">
										@if(isset($product['ret_price']) && $product['dis_price'] < $product['ret_price'])
											<div>
												<strong class="product-price" style="font-size: 1.1rem;">Rs. {{ number_format($product['dis_price'], 2) }}</strong>
												<span class="original-price text-muted" style="font-size: 0.9rem;"><del>Rs. {{ number_format($product['ret_price'], 2) }}</del></span>
											</div>
										@else
											<strong class="product-price" style="font-size: 1.1rem;">Rs. {{ number_format($product['ret_price'], 2) }}</strong>
										@endif
									</div>
								</div>


								<!-- Add to cart button -->
								<div class="p-2 text-center" 
									style="cursor: pointer;"
									data-bs-toggle="modal" 
									data-bs-target="#exampleModal-Cart" 
									onclick="addToCart({{ $product['id'] }});">
									<span class="icon-cross">
										<img src="{{ asset('images/cross.svg') }}" class="img-fluid" alt="Add to cart" style="width: 20px;">
									</span>
								</div>
							</div>
						</div>
					@endforeach
					<!-- End Product Columns -->
				</div>
			</div>
		</div>
		<!-- End Product Section -->


	<div class="product-area py-[150px] dark-blue-bg relative" 
		style="background:url(assets/images/banner/armchair-furniture-on-spacey-living-room-23mx8kxyn2yo3a9v.jpg) no-repeat; background-position:center; background-size:cover; background-attachment: fixed; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
		
		<!-- Overlay -->
		<div class="absolute inset-0 bg-black opacity-50 z-0" style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"></div>

		<div class="container h-100 relative z-10">
			<div class="row justify-content-center align-items-center h-100">
				<div class="col-12 text-center">
					<h2 class="text-xl lg:text-4xl font-light text-white mb-2" 
						style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">
						Welcome to NUVAST Furnitures
					</h2>
					<p class="text-white text-sm" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">
						Stylish and premium furniture crafted to transform your home into a perfect space of comfort and elegance
					</p>
				</div>
			</div>
		</div>
	</div>



		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose NUVAST Furnitures</h2>
						<p>We craft furniture that blends style, comfort, and durability. Each piece is designed to enhance your home and provide lasting quality.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div >
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Premium Materials</h3>
									<p>We use high-quality wood, fabrics, and finishes to ensure every product is durable and stylish.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div >
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Modern Designs</h3>
									<p>Our furniture features contemporary designs that fit seamlessly into any home décor.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div >
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Expert Craftsmanship</h3>
									<p>Our skilled craftsmen ensure each piece is built with precision and care.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div >
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy Returns</h3>
									<p>We offer hassle-free returns and exchanges to ensure your complete satisfaction.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5 mt-4">
						<div class="img-wrap">
							<img src="images/photo-1586023492125-27b2c045efd7.jpeg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/il_fullxfull.5397612567_l2z7.jpg" alt="Living Room Setup"></div>
							<div class="grid grid-2"><img src="images/61VCdngg8JL._AC_UF894,1000_QL80_.jpg" alt="Bedroom Setup"></div>
							<div class="grid grid-3"><img src="images/sofa-9181557_1280.jpg" alt="Dining Room Setup"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">We Help You Create Stylish Interiors</h2>
						<p>
							At NUVAST Furnitures, we provide carefully crafted furniture pieces that transform any space into a stylish, comfortable, and functional environment. Whether it’s your living room, bedroom, or dining area, our products enhance every corner of your home.
						</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Premium quality wood and fabrics for lasting durability</li>
							<li>Modern and elegant designs that suit every style</li>
							<li>Customizable furniture to fit your unique space</li>
							<li>Expert guidance to create cohesive interior setups</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">

    				@foreach($products->take(6) as $product)
						<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
							<div class="product-item-sm d-flex">
								<div class="thumbnail">
									<img src="{{ $product['image'] }}" alt="Image" class="img-fluid">
								</div>
								<div class="pt-3">
									<h3>{{ $product['name'] }}</h3>
									<p> {{ $product['desc'] }}</p>
									<p><a href="/singleProduct?product-id={{ $product['id'] }}">Read More</a></p>
								</div>
							</div>
						</div>
				@endforeach
				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		@include('categorysection')
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<button 
							style="background: none; border: none; color: black; font-weight: 500; cursor: pointer;"
							onclick="window.location.href='{{ route('blog.show') }}'">
							View All Posts
						</button>
					</div>

				</div>

				<div class="row">
					@foreach ($blogs as $blog)
					<div class="col-12 col-sm-6 col-md-4 mb-4">
						<div class="post-entry h-100 d-flex flex-column">
							<a href="{{ route('blog.show')}}" class="post-thumbnail">
								<!-- Fixed aspect ratio image container -->
								<div class="image-container" style="height: 300px; overflow: hidden;">
									<img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" 
										class="img-fluid w-100 h-100 object-fit-cover">
								</div>
							</a>
							<div class="post-content-entry flex-grow-1 p-3 d-flex flex-column">
								<h3 class="mb-2" style="font-size: 1.1rem;">
									<a href="{{ route('blog.show')}}">{{ $blog['title'] }}</a>
								</h3>
								<div class="meta mb-2">
									<span class="text-muted" style="font-size: 0.8rem;">
										by <a href="{{ route('blog.show')}}">Admin</a> on <a href="#">{{ $blog['date'] }}</a>
									</span>
								</div>
								<div class="mt-auto">
									<a href="{{ route('blog.show')}}" class="read-more">Read More</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach

					@if($blogs->isEmpty())
					<div class="col-12 text-center py-12">
						<p class="text-black">No articles available at this time.</p>
					</div>
					@endif
				</div>
			</div>
		</div>
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		 @include('layouts.modals')

         @include('layouts.footer2')

		
		<!-- End Footer Section -->	


		<script src="publicsite/js/bootstrap.bundle.min.js"></script>
		<script src="publicsite/js/tiny-slider.js"></script>
		<script src="publicsite/js/custom.js"></script>
	</body>

</html>
