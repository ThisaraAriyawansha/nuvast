
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="green_n.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
    <script src="assets/js/tailwind-cdn.js"></script>

		<!-- Bootstrap CSS -->
		<link href="publicsite/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="publicsite/css/tiny-slider.css" rel="stylesheet">
		<link href="publicsite/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
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




/* Style Recommender Modal - Fully Responsive */
#styleRecommenderModal .modal-dialog {
    max-width: 500px; /* Fixed max width for desktop */
    margin: 1rem auto;
}
#styleRecommenderModal .modal-content {
    background-color: #ffffff;
    border: 1px solid #3b5d50;
    border-radius: 12px;
    overflow: hidden;
}
#styleRecommenderModal .modal-header {
    border-bottom: none;
    padding: 1.5rem 1.5rem 0;
}
#styleRecommenderModal .modal-body {
    padding: 0 1.5rem 1.5rem;
}
.style-option {
    transition: all 0.3s ease;
    border: 1px solid #3b5d50;
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    letter-spacing: 0.5px;
    color: #3b5d50;
    background-color: white;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1.25rem 0.5rem;
    margin-bottom: 0.75rem;
    text-align: center;
    width: 100%;
    height: 100%;
}
.style-option:hover {
    background-color: #3b5d50;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(59, 93, 80, 0.2);
    border-color: #3b5d50;
}
.style-option i {
    transition: all 0.3s ease;
    color: #3b5d50;
    font-size: 1.5rem;
    margin-bottom: 0.75rem;
}
.style-option:hover i {
    color: white;
    transform: scale(1.15);
}
#styleRecommenderModal h3 {
    color: #3b5d50;
    font-weight: 500;
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
    text-align: center;
}
#styleRecommenderModal .btn-link {
    color: #3b5d50;
    text-decoration: none;
    font-weight: 400;
    transition: all 0.3s ease;
    padding: 0.75rem;
    border-radius: 6px;
    display: block;
    width: 100%;
    margin-top: 1rem;
    text-align: center;
    border: 1px solid transparent;
}
#styleRecommenderModal .btn-link:hover {
    color: #2a453a;
    background-color: rgba(59, 93, 80, 0.1);
    border-color: #3b5d50;
}
.center-container {
    display: flex;
    justify-content: center;
    padding: 1rem 0;
}

/* Mobile-specific styles */
@media (max-width: 767.98px) {
    #styleRecommenderModal .modal-dialog {
        max-width: 100%;
        margin: 0;
        height: 100%;
    }
    #styleRecommenderModal .modal-content {
        border-radius: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    #styleRecommenderModal .modal-body {
        padding: 1rem;
    }
    .style-option {
        padding: 1.5rem 0.5rem;
        margin-bottom: 0.75rem;
    }
    #styleRecommenderModal h3 {
        font-size: 1.4rem;
        margin-bottom: 1.25rem;
    }
    #styleRecommenderModal .btn-link {
        margin-top: 0.75rem;
        padding: 0.75rem;
    }
}

/* Small mobile devices */
@media (max-width: 575.98px) {
    #styleRecommenderModal .modal-body {
        padding: 1rem 0.75rem;
    }
    .style-option {
        padding: 1.25rem 0.5rem;
    }
    #styleRecommenderModal h3 {
        font-size: 1.3rem;
        margin-bottom: 1rem;
    }
    .style-option i {
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
    }
}

/* Extra small devices (phones, 360px and down) */
@media (max-width: 360px) {
    #styleRecommenderModal h3 {
        font-size: 1.2rem;
    }
    .style-option {
        padding: 1rem 0.5rem;
        font-size: 0.9rem;
    }
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
                                <h1 style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Collection</h1>
								<p class="mb-4">Curated collections of modern, timeless designs to elevate your home.Experience quality craftsmanship and understated elegance in every product.</p>
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
								<img src="publicsite/images/couch.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

<br/><br/><br/>
    <div class="center-container">
        <button class="chnagestylebtn" 
                data-bs-toggle="modal" 
                data-bs-target="#styleRecommenderModal">
            <i class="fas fa-palette me-1"></i> Change Style
        </button>
    </div>

<!-- Modal HTML (replace your existing modal with this) -->
<div class="modal fade" id="styleRecommenderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <h3>What's your vibe?</h3>
                <div class="row g-3">
                    <div class="col-6">
                        <button class="style-option btn btn-outline-secondary w-100" 
                                data-style="minimalist" 
                                onclick="filterByStyle('minimalist')">
                            <i class="fas fa-bars-staggered"></i> Minimalist
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="style-option btn btn-outline-secondary w-100" 
                                data-style="vintage" 
                                onclick="filterByStyle('vintage')">
                            <i class="fas fa-clock-rotate-left"></i> Vintage
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="style-option btn btn-outline-secondary w-100" 
                                data-style="modern" 
                                onclick="filterByStyle('modern')">
                            <i class="fas fa-cube"></i> Modern
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="style-option btn btn-outline-secondary w-100" 
                                data-style="cozy" 
                                onclick="filterByStyle('cozy')">
                            <i class="fas fa-couch"></i> Cozy
                        </button>
                    </div>
                </div>
                <button type="button" class="btn btn-link" onclick="clearStyleFilter()" style="background-color: #3b5d50; color: white; margin-top: 1rem;">
                    Show me everything
                </button>
            </div>
        </div>
    </div>
