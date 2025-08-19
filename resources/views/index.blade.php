<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="green_n.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

    <script src="assets/js/tailwind-cdn.js"></script>

  
		<!-- Bootstrap CSS -->
		<link href="publicsite/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="publicsite/css/tiny-slider.css" rel="stylesheet">
		<link href="publicsite/css/style.css" rel="stylesheet">
		<title>NUVAST Furnitures</title>
	</head>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        
        .stats-section {
            background: linear-gradient(135deg, #3b5d50 0%, #041e15ff 100%);
            color: white;
        }

        .stats-item {
            text-align: center;
            padding: 2rem 1rem;
        }

        .stats-number {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(171, 171, 171, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

		.testimonial-card {
			background: white;
			border-radius: 10px;
			padding: 2rem;
			box-shadow: 0 10px 30px rgba(0,0,0,0.1);
			margin: 1rem;
			display: flex;
			flex-direction: column;
			min-height: 250px; /* Ensures all cards have the same minimum height */
			justify-content: space-between; /* Distributes content evenly */
		}
		.testimonial-card p {
			flex-grow: 1; /* Allows text to take available space */
		}

        .process-step {
            text-align: center;
            padding: 2rem 1rem;
        }

        .process-icon {
            width: 80px;
            height: 80px;
            background: #3b5d50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2rem;
        }

        .newsletter-section {
            background: linear-gradient(45deg, #041e15ff 0%, #3b5d50 100%);
            color: white;
        }

        .room-showcase {
            position: relative;
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .room-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 2rem;
        }

        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: #3b5d50;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
        }



        </style>

	<body>

		<!-- Start Header/Navigation -->
        @include('layouts.nav-2')

		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
		@include('herosection')
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

		<!-- Start Room Showcase Section -->
		<div class="py-5" style="background: #f8f9fa;">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12 text-center">
						<h2 class="section-title" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Transform Your Space</h2>
						<p class="lead" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; font-size: clamp(12px, 2vw, 18px);">Explore how our furniture can completely transform different rooms in your home</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-4">
						<div class="room-showcase" style="background-image: url('assets/images/feature-image/02_1800x1800_96a41b78-937c-47b7-a237-6b5a859f79da.webp');">
							<div class="room-overlay">
								<h3 >Living Room Collection</h3>
								<p>Create a welcoming space for family and friends with our comfortable sofas and elegant coffee tables.</p>
									<a href="{{ route('product.category', ['filter' => 'SOFAS']) }}" class="btn" style="background-color: transparent; border: 2px solid #f9bf29; font-weight: 600; border-radius: 0; color: #f9bf29;">Explore</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="room-showcase" style="background-image: url('assets/images/feature-image/pastel-paradise-wallpaper.webp');">
							<div class="room-overlay">
								<h3>Bedroom Collection</h3>
								<p>Transform your bedroom into a peaceful retreat with our luxurious beds and storage solutions.</p>
									<a href="{{ route('product.category', ['filter' => 'BEDS']) }}" class="btn" style="background-color: transparent; border: 2px solid #f9bf29; font-weight: 600; border-radius: 0; color: #f9bf29;">Explore</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Room Showcase Section -->

		<!-- Start How It Works Section -->
		<div class="py-5">
		<div class="container">
			<div class="row mb-5">
			<div class="col-12 text-center">
				<h2 class="section-title" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; font-size: clamp(20px, 3vw, 28px);">
				How It Works
				</h2>
				<p class="lead" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; font-size: clamp(14px, 2vw, 18px);">
				Simple steps to get your dream furniture
				</p>
			</div>
			</div>
			<div class="row">
			<div class="col-md-3">
				<div class="process-step">
				<div class="process-icon">
					<i class="fas fa-search"></i>
				</div>
				<h4 style="font-size: clamp(16px, 2vw, 20px);">1. Browse</h4>
				<p style="font-size: clamp(12px, 1.8vw, 16px);">
					Explore our extensive collection of premium furniture pieces designed for every room.
				</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="process-step">
				<div class="process-icon">
					<i class="fas fa-heart"></i>
				</div>
				<h4 style="font-size: clamp(16px, 2vw, 20px);">2. Choose</h4>
				<p style="font-size: clamp(12px, 1.8vw, 16px);">
					Select your favorite pieces and customize them according to your space and preferences.
				</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="process-step">
				<div class="process-icon">
					<i class="fas fa-credit-card"></i>
				</div>
				<h4 style="font-size: clamp(16px, 2vw, 20px);">3. Order</h4>
				<p style="font-size: clamp(12px, 1.8vw, 16px);">
					Complete your purchase with our secure payment system and flexible financing options.
				</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="process-step">
				<div class="process-icon">
					<i class="fas fa-truck"></i>
				</div>
				<h4 style="font-size: clamp(16px, 2vw, 20px);">4. Enjoy</h4>
				<p style="font-size: clamp(12px, 1.8vw, 16px);">
					We'll deliver and set up your furniture, so you can start enjoying your new space immediately.
				</p>
				</div>
			</div>
			</div>
		</div>
		</div>

		<!-- End How It Works Section -->

		<!-- Start Parallax Banner Section -->
		<div class="product-area dark-blue-bg relative parallax-section" 
			style="background:url(assets/images/banner/688490.jpg) no-repeat center center/cover; 
					background-attachment: fixed; 
					border-bottom-left-radius: 0px; 
					border-bottom-right-radius: 0px; 
					height: 500px; /* controls total section height */
					min-height: 300px; /* prevents it from getting too small on mobile */
					display: flex; 
					align-items: center; 
					justify-content: center;">
			
			<!-- Overlay -->
			<div class="absolute inset-0 bg-black opacity-50 z-0" 
				style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"></div>

			<div class="container relative z-10 text-center">
				<h2 style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; color: white; ">
					Welcome to NUVAST Furnitures
				</h2>
				<p style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; color: white; ">
					Stylish and premium furniture crafted to transform your home into a perfect space of comfort and elegance
				</p>
				<div style="margin-top: 20px;">
					<a href="#" style="background-color: transparent; color: white; border: 2px solid #f9bf29; font-weight: 600; padding: 10px 30px; border-radius: 0; text-decoration:none;">View Collection</a>
				</div>
			</div>
		</div>
		<!-- End Parallax Banner Section -->




		
		
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
		<!-- Start Statistics Section -->
		<div class="stats-section py-5">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3">
						<div class="stats-item">
							<div class="stats-number" data-count="250">0</div>
							<div class="stats-label" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; color: white; ">Happy Customers</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="stats-item">
							<div class="stats-number" data-count="200">0</div>
							<div class="stats-label" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; color: white; ">Furniture Pieces</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="stats-item">
							<div class="stats-number" data-count="15">0</div>
							<div class="stats-label" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; color: white; ">Years Experience</div>
						</div>
					</div>
					<div class="col-6 col-md-3">
						<div class="stats-item">
							<div class="stats-number" data-count="50">0</div>
							<div class="stats-label" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; color: white; ">Cities Served</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Statistics Section -->
		<!-- Start Gallery Section -->
		<div class="py-5" style="background: #f8f9fa;">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12 text-center">
						<h2 class="section-title" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; ">Our Work Gallery</h2>
						<p class="lead" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; font-size: clamp(12px, 2vw, 18px);">See how our furniture transforms real homes</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 mb-4">
						<div class="gallery-item">
							<img src="assets/images/feature-image/Modern-living-room-with-large-sectional-and-artistic-wall-decor.webp" alt="Gallery Image" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
							<div class="gallery-overlay">
								<div class="text-white text-center">
									<h5>Modern Living Room</h5>
									<p>Complete makeover with our premium sofa collection</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-4">
						<div class="gallery-item">
							<img src="assets/images/feature-image/0503A1-19.jpg" alt="Gallery Image" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
							<div class="gallery-overlay">
								<div class="text-white text-center">
									<h5>Elegant Dining Room</h5>
									<p>Sophisticated dining set for family gatherings</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-4">
						<div class="gallery-item">
							<img src="assets/images/feature-image/cozy-bedroom-ideas-5078657-hero-2763eb67d1f0404e9ab8eb7280553e8e.jpg" alt="Gallery Image" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
							<div class="gallery-overlay">
								<div class="text-white text-center">
									<h5>Cozy Bedroom</h5>
									<p>Peaceful retreat with our luxury bed collection</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Gallery Section -->

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
							At NUVAST Furnitures, we provide carefully crafted furniture pieces that transform any space into a stylish, comfortable, and functional environment. Whether it's your living room, bedroom, or dining area, our products enhance every corner of your home.
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

		<!-- Start Customer Testimonials Section -->
		<!-- Start Customer Testimonials Section -->
		<div class="py-5" style="background: #f8f9fa;">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12 text-center">
						<h2 class="section-title" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; ">What Our Customers Say</h2>
						<p class="lead" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; ">Real reviews from satisfied customers of our Sri Lankan furniture shop</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 mb-4">
						<div class="testimonial-card">
							<div class="mb-3">
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
							</div>
							<p>"The teak furniture from this shop is stunning. It’s crafted with such care and has transformed our home in Colombo!"</p>
							<div class="d-flex align-items-center">
								<div class="avatar-circle me-3" style="width: 50px; height: 50px; border-radius: 50%; background: #3b5d50; color: white; display: flex; align-items: center; justify-content: center; font-size: 24px;">N</div>
								<div>
									<h6 class="mb-0">Nimali Perera</h6>
									<small class="text-muted">Verified Customer</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-4">
						<div class="testimonial-card">
							<div class="mb-3">
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
							</div>
							<p>"Exceptional service and beautiful handcrafted furniture. The delivery to Kandy was prompt and seamless. Highly recommend!"</p>
							<div class="d-flex align-items-center">
								<div class="avatar-circle me-3" style="width: 50px; height: 50px; border-radius: 50%; background: #3b5d50; color: white; display: flex; align-items: center; justify-content: center; font-size: 24px;">R</div>
								<div>
									<h6 class="mb-0">Rohan Silva</h6>
									<small class="text-muted">Verified Customer</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-4">
						<div class="testimonial-card">
							<div class="mb-3">
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
								<i class="fas fa-star" style="color: #f9bf29;"></i>
							</div>
							<p>"The intricate designs and quality of the woodwork are unmatched. Our new dining set is a masterpiece. Thank you!"</p>
							<div class="d-flex align-items-center">
								<div class="avatar-circle me-3" style="width: 50px; height: 50px; border-radius: 50%; background: #3b5d50; color: white; display: flex; align-items: center; justify-content: center; font-size: 24px;">A</div>
								<div>
									<h6 class="mb-0">Ayesha Fernando</h6>
									<small class="text-muted">Verified Customer</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Customer Testimonials Section -->
		<!-- Start Newsletter Section -->
		<div class="newsletter-section py-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 text-center">
						<h2 class="mb-3" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; ">Stay Updated with Latest Designs</h2>
						<p class="mb-4" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; ">Subscribe to our newsletter and be the first to know about new arrivals, exclusive offers, and design tips.</p>
						<form class="row g-3 justify-content-center">
							<div class="col-md-8">
								<input type="email" class="form-control" placeholder="Enter your email address" required>
							</div>
							<div class="col-md-4">
								<button type="submit" class="btn w-100" style="background-color: transparent; color: white; border: 2px solid #f9bf29; font-weight: 600; border-radius: 0;">Subscribe Now</button>
							</div>
						</form>
						<div class="mt-3">
							<small style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; ">We respect your privacy. Unsubscribe at any time.</small>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Newsletter Section -->
		<!-- Start Services Section -->
		<div class="py-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12 text-center">
						<h2 class="section-title" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; ">Our Services</h2>
						<p class="lead" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; ">Complete furniture solutions for your home</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fas fa-home"></i>
							</div>
							<h4 style="font-family: 'Inter', sans-serif; font-weight: 400; letter-spacing: 1px; ">Home Consultation</h4>
							<p style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; font-size: clamp(12px, 2vw, 13px);">Free in-home design consultation to help you choose the perfect furniture for your space.</p>
						</div>
					</div>
					<div class="col-md-3 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fas fa-tools"></i>
							</div>
							<h4 style="font-family: 'Inter', sans-serif; font-weight: 400; letter-spacing: 1px; ">Custom Design</h4>
							<p style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; font-size: clamp(12px, 2vw, 13px);">Bespoke furniture designed and crafted specifically for your unique requirements and space.</p>
						</div>
					</div>
					<div class="col-md-3 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<h4 style="font-family: 'Inter', sans-serif; font-weight: 400; letter-spacing: 1px; "> Fast Delivery</h4>
							<p style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; font-size: clamp(12px, 2vw, 13px);">Quick and reliable delivery service with professional setup included at no extra cost.</p>
						</div>
					</div>
					<div class="col-md-3 mb-4">
						<div class="feature-card">
							<div class="feature-icon">
								<i class="fas fa-shield-alt"></i>
							</div>
							<h4 style="font-family: 'Inter', sans-serif; font-weight: 400; letter-spacing: 1px; ">Warranty</h4>
							<p style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; font-size: clamp(12px, 2vw, 13px);">Comprehensive warranty coverage on all our furniture pieces for your peace of mind.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Services Section -->

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



		<!-- Start Contact CTA Section -->
		<div >
			<div class="container -mt-20">
				<div class="row">
					<div class="col-md-6 mb-4">
						<div class="feature-card h-100">
							<div class="feature-icon">
								<i class="fas fa-phone"></i>
							</div>
							<h4 style="font-family: 'Inter', sans-serif; font-weight: 400; letter-spacing: 1px; ">Call Us Today</h4>
							<p>Speak with our furniture experts for personalized recommendations and instant quotes.</p>
								<a href="tel:+1234567890" class="btn" 
									style="background-color: #3b5d50; color: white; border: none; border-radius: 0; padding: 8px 20px; font-size: clamp(12px, 1.8vw, 14px);">
									Call Now
								</a>
								</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="feature-card h-100">
							<div class="feature-icon">
								<i class="fas fa-calendar-alt"></i>
							</div>
							<h4 style="font-family: 'Inter', sans-serif; font-weight: 400; letter-spacing: 1px; ">Drop an Email</h4>
							<p>Send us an email and our team will get back to you with expert advice and quick assistance.</p>
								<a href="mailto:info@novast.com" class="btn" 
									style="background-color: #3b5d50; color: white; border: none; border-radius: 0; padding: 8px 20px; font-size: clamp(12px, 1.8vw, 14px);">
									Email Us
								</a>
								</div>
					</div>
				</div>
			</div>
		</div><br/><br/><br/>
		<!-- End Contact CTA Section -->

		<!-- Start Footer Section -->
		 @include('layouts.modals')

         @include('layouts.footer2')

		
		<!-- End Footer Section -->	


		<script src="publicsite/js/bootstrap.bundle.min.js"></script>
		<script src="publicsite/js/tiny-slider.js"></script>
		<script src="publicsite/js/custom.js"></script>

		<!-- Custom JavaScript for enhanced functionality -->
		<script>
		// Animate statistics counter
		function animateCounter() {
			const counters = document.querySelectorAll('[data-count]');
			const speed = 2000;

			counters.forEach(counter => {
				const target = parseInt(counter.getAttribute('data-count'));
				const increment = target / speed;
				let current = 0;

				const timer = setInterval(() => {
					current += increment;
					if (current >= target) {
						current = target;
						clearInterval(timer);
					}
					counter.textContent = Math.floor(current).toLocaleString();
				}, 1);
			});
		}

		// Trigger counter animation when section is visible
		const observerOptions = {
			threshold: 0.5,
			rootMargin: '0px 0px -100px 0px'
		};

		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					animateCounter();
					observer.unobserve(entry.target);
				}
			});
		}, observerOptions);

		const statsSection = document.querySelector('.stats-section');
		if (statsSection) {
			observer.observe(statsSection);
		}

		// Smooth scrolling for anchor links
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();
				const target = document.querySelector(this.getAttribute('href'));
				if (target) {
					target.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
			});
		});

		// Add loading animation for images
		const images = document.querySelectorAll('img');
		images.forEach(img => {
			img.addEventListener('load', function() {
				this.classList.add('loaded');
			});
		});

		// Newsletter form submission
		const newsletterForm = document.querySelector('.newsletter-section form');
		if (newsletterForm) {
			newsletterForm.addEventListener('submit', function(e) {
				e.preventDefault();
				const email = this.querySelector('input[type="email"]').value;
				if (email) {
					alert('Thank you for subscribing! We\'ll keep you updated with our latest designs.');
					this.reset();
				}
			});
		}
		</script>

		<style>
		/* Additional CSS for enhanced effects */
		img {
			opacity: 0;
			transition: opacity 0.3s ease;
		}

		img.loaded,
		img[src*="data:"] {
			opacity: 1;
		}

		.feature-card:hover .feature-icon {
			transform: scale(1.1);
			background-color: #f9bf29;
			transition: all 0.3s ease;
		}

		.process-step:hover .process-icon {
			background-color: #f9bf29;
			transform: scale(1.1);
			transition: all 0.3s ease;
		}

		/* Custom button styles */
		.btn-custom-primary {
			background-color: #3b5d50;
			color: white;
			border: none;
			font-weight: 600;
			border-radius: 0;
		}

		.btn-custom-primary:hover {
			background-color: #2a4239;
			color: white;
		}

		.btn-custom-secondary {
			background-color: #f9bf29;
			color: #3b5d50;
			border: none;
			font-weight: 600;
			border-radius: 0;
		}

		.btn-custom-secondary:hover {
			background-color: #e6a620;
			color: #3b5d50;
		}

		/* Override Bootstrap button border radius */
		.btn {
			border-radius: 0 !important;
		}

		.accordion-button:not(.collapsed) {
			background-color: #3b5d50;
			color: white;
		}

		.accordion-button:focus {
			box-shadow: 0 0 0 0.25rem rgba(59, 93, 80, 0.25);
		}

		.accordion-button {
			color: #3b5d50;
		}

		.accordion-button:hover {
			background-color: #f8f9fa;
		}

		/* Responsive adjustments */
		@media (max-width: 768px) {
			.stats-number {
				font-size: 2rem;
			}

			.room-showcase {
				height: 300px;
			}

			.process-step {
				padding: 1rem 0.5rem;
			}

			.testimonial-card {
				padding: 1.5rem;
			}
		}

		/* Loading animations */
		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(30px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.animate-on-scroll {
			animation: fadeInUp 0.6s ease forwards;
		}
		</style>
	</body>

</html>