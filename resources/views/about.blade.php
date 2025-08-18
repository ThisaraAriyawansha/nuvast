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



				/* Sections */
				.content-section {
				padding: 20px 0;
				}

				.section-title {
				font-size: 2.5rem;
				font-weight: 300;
				letter-spacing: -0.5px;
				color: #2c3e50;
				margin-bottom: 2rem;
				}

				.section-subtitle {
				font-size: 1.1rem;
				color: #6c757d;
				font-weight: 300;
				line-height: 1.8;
				margin-bottom: 3rem;
				}

				/* Story section */
				.story-section {
				background: white;
				border-radius: 20px;
				padding: 60px 40px;
				margin: 40px 0;
				box-shadow: 0 10px 40px rgba(0,0,0,0.05);
				}

				/* Values cards */
				.value-card {
				background: white;
				padding: 40px 30px;
				border-radius: 15px;
				text-align: center;
				transition: all 0.3s ease;
				height: 100%;
				border: 1px solid #f0f0f0;
				}

				.value-card:hover {
				transform: translateY(-10px);
				box-shadow: 0 15px 40px rgba(0,0,0,0.1);
				}

				.value-icon {
				width: 80px;
				height: 80px;
				background: linear-gradient(135deg, #f8f9fa, #e9ecef);
				border-radius: 50%;
				display: flex;
				align-items: center;
				justify-content: center;
				margin: 0 auto 25px;
				font-size: 2rem;
				color: #3b5d50;
				}

				/* Timeline */
					/* Timeline */
					.timeline {
					position: relative;
					max-width: 750px; /* Increased from 650px to use more width */
					margin: 0 auto;
					}

					.timeline::before {
					content: '';
					position: absolute;
					left: 50%;
					top: 0;
					bottom: 0;
					width: 2px;
					background: linear-gradient(to bottom, #3b5d50, #95a5a6);
					transform: translateX(-50%);
					}

					.timeline-item {
					position: relative;
					margin-bottom: 15px; /* Unchanged from previous for compact height */
					width: 50%;
					}

					.timeline-item:nth-child(odd) {
					left: 0;
					padding-right: 30px;
					text-align: right;
					}

					.timeline-item:nth-child(even) {
					left: 50%;
					padding-left: 30px;
					}

					.timeline-content {
					background: white;
					padding: 10px; /* Reduced from 15px to decrease card height */
					border-radius: 8px;
					box-shadow: 0 3px 10px rgba(0,0,0,0.1);
					position: relative;
					}

					.timeline-date {
					font-weight: 500;
					color: #3b5d50;
					font-size: 0.9rem; /* Reduced from 1rem for smaller card height */
					margin-bottom: 4px; /* Reduced from 5px */
					}

					.timeline-dot {
					position: absolute;
					width: 12px;
					height: 12px;
					background: #3b5d50;
					border-radius: 50%;
					top: 12px; /* Adjusted from 15px to align with smaller cards */
					}

					.timeline-item:nth-child(odd) .timeline-dot {
					right: -36px;
					}

					.timeline-item:nth-child(even) .timeline-dot {
					left: -36px;
					}


				/* Statistics */
				.stat-item {
				text-align: center;
				padding: 40px 20px;
				}

				.stat-number {
				font-size: 3rem;
				font-weight: 200;
				color: #3b5d50;
				display: block;
				margin-bottom: 10px;
				}

				.stat-label {
				color: #6c757d;
				font-weight: 300;
				letter-spacing: 1px;
				text-transform: uppercase;
				font-size: 0.9rem;
				}

				/* Commitment section */
				.commitment-section {
				background: linear-gradient(135deg, #3b5d50 0%, #203b31ff 100%);
				color: white;
				padding: 100px 0;
				position: relative;
				overflow: hidden;
				}

				.commitment-section::before {
				content: '';
				position: absolute;
				top: -50%;
				right: -50%;
				width: 100%;
				height: 200%;
				background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
				transform: rotate(45deg);
				}

				/* Mobile responsiveness */
				@media (max-width: 768px) {
				.timeline::before { left: 30px; }
				.timeline-item { width: 100%; left: 0 !important; padding-left: 60px !important; padding-right: 0 !important; text-align: left !important; }
				.timeline-dot { left: 22px !important; }
				.hero { padding: 80px 0 60px 0; }
				.section-title { font-size: 2rem; }
				.story-section { padding: 40px 25px; }
				}

			  .shopbtn-inline, .explorebtn-inline {
				padding: 0.6rem 1.2rem;
				font-size: 0.9rem;
				font-weight: 300;
				letter-spacing: 1px;
				text-decoration: none;
				display: inline-block;
				transition: transform 0.2s ease;
				margin-right: 0.5rem;
			}

			.shopbtn-inline {
				background-color: #f9bf29;
				color: #3b5d50;
				border: none;
			}

			.explorebtn-inline {
				background-color: transparent;
				color: white;
				border: 1px solid white;
			}

			/* Hover bounce effect */
			.shopbtn-inline:hover,
			.explorebtn-inline:hover {
				transform: translateY(-3px); /* small upward bounce */
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
                                <h1 style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">About Us</h1>
								<p class="mb-4">At NUVAST, we craft timeless designs that bring beauty, comfort, and lasting quality to your home.</p>
								<p>
								<a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" 
									class="shopbtn-inline">
									Shop Now
								</a>

								<a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" 
									class="explorebtn-inline">
									Explore
								</a>
								</p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="publicsite/images/the-budleigh-medium-sofa-p136-378_image.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

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
							<img src="images/lp-ftp-na-meble-liscie-1920x1441.webp" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->



	<div class="product-area py-[150px] dark-blue-bg relative" 
		style="background:url(assets/images/banner/Goodwall_paint_switch_yellow.jpg) no-repeat; background-position:center; background-size:cover; background-attachment: fixed; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
		
		<!-- Overlay -->
		<div class="absolute inset-0 bg-black opacity-50 z-0" style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"></div>

		<div class="container h-100 relative z-10">
			<div class="row justify-content-center align-items-center h-100">
				<div class="col-12 text-center">
					<h2 class="text-xl lg:text-4xl font-light text-white mb-2" 
						style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">
						About NUVAST Furnitures
					</h2>
					<p class="text-white text-sm" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">
						At NUVAST Furnitures, we blend craftsmanship, innovation, and timeless design to create furniture that brings warmth and style to every home. Our mission is to deliver comfort, durability, and beauty — one piece at a time.
					</p>
				</div>
			</div>
		</div>
	</div>


	<!-- Start Our Story Section -->
	<div class="content-section">
	<div class="container">
		<div class="story-section">
		<div class="row align-items-center">
			<div class="col-lg-6">
			<h2 class="section-title">Our Story</h2>
			<p class="section-subtitle">Born from a passion for exceptional design and unwavering quality, NUVAST began as a vision to create furniture that speaks to the soul.</p>
			<p style="color: #6c757d; font-weight: 300;">What started as a small workshop has grown into a trusted name in contemporary furniture. We believe that every piece should tell a story, reflect personality, and stand the test of time. Our journey is guided by the principle that good design is not just about aesthetics—it's about creating meaningful connections between people and their spaces.</p>
			</div>
			<div class="col-lg-6">
			<img src="assets/images/banner/home-interior-decorative-furniture-hd-wallpapers.jpg" class="img-fluid rounded" alt="Craftsman at work" style="border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
			</div>
		</div>
		</div>
	</div>
	</div>


		<!-- Start Values Section -->
		<div class="content-section" style="background: #fafafa; padding: 80px 0;">
		<div class="container">
			<div class="text-center mb-5">
			<h2 class="section-title">What Drives Us</h2>
			<p class="section-subtitle">Our core values shape every decision, every design, and every piece we create.</p>
			</div>
			
			<div class="row g-4">
			<div class="col-lg-3 col-md-6">
				<div class="value-card">
				<div class="value-icon">
					<i class="fas fa-leaf"></i>
				</div>
				<h4 style="font-weight: 400; margin-bottom: 15px; color: #2c3e50;">Sustainability</h4>
				<p style="color: #6c757d; font-weight: 300; font-size: 0.95rem;">We source responsibly, create mindfully, and build for generations to come.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="value-card">
				<div class="value-icon">
					<i class="fas fa-heart"></i>
				</div>
				<h4 style="font-weight: 400; margin-bottom: 15px; color: #2c3e50;">Passion</h4>
				<p style="color: #6c757d; font-weight: 300; font-size: 0.95rem;">Every curve, every joint, every finish reflects our dedication to the craft.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="value-card">
				<div class="value-icon">
					<i class="fas fa-gem"></i>
				</div>
				<h4 style="font-weight: 400; margin-bottom: 15px; color: #2c3e50;">Excellence</h4>
				<p style="color: #6c757d; font-weight: 300; font-size: 0.95rem;">We never compromise on quality, materials, or attention to detail.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="value-card">
				<div class="value-icon">
					<i class="fas fa-users"></i>
				</div>
				<h4 style="font-weight: 400; margin-bottom: 15px; color: #2c3e50;">Community</h4>
				<p style="color: #6c757d; font-weight: 300; font-size: 0.95rem;">We believe in supporting local artisans and building lasting relationships.</p>
				</div>
			</div>
			</div>
		</div>
		</div>

		<div class="section-divider"></div>

		<!-- Start Timeline Section -->
		<!-- Start Timeline Section -->
		<div class="content-section" style="padding: 40px 0;">
		<div class="container">
			<div class="text-center mb-2">
			<h2 class="section-title" style="font-size: 1.5rem; margin-bottom: 0.5rem;">Our Journey</h2>
			<p class="section-subtitle" style="margin-bottom: 1rem;">Milestones that shaped NUVAST into what we are today.</p>
			</div>
			
			<div class="timeline" style="max-width: 750px;"> <!-- Increased from 650px -->
			<div class="timeline-item" style="margin-bottom: 15px;">
				<div class="timeline-content" style="padding: 10px;"> <!-- Reduced padding from 15px -->
				<div class="timeline-date">2018</div>
				<h4 style="font-weight: 400; color: #3b5d50; margin-bottom: 4px; font-size: 0.9rem;">The Beginning</h4> <!-- Reduced font-size from 1rem -->
				<p style="color: #6c757d; font-weight: 300; font-size: 0.8rem;">Founded with a simple mission: to create furniture that enhances the way people live and connect with their spaces.</p> <!-- Reduced from 0.85rem -->
				</div>
				<div class="timeline-dot"></div>
			</div>
			
			<div class="timeline-item" style="margin-bottom: 15px;">
				<div class="timeline-content" style="padding: 10px;"> <!-- Reduced padding -->
				<div class="timeline-date">2020</div>
				<h4 style="font-weight: 400; color: #3b5d50; margin-bottom: 4px; font-size: 0.9rem;">Sustainable Focus</h4> <!-- Reduced font-size -->
				<p style="color: #6c757d; font-weight: 300; font-size: 0.8rem;">Committed to eco-friendly practices and sustainable sourcing, becoming certified by environmental standards.</p> <!-- Reduced font-size -->
				</div>
				<div class="timeline-dot"></div>
			</div>
			
			<div class="timeline-item" style="margin-bottom: 15px;">
				<div class="timeline-content" style="padding: 10px;"> <!-- Reduced padding -->
				<div class="timeline-date">2022</div>
				<h4 style="font-weight: 400; color: #3b5d50; margin-bottom: 4px; font-size: 0.9rem;">Recognition</h4> <!-- Reduced font-size -->
				<p style="color: #6c757d; font-weight: 300; font-size: 0.8rem;">Received industry recognition for design excellence and commitment to quality craftsmanship.</p> <!-- Reduced font-size -->
				</div>
				<div class="timeline-dot"></div>
			</div>
			
			<div class="timeline-item" style="margin-bottom: 15px;">
				<div class="timeline-content" style="padding: 10px;"> <!-- Reduced padding -->
				<div class="timeline-date">2024</div>
				<h4 style="font-weight: 400; color: #3b5d50; margin-bottom: 4px; font-size: 0.9rem;">Expanding Horizons</h4> <!-- Reduced font-size -->
				<p style="color: #6c757d; font-weight: 300; font-size: 0.8rem;">Launching new collections and expanding our reach, while maintaining our commitment to quality and sustainability.</p> <!-- Reduced font-size -->
				</div>
				<div class="timeline-dot"></div>
			</div>
			</div>
		</div>
		</div>


		<!-- Start Statistics Section -->
			<div class="content-section" style="background: #fafafa;">
			<div class="container">
				<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="stat-item">
					<span class="stat-number">5000+</span>
					<span class="stat-label">Happy Customers</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-item">
					<span class="stat-number">200+</span>
					<span class="stat-label">Unique Designs</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-item">
					<span class="stat-number">15+</span>
					<span class="stat-label">Master Craftsmen</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="stat-item">
					<span class="stat-number">6</span>
					<span class="stat-label">Years of Excellence</span>
					</div>
				</div>
				</div>
			</div>
			</div>

			<!-- Start Commitment Section -->
			<div class="commitment-section">
			<div class="container">
				<div class="row justify-content-center text-center">
				<div class="col-lg-8">
					<h2 style="font-size: 2.5rem; font-weight: 200; margin-bottom: 2rem; letter-spacing: -0.5px;">Our Commitment</h2>
					<p style="font-size: 1.2rem; font-weight: 300; line-height: 1.8; margin-bottom: 2rem; opacity: 0.9;">We promise to continue creating furniture that not only meets your needs but exceeds your expectations. Every piece carries our dedication to quality, sustainability, and timeless design.</p>
					<div style="width: 60px; height: 2px; background: white; margin: 0 auto; opacity: 0.7;"></div>
				</div>
				</div>
			</div>
			</div>
			

		<!-- Start Footer Section -->
		 @include('layouts.footer2')
		<!-- End Footer Section -->	


		<script src="publicsite/js/bootstrap.bundle.min.js"></script>
		<script src="publicsite/js/tiny-slider.js"></script>
		<script src="publicsite/js/custom.js"></script>
	</body>

</html>


<script>
// Smooth scrolling animation
document.addEventListener('DOMContentLoaded', function() {
  // Animate statistics on scroll
  const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px 0px -50px 0px'
  };
  
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const statNumbers = entry.target.querySelectorAll('.stat-number');
        statNumbers.forEach(stat => {
          const finalNumber = parseInt(stat.textContent);
          animateNumber(stat, 0, finalNumber, 2000);
        });
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  const statsSection = document.querySelector('.stat-item').closest('.content-section');
  if (statsSection) observer.observe(statsSection);
  
  function animateNumber(element, start, end, duration) {
    const startTime = performance.now();
    const suffix = element.textContent.replace(/[\d]/g, '');
    
    function updateNumber(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const current = Math.floor(progress * (end - start) + start);
      element.textContent = current + suffix;
      
      if (progress < 1) {
        requestAnimationFrame(updateNumber);
      }
    }
    
    requestAnimationFrame(updateNumber);
  }
});
</script>