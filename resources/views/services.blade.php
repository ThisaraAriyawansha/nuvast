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
        
            /* Hero section animations */
			:root {
			--primary-green: #3b5d50;
			--accent-gold: #f9bf29;
			--light-sage: #f8faf9;
			--warm-white: #fefefe;
			--soft-gray: #f5f7f6;
			--text-dark: #2c3e35;
			--text-light: #6b7c72;
			}

			    * {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				}
				
				body {
				font-family: 'Inter', sans-serif;
				 font-weight: 300; letter-spacing: 1px;
				line-height: 1.7;
				color: var(--text-dark);
				background: var(--warm-white);
				overflow-x: hidden;
				}



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


			   /* Services Grid */
    .services-section {
      padding: 100px 0;
      background: var(--warm-white);
    }
    
    .section-title {
      font-family: 'Playfair Display', serif;
      font-weight: 400;
      font-size: 2.5rem;
      color: var(--primary-green);
      text-align: center;
      margin-bottom: 1rem;
    }
    
    .section-subtitle {
      text-align: center;
      color: var(--text-light);
      font-size: 1.1rem;
      font-weight: 300;
      margin-bottom: 4rem;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    
    .service-card {
      background: var(--warm-white);
      border-radius: 15px;
      padding: 2.5rem 2rem;
      text-align: center;
      border: 1px solid rgba(59, 93, 80, 0.08);
      transition: all 0.4s ease;
      height: 100%;
      position: relative;
      overflow: hidden;
    }
    
    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 2px;
      background: var(--accent-gold);
      transition: all 0.6s ease;
    }
    
    .service-card:hover::before {
      left: 0;
    }
    
    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 40px rgba(59, 93, 80, 0.12);
    }
    
    .service-icon {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, var(--primary-green), var(--primary-green));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      color: white;
      font-size: 1.5rem;
    }
    
    .service-card h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem;
      color: var(--primary-green);
      margin-bottom: 1rem;
      font-weight: 400;
    }
    
    .service-card p {
      color: var(--text-light);
      font-size: 0.95rem;
      line-height: 1.6;
      font-weight: 300;
    }
    
    /* Process Section */
    .process-section {
      padding: 100px 0;
      background: var(--light-sage);
    }
    
    .process-step {
      text-align: center;
      padding: 2rem 1rem;
      position: relative;
    }
    
    .process-number {
      width: 50px;
      height: 50px;
      background: var(--accent-gold);
      color: var(--primary-green);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 600;
      font-size: 1.2rem;
      margin: 0 auto 1.5rem;
      position: relative;
      z-index: 2;
    }
    
    .process-step h4 {
      font-family: 'Playfair Display', serif;
      color: var(--primary-green);
      margin-bottom: 1rem;
      font-size: 1.3rem;
    }
    
    .process-step p {
      color: var(--text-light);
      font-size: 0.95rem;
      font-weight: 300;
    }
    
    /* Features Section */
    .features-section {
      padding: 100px 0;
      background: var(--warm-white);
    }
    
    .feature-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 2.5rem;
    }
    
    .feature-icon {
      width: 50px;
      height: 50px;
      background: var(--light-sage);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary-green);
      font-size: 1.2rem;
      margin-right: 1.5rem;
      flex-shrink: 0;
    }
    
    .feature-content h5 {
      color: var(--primary-green);
      font-weight: 500;
      margin-bottom: 0.5rem;
      font-size: 1.1rem;
    }
    
    .feature-content p {
      color: var(--text-light);
      font-size: 0.95rem;
      margin: 0;
      font-weight: 300;
    }
    
    /* CTA Section */
    .cta-section {
      padding: 80px 0;
      background: linear-gradient(135deg, var(--primary-green), #2d4a3f);
      color: white;
      text-align: center;
    }
    
    .cta-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      margin-bottom: 1rem;
      font-weight: 300;
    }
    
    .cta-section p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      opacity: 0.9;
      font-weight: 300;
    }
    
    .btn-cta {
      background: var(--accent-gold);
      color: var(--primary-green);
      padding: 16px 40px;
      border: none;
      border-radius: 30px;
      font-weight: 500;
      text-decoration: none;
      display: inline-block;
      transition: all 0.4s ease;
      font-size: 1rem;
      letter-spacing: 0.5px;
    }
    
    .btn-cta:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 30px rgba(249, 191, 41, 0.4);
      color: var(--primary-green);
    }
    
    /* Animations */
    .fade-up {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeUp 0.8s ease forwards;
    }
    
    .fade-up.delay-1 { animation-delay: 0.2s; }
    .fade-up.delay-2 { animation-delay: 0.4s; }
    .fade-up.delay-3 { animation-delay: 0.6s; }
    
    @keyframes fadeUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .hero {
        padding: 80px 0 60px;
      }
      
      .services-section,
      .process-section,
      .features-section {
        padding: 60px 0;
      }
    }

        </style>
	<body>
		@include('layouts.nav-2')
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
                                <h1 style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Services</h1>
								<p class="mb-4"> From design consultation to delivery, NUVAST offers tailored services to make your space truly yours.</p>
								<p><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="btn btn-secondary me-2">Shop Now</a><a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="btn btn-white-outline">Explore</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="publicsite/images/0039168_SSDSLILI_62e69_2b43b45a-03d7-4859-8e61-1e0de531490c.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Why Choose Us Section -->
		 <!-- Services Section -->
		<section class="services-section" id="services">
			<div class="container">
			<div class="fade-up">
				<h2 class="section-title">What We Offer</h2>
				<p class="section-subtitle">Comprehensive furniture solutions designed to transform your space with precision, quality, and timeless elegance.</p>
			</div>
			
			<div class="row g-4">
				<div class="col-md-6 col-lg-4">
				<div class="service-card fade-up delay-1">
					<div class="service-icon">
					<i class="fas fa-pencil-ruler"></i>
					</div>
					<h3>Custom Design</h3>
					<p>Bespoke furniture pieces crafted to your exact specifications, blending functionality with your personal aesthetic vision.</p>
				</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
				<div class="service-card fade-up delay-2">
					<div class="service-icon">
					<i class="fas fa-home"></i>
					</div>
					<h3>Interior Consultation</h3>
					<p>Expert guidance on space planning, color coordination, and furniture selection to create harmonious living environments.</p>
				</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
				<div class="service-card fade-up delay-3">
					<div class="service-icon">
					<i class="fas fa-tools"></i>
					</div>
					<h3>Installation & Setup</h3>
					<p>Professional installation services ensuring perfect placement and setup of your furniture with minimal disruption.</p>
				</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
				<div class="service-card fade-up">
					<div class="service-icon">
					<i class="fas fa-leaf"></i>
					</div>
					<h3>Sustainable Materials</h3>
					<p>Eco-friendly furniture options using responsibly sourced materials without compromising on quality or durability.</p>
				</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
				<div class="service-card fade-up delay-1">
					<div class="service-icon">
					<i class="fas fa-redo-alt"></i>
					</div>
					<h3>Restoration Services</h3>
					<p>Breathe new life into cherished pieces with our expert restoration and refurbishment services.</p>
				</div>
				</div>
				
				<div class="col-md-6 col-lg-4">
				<div class="service-card fade-up delay-2">
					<div class="service-icon">
					<i class="fas fa-shipping-fast"></i>
					</div>
					<h3>White Glove Delivery</h3>
					<p>Premium delivery service with careful handling, unpacking, and placement exactly where you want it.</p>
				</div>
				</div>
			</div>
			</div>
		</section>
		<!-- End Why Choose Us Section -->

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

		<!-- Process Section -->
		<section class="process-section">
			<div class="container">
			<div class="fade-up">
				<h2 class="section-title">Our Process</h2>
				<p class="section-subtitle">A seamless journey from concept to completion, ensuring every detail meets your expectations.</p>
			</div>
			
			<div class="row">
				<div class="col-md-3">
				<div class="process-step fade-up delay-1">
					<div class="process-number">1</div>
					<h4>Consultation</h4>
					<p>We begin with understanding your vision, space requirements, and lifestyle needs through detailed discussion.</p>
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="process-step fade-up delay-2">
					<div class="process-number">2</div>
					<h4>Design</h4>
					<p>Our designers create detailed plans and 3D visualizations to bring your ideas to life before production.</p>
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="process-step fade-up delay-3">
					<div class="process-number">3</div>
					<h4>Crafting</h4>
					<p>Skilled artisans carefully construct each piece using premium materials and time-honored techniques.</p>
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="process-step fade-up">
					<div class="process-number">4</div>
					<h4>Delivery</h4>
					<p>Professional installation and setup in your space, ensuring perfect placement and your complete satisfaction.</p>
				</div>
				</div>
			</div>
			</div>
		</section>

<!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="fade-up">
            <h2 class="section-title text-start">Why Choose NUVAST</h2>
            <p class="section-subtitle text-start">Experience the difference that genuine craftsmanship and personalized service can make in your home.</p>
          </div>
          
          <div class="fade-up delay-1">
            <div class="feature-item">
              <div class="feature-icon">
                <i class="fas fa-award"></i>
              </div>
              <div class="feature-content">
                <h5>Premium Quality</h5>
                <p>Every piece is crafted with meticulous attention to detail using only the finest materials and techniques.</p>
              </div>
            </div>
            
            <div class="feature-item">
              <div class="feature-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="feature-content">
                <h5>Timely Delivery</h5>
                <p>We respect your time with reliable project timelines and transparent communication throughout the process.</p>
              </div>
            </div>
            
            <div class="feature-item">
              <div class="feature-icon">
                <i class="fas fa-heart"></i>
              </div>
              <div class="feature-content">
                <h5>Customer Focused</h5>
                <p>Your satisfaction is our priority, with dedicated support from initial consultation to after-sales service.</p>
              </div>
            </div>
            
            <div class="feature-item">
              <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <div class="feature-content">
                <h5>Quality Guarantee</h5>
                <p>Comprehensive warranty coverage and ongoing support to ensure your furniture maintains its beauty for years.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="fade-up delay-2" style="padding: 2rem;">
            <img src="assets/images/banner/gdhgsd.webp" alt="Quality craftsmanship" class="img-fluid" style="border-radius: 15px; box-shadow: 0 20px 40px rgba(59, 93, 80, 0.15);">
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- CTA Section -->
	<section class="cta-section">
		<div class="container">
		<div class="fade-up">
			<h2>Ready to Transform Your Space?</h2>
			<p>Let's create something beautiful together. Schedule your free consultation today.</p>
			<a href="{{ route('contact') }}" class="btn-cta">Contact Us</a>
		</div>
		</div>
	</section><br/><br/>

		
		 @include('layouts.modals')

		<!-- Start Footer Section -->
		 @include('layouts.footer2')

		<!-- End Footer Section -->	


		<script src="publicsite/js/bootstrap.bundle.min.js"></script>
		<script src="publicsite/js/tiny-slider.js"></script>
		<script src="publicsite/js/custom.js"></script>
	</body>

</html>