</div>

		<div class="untree_co-section product-section before-footer-section">
			<div class="container">
				<div class="row">
					@foreach($products as $product)
						<!-- Product Column -->
						<div class="col-12 col-md-4 col-lg-3 mb-5 d-flex">
							<div class="product-item w-100 d-flex flex-column"  style="text-decoration: none; color: inherit;">
								<!-- Image container with fixed aspect ratio -->
								<div class="product-image-container" style="height: 200px; overflow: hidden;">
									@if($product->images->isNotEmpty())
										<img src="{{ $product['image'] }}" 
											class="img-fluid product-thumbnail w-100 h-100 object-fit-cover" 
											alt="{{ $product->name }}">
									@else
										<img src="{{ $product['image'] }}" 
											class="img-fluid product-thumbnail w-100 h-100 object-fit-cover" 
											alt="Default product image">
									@endif
								</div>
								
								<!-- Product info with fixed height -->
								<div class="product-info p-3 flex-grow-1 d-flex flex-column" style="height: 120px;">
									<a href="singleProduct?product-id={{ $product['id'] }}" style="text-decoration: none; color: inherit;">
										<h3 class="product-title mb-2" 
											style="font-size: 1rem; line-height: 1.3; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
											{{ $product['name'] }}
										</h3>
									</a>

									
									<div class="mt-auto">
										@if($product->discounted_price < $product->retail_price)
											<div>
												<strong class="product-price" style="font-size: 1.1rem;">Rs. {{ number_format($product->discounted_price, 2) }}</strong>
												<span class="original-price text-muted" style="font-size: 0.9rem;"><del>Rs. {{ number_format($product->retail_price, 2) }}</del></span>
											</div>
										@else
											<strong class="product-price" style="font-size: 1.1rem;">Rs. {{ number_format($product->retail_price, 2) }}</strong>
										@endif
									</div>
								</div>

								<!-- Add to cart button -->
								<div class="p-2 text-center" 
									style="cursor: pointer;"
									data-bs-toggle="modal" 
									data-bs-target="#exampleModal-Cart" 
									onclick="addToCartProduct({{ $product['id'] }});">
									<span class="icon-cross">
										<img src="{{ asset('images/cross.svg') }}" class="img-fluid" alt="Add to cart" style="width: 20px;">
									</span>
								</div>

							</div>
						</div>
					@endforeach
				</div>
				
				<!-- Pagination Links -->
				<div class="row" style="display: flex; justify-content: center; margin: 20px 0;">
					<div class="col-12" style="display: flex; justify-content: center;">
						<nav>
							<ul style="display: flex; list-style: none; padding: 0; margin: 0; gap: 8px; font-family: 'Inter', sans-serif; align-items: center;">
								<!-- Previous Button -->
								@if ($products->onFirstPage())
									<li>
										<span style="color: #cccccc; padding: 8px; font-size: 14px; opacity: 0.5; cursor: not-allowed;">
											<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#cccccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
												<path d="M15 18l-6-6 6-6"/>
											</svg>
										</span>
									</li>
								@else
									<li>
										<a href="{{ $products->previousPageUrl() }}" style="color: #3b5d50; text-decoration: none; padding: 8px; font-size: 14px; border-radius: 4px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#3b5d50'; this.style.color='white';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#3b5d50';">
											<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
												<path d="M15 18l-6-6 6-6"/>
											</svg>
										</a>
									</li>
								@endif

								<!-- Page Numbers -->
								@foreach ($products->links()->elements[0] as $page => $url)
									<li>
										@if ($page == $products->currentPage())
											<span style="background-color: #3b5d50; color: white; padding: 8px 12px; border-radius: 4px; font-size: 14px; font-weight: 500;">{{ $page }}</span>
										@elseif ($page === '...')
											<span style="color: #3b5d50; padding: 8px 12px; font-size: 14px;">{{ $page }}</span>
										@else
											<a href="{{ $url }}" style="color: #3b5d50; text-decoration: none; padding: 8px 12px; border-radius: 4px; font-size: 14px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#3b5d50'; this.style.color='white';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#3b5d50';">{{ $page }}</a>
										@endif
									</li>
								@endforeach

								<!-- Next Button -->
								@if ($products->hasMorePages())
									<li>
										<a href="{{ $products->nextPageUrl() }}" style="color: #3b5d50; text-decoration: none; padding: 8px; font-size: 14px; border-radius: 4px; transition: background-color 0.3s, color 0.3s;" onmouseover="this.style.backgroundColor='#3b5d50'; this.style.color='white';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#3b5d50';">
											<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
												<path d="M9 18l6-6-6-6"/>
											</svg>
										</a>
									</li>
								@else
									<li>
										<span style="color: #cccccc; padding: 8px; font-size: 14px; opacity: 0.5; cursor: not-allowed;">
											<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#cccccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
												<path d="M9 18l6-6-6-6"/>
											</svg>
										</span>
									</li>
								@endif
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		 @include('layouts.modals')
		<!-- End Product Section -->	

		<!-- Start Footer Section -->
		 @include('layouts.footer2')
		<!-- End Footer Section -->	


		<script src="publicsite/js/bootstrap.bundle.min.js"></script>
		<script src="publicsite/js/tiny-slider.js"></script>
		<script src="publicsite/js/custom.js"></script>
	</body>

</html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

function addToCartProduct(prodID) {
    // Fetch product details from API
    fetch(`/api/product/${prodID}`)
        .then(response => response.json())
        .then(product => {
            // Fetch product quantity from API before adding to cart
            fetch(`/product-quantity/${prodID}`)
                .then(response => response.json())
                .then(data => {
                    const availableQty = data.qty;

                    if (availableQty <= 0) {
                        alert('This product is out of stock.');
                        return;
                    }

                    // Check if product already exists in cart
                    const existingCartItem = cart.find(item => item.id == prodID);

                    if (existingCartItem) {
                        // If product exists, check available stock before incrementing quantity
                        if (existingCartItem.quantity < availableQty) {
                            existingCartItem.quantity += 1;
                        } else {
                            alert('Only ' + availableQty + ' items available in stock.');
                            return;
                        }
                    } else {
                        // If product doesn't exist, add it with quantity 1
                        cart.push({
                            id: product.id,
                            name: product.name,
                            price: product.discounted_price,
                            image: product.image,
                            quantity: 1
                        });
                    }

                    // Update cart count in UI
                    updateCartCount();

                    // Show success message
                    updateCartModal(product);

                    // Save cart to localStorage
                    saveCartToStorage();

                    // Log cart for debugging
                    console.log('Current cart:', cart);

                    // Update cart modal
                    displayCartItems();
                })
                .catch(error => console.error('Error fetching product quantity:', error));
        })
        .catch(error => console.error('Error fetching product details:', error));
}


</script>



<!-- Add this modal HTML right after your hero section -->


<script>
// Show style recommender modal on page load
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    
    // Only show modal if:
    // 1. No style filter is currently applied
    // 2. The page wasn't loaded from "Show me everything" click
    // 3. The modal hasn't been shown in this session
    if(!urlParams.has('style') && 
       !urlParams.has('skip_modal') &&
       sessionStorage.getItem('modalShown') !== 'true') {
        
        var styleModal = new bootstrap.Modal(document.getElementById('styleRecommenderModal'));
        styleModal.show();
        
        // Remember we've shown the modal in this session
        sessionStorage.setItem('modalShown', 'true');
    }
    
    // Clean up the URL if skip_modal is present
    if(urlParams.has('skip_modal')) {
        const cleanUrl = new URL(window.location.href);
        cleanUrl.searchParams.delete('skip_modal');
        window.history.replaceState({}, '', cleanUrl.toString());
    }
});

// Filter products by selected style
function filterByStyle(style) {
    // Close the modal
    var styleModal = bootstrap.Modal.getInstance(document.getElementById('styleRecommenderModal'));
    styleModal.hide();
    
    // Get current URL parameters
    const url = new URL(window.location.href);
    
    // Add or update style parameter
    url.searchParams.set('style', style);
    
    // Remove skip_modal flag if present
    url.searchParams.delete('skip_modal');
    
    // Reload the page with new filter
    window.location.href = url.toString();
}

// Clear style filter and show all products
function clearStyleFilter() {
    // Close the modal
    var styleModal = bootstrap.Modal.getInstance(document.getElementById('styleRecommenderModal'));
    styleModal.hide();
    
    // Get current URL
    const url = new URL(window.location.href);
    
    // Remove the style parameter
    url.searchParams.delete('style');
    
    // Add temporary flag to prevent modal from showing again
    url.searchParams.set('skip_modal', 'true');
    
    // Reload the page without the style filter
    window.location.href = url.toString();
    
    // Reset modal shown flag for next session
    sessionStorage.removeItem('modalShown');
}
</script>