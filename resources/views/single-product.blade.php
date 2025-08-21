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
    <title>NUVAST Furnitures - {{ $product['name'] }}</title>
    <link rel="shortcut icon" href="green_n.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <style>
        :root {
            --primary: #2d3748;
            --accent: #3b5d50;
            --light-bg: #f8f9fa;
            --text-dark: #1a202c;
            --text-light: #718096;
            --border-color: #e2e8f0;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            background-color: white;
            line-height: 1.6;
            font-weight: 300;
        }
        
        .product-gallery {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }
        
        .main-image {
            width: 100%;
            height: 480px;
            object-fit: contain;
            background: white;
            border-radius: 4px;
            padding: 16px;
            border: 1px solid #dfe0e1ff;
        }
        
        .thumbnail-container {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        
        .thumbnail {
            width: 64px;
            height: 64px;
            object-fit: cover;
            border-radius: 2px;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 1px solid var(--border-color);
        }
        
        .thumbnail:hover, .thumbnail.active {
            border-color: var(--accent);
            opacity: 0.8;
        }
        
        .product-details {
            padding: 24px;
        }
        
        .price-section {
            margin: 20px 0;
        }
        
        .discounted-price {
            font-size: 22px;
            font-weight: 500;
            color: var(--text-dark);
        }
        
        .retail-price {
            font-size: 16px;
            text-decoration: line-through;
            color: var(--text-light);
            margin-left: 8px;
        }
        
        .feature-list {
            list-style-type: none;
            padding: 0;
        }
        
        .feature-list li {
            padding: 8px 0;
            border-bottom: 1px solid #edf2f7;
            display: flex;
            align-items: center;
        }
        
        .feature-list li:before {
            content: "•";
            color: var(--accent);
            font-weight: bold;
            display: inline-block; 
            width: 1em;
            margin-left: -1em;
        }
        
        .stock-status {
            font-weight: 400;
            font-size: 14px;
            color: var(--accent);
        }
        
        .out-of-stock {
            color: #e53e3e;
        }
        
        .btn-minimal {
            background-color: transparent;
            color: var(--accent);
            padding: 10px 20px;
            font-weight: 400;
            font-size: 14px;
            letter-spacing: 0.5px;
            transition: all 0.2s ease;
            border: 1px solid var(--accent);
            border-radius: 2px;
        }
        
        .btn-minimal:hover {
            background-color: var(--accent);
            color: white;
        }
        
        .breadcrumb-item a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 13px;
            transition: color 0.2s ease;
        }
        
        .breadcrumb-item a:hover {
            color: var(--accent);
        }
        
        .breadcrumb-item.active {
            color: var(--accent);
            font-weight: 400;
        }
        
        h1 {
            font-weight: 400;
            font-size: 24px;
            color: var(--text-dark);
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }
        
        h5 {
            font-weight: 400;
            font-size: 16px;
            color: var(--text-dark);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .brand-tag {
            display: inline-block;
            padding: 2px 8px;
            color: var(--accent);
            font-size: 12px;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        
        .divider {
            height: 1px;
            background-color: #edf2f7;
            margin: 20px 0;
            width: 100%;
        }
        
        .warranty-badge {
            display: inline-block;
            font-size: 12px;
            font-weight: 400;
        }
        
        .text-muted {
            font-size: 14px;
            color: var(--text-light);
            line-height: 1.6;
        }

        /* New sections styling */
        .section-title {
            font-weight: 400;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-dark);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .related-product {
            text-align: center;
            padding: 1rem;
            transition: transform 0.2s ease;
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            margin-bottom: 1rem;
        }
        
        .related-product:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        .related-product img {
            height: 150px;
            width: 100%;
            object-fit: contain;
            margin-bottom: 0.75rem;
            background: var(--light-bg);
            border-radius: 2px;
        }
        
        .related-product h6 {
            font-size: 0.9rem;
            font-weight: 400;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }
        
        .related-product .price {
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--accent);
        }
        
        .specs-table {
            width: 100%;
            font-size: 0.9rem;
            border-collapse: collapse;
        }
        
        .specs-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .specs-table td {
            padding: 0.75rem;
            border-bottom: 1px solid var(--border-color);
        }
        
        .specs-table td:first-child {
            font-weight: 400;
            color: var(--text-light);
            width: 35%;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
        }
        
        .nav-tabs {
            border-bottom: 1px solid var(--border-color);
        }
        
        .nav-tabs .nav-link {
            border: none;
            color: var(--text-light);
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--accent);
            background: transparent;
            border-bottom: 2px solid var(--accent);
        }
        
        .delivery-info {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .delivery-info i {
            margin-right: 1rem;
            color: var(--accent);
            width: 20px;
        }
        
        .product-section {
            margin: 3rem 0;
            padding: 2rem 0;
            border-top: 1px solid var(--border-color);
        }
        
        .quantity-selector {
            display: flex;
            align-items: center;
            margin: 1rem 0;
        }
        
        .quantity-btn {
            background: transparent;
            border: 1px solid var(--border-color);
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .quantity-btn:hover {
            border-color: var(--accent);
            color: var(--accent);
        }
        
        .quantity-input {
            border: 1px solid var(--border-color);
            border-left: none;
            border-right: none;
            width: 50px;
            height: 35px;
            text-align: center;
            font-size: 0.9rem;
        }
        
        .quantity-input:focus {
            outline: none;
            border-color: var(--accent);
        }
        
        .save-percentage {
            background: #e6fffa;
            color: #00b894;
            font-size: 0.75rem;
            padding: 2px 6px;
            border-radius: 2px;
            font-weight: 500;
            margin-left: 8px;
        }
        
        .product-tags {
            margin-top: 1rem;
        }
        
        .tag {
            display: inline-block;
            background: var(--light-bg);
            color: var(--text-light);
            padding: 2px 8px;
            font-size: 0.75rem;
            border-radius: 2px;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }
        
        .review-summary {
            display: flex;
            align-items: center;
            margin: 1rem 0;
        }
        
        .stars {
            color: #ffd700;
            margin-right: 0.5rem;
        }
        
        .review-count {
            font-size: 0.85rem;
            color: var(--text-light);
        }

        

        /* Centering the main container */
.container.product-section {
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 20px;
}

/* Styling for nav tabs to ensure they are centered */
.nav-tabs {
    display: flex;
    justify-content: center;
    border-bottom: 1px solid #dee2e6;
    margin-bottom: 20px;
}

.nav-tabs .nav-item {
    margin: 0 10px;
}

.nav-tabs .nav-link {
    color: #333;
    border: none;
    border-bottom: 2px solid transparent;
    transition: all 0.3s ease;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-link:hover {
    border-bottom: 2px solid #3b5d50;
    color: #3b5d50;
}

/* Table styling for specifications */
.specs-table {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    border-collapse: collapse;
}

.specs-table tr {
    border-bottom: 1px solid #e9ecef;
}

.specs-table td {
    padding: 12px;
    text-align: left;
}

.specs-table td:first-child {
    font-weight: bold;
    width: 40%;
}

/* Styling for related products section */
.related-product {
    text-align: center;
    transition: transform 0.3s ease;
    height: 360px; /* Fixed height for consistent card size */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 15px;
    border: 1px solid #e9ecef;
    border-radius: 8px;
}

.related-product:hover {
    transform: translateY(-5px);
    border-color: #3b5d50;
}

.related-product img {
    max-width: 100%;
    height: 200px; /* Fixed image height */
    object-fit: cover; /* Ensure images scale uniformly */
    border-radius: 8px;
    margin-bottom: 15px;
}

.related-product h6 {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #333;
    height: 48px; /* Fixed height for title to prevent text overflow */
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-decoration: none;
}



.related-product .price {
    color: #3b5d50;
    font-weight: bold;
    font-size: 1.1rem;
}

/* Centering FAQ accordion */
.accordion {
    max-width: 800px;
    margin: 0 auto;
}

.accordion-item {
    border: 1px solid #e9ecef;
    border-radius: 5px;
    margin-bottom: 10px;
}

.accordion-button {
    background-color: #f8f9fa;
    color: #333;
    font-weight: 500;
}

.accordion-button:not(.collapsed) {
    background-color: #e7f1ff;
    color: #3b5d50;
}

.accordion-body {
    background-color: #fff;
    padding: 20px;
}

/* Centering section titles */
.section-title {
    font-size: 1.8rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 30px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container.product-section {
        padding: 15px;
    }

    .nav-tabs {
        flex-direction: column;
        align-items: center;
    }

    .nav-tabs .nav-item {
        margin: 5px 0;
    }

    .specs-table td {
        display: block;
        width: 100%;
        text-align: center;
    }

    .specs-table td:first-child {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .related-product {
        height: 340px; /* Slightly smaller for mobile */
        margin-bottom: 20px;
    }

    .related-product img {
        height: 180px; /* Adjusted image height for mobile */
    }

    .related-product h6 {
        height: 44px; /* Adjusted title height for mobile */
    }

    .accordion {
        max-width: 100%;
    }
}
    </style>
</head>

<body>
    <!-- Start Header/Navigation -->
    @include('layouts.nav-2')

    <!-- Breadcrumb Navigation -->
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home mr-2"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="/products">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product['name'] }}</li>
            </ol>
        </nav>
    </div>

    <!-- Main Product Content -->
    <div class="container py-4">
        <div class="row">
            <!-- Product Images Section -->
            <div class="col-lg-6">
                <div class="product-gallery">
                    <!-- Main Product Image -->
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="main-image" id="mainImage">
                    
                    <!-- Thumbnail Gallery -->
                    @if(count($product['additional_images']) > 0)
                        <div class="thumbnail-container">
                            <img src="{{ $product['image'] }}" alt="Main Image" class="thumbnail active" onclick="changeMainImage('{{ $product['image'] }}', this)">
                            @foreach($product['additional_images'] as $image)
                                <img src="{{ $image }}" alt="Product Image {{ $loop->iteration }}" class="thumbnail" onclick="changeMainImage('{{ $image }}', this)">
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            
            <!-- Product Details Section -->
            <div class="col-lg-6">
                <div class="product-details">
                    <span class="brand-tag">{{ $product['brand'] }}</span>
                    <h1>{{ $product['name'] }}</h1>
                    
                    <!-- Review Summary -->
                    <div class="review-summary">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="review-count">(4.5) • 24 reviews</span>
                    </div>
                    
                    <div class="price-section">
                        <span class="discounted-price">Rs. {{ number_format($product['dis_price'], 2) }}</span>
                        @if($product['ret_price'] > $product['dis_price'])
                            <span class="retail-price">Rs. {{ number_format($product['ret_price'], 2) }}</span>
                            <span class="save-percentage">
                                Save {{ round((($product['ret_price'] - $product['dis_price']) / $product['ret_price']) * 100) }}%
                            </span>
                        @endif
                    </div>
                    
                    <div class="mb-4">
                        <span class="stock-status {{ $product['in_stock'] ? '' : 'out-of-stock' }}">
                            <i class="fas {{ $product['in_stock'] ? 'fa-check' : 'fa-times' }} mr-1"></i>
                            {{ $product['in_stock'] ? 'In Stock' : 'Out of Stock' }}
                        </span>
                        @if($product['warranty'])
                            <span class="warranty-badge ml-3"><i class="fas fa-shield-alt mr-1"></i>{{ $product['warranty'] }}</span>
                        @endif
                    </div>
                    

                    
                    <div class="divider"></div>
                    
                    <div class="mb-4">
                        <h5>Description</h5>
                        <div class="text-muted">
                            {!! $product['desc'] !!}
                        </div>
                    </div>

                    
                    @if(count($product['features']) > 0)
                        <div class="mb-4">
                            <h5>Key Features</h5>
                            <ul class="feature-list">
                                @foreach($product['features'] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- Product Tags -->
                    @if($product['tags'])
                        <div class="product-tags">
                            @foreach(explode(',', $product['tags']) as $tag)
                                <span class="tag">{{ trim($tag) }}</span>
                            @endforeach
                        </div>
                    @endif
                    
                    <!-- Add to Cart Button -->
                    <div class="mt-4">
                        <button class="btn btn-minimal" 
                                data-bs-toggle="modal" 
                                data-bs-target="#exampleModal-Cart" 
                                onclick="addToCart({{ $product['id'] }});" 
                                {{ $product['in_stock'] ? '' : 'disabled' }}>
                            <i class="fas fa-shopping-bag mr-2"></i>
                            {{ $product['in_stock'] ? 'Add to Bag' : 'Out of Stock' }}
                        </button>
                    </div>

                    <!-- Delivery Info -->
                    <div class="mt-5">
                        <div class="delivery-info">
                            <i class="fas fa-truck"></i>
                            <div>
                                <strong>Free delivery</strong> on orders over Rs. 10,000
                            </div>
                        </div>
                        <div class="delivery-info">
                            <i class="fas fa-exchange-alt"></i>
                            <div>
                                <strong>14-day returns</strong> for unused items
                            </div>
                        </div>
                        <div class="delivery-info">
                            <i class="fas fa-credit-card"></i>
                            <div>
                                <strong>Secure checkout</strong> with multiple payment options
                            </div>
                        </div>
                        <div class="delivery-info">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Customer support</strong> available 24/7
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="product-area py-[150px] dark-blue-bg relative" 
        style="background:url(assets/images/banner/2_galaxy.jpg) no-repeat; background-position:center; background-size:cover; background-attachment: fixed; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;">
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50 z-0" style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;"></div>

        <div class="container h-100 relative z-10">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 text-center">
                    <h2 class="text-xl lg:text-4xl font-light text-white mb-2" 
                        style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">
                        Discover Our Premium Collection
                    </h2>
                    <p class="text-white text-sm" 
                    style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">
                        Explore the details, specifications, and elegance of our carefully crafted furniture piece designed to fit perfectly into your lifestyle.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Product Details Tabs Section -->
    <div class="container product-section">
        <ul class="nav nav-tabs" id="productTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab">Specifications</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care" type="button" role="tab">Care Instructions</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab">Shipping</button>
            </li>
        </ul>
        
        <div class="tab-content mt-4" id="productTabsContent">
            <div class="tab-pane fade show active" id="specifications" role="tabpanel">
                <table class="specs-table">
                    <tr>
                        <td>Product Type</td>
                        <td>{{ $product['type'] }}</td>
                    </tr>
                    <tr>
                        <td>Brand</td>
                        <td>{{ $product['brand'] }}</td>
                    </tr>
                    @if($product['warranty'])
                        <tr>
                            <td>Warranty</td>
                            <td>{{ $product['warranty'] }}</td>
                        </tr>
                    @endif
                    <tr>
                        <td>Material</td>
                        <td>Premium Quality Wood</td>
                    </tr>
                    <tr>
                        <td>Finish</td>
                        <td>Matt Lacquer Finish</td>
                    </tr>
                    <tr>
                        <td>Assembly</td>
                        <td>Assembly Required</td>
                    </tr>
                </table>
            </div>
            
            <div class="tab-pane fade" id="care" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-3">Daily Care</h6>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-2">• Use a soft, dry cloth for regular dusting</li>
                            <li class="mb-2">• Avoid direct sunlight and heat sources</li>
                            <li class="mb-2">• Keep away from moisture and humidity</li>
                            <li class="mb-2">• Use coasters for drinks and placemats for dining</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-3">Deep Cleaning</h6>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-2">• Use mild furniture cleaner when needed</li>
                            <li class="mb-2">• Always test cleaner on hidden area first</li>
                            <li class="mb-2">• Wipe with grain direction</li>
                            <li class="mb-2">• Allow to air dry completely</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="shipping" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="mb-3">Delivery Information</h6>
                        <p class="text-muted mb-3">Standard delivery within Colombo and suburbs typically takes 3-5 business days. For outer provinces, delivery may take 5-7 business days.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-2">• Free delivery on orders over Rs. 10,000</li>
                            <li class="mb-2">• Same day delivery available in Colombo</li>
                            <li class="mb-2">• White glove delivery service available</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="mb-3">Assembly Service</h6>
                        <p class="text-muted mb-3">Professional assembly service available for an additional charge. Our trained technicians will assemble your furniture at your location.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-2">• Assembly service: Rs. 2,500</li>
                            <li class="mb-2">• Includes all tools and hardware</li>
                            <li class="mb-2">• 1-year service warranty</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products Section -->
    <!-- Related Products Section -->
    @if(count($products) > 1)
        <div class="container product-section">
            <h2 class="section-title text-center mb-4">Related {{ $product['type'] }}</h2>
            <div class="row">
                @php
                    $relatedCount = 0;
                    $maxRelated = 4;
                @endphp
                
                {{-- First, try to show products of the same type --}}
                @foreach($products as $relatedProduct)
                    @if($relatedProduct['id'] != $product['id'] && 
                        strtolower($relatedProduct['type']) == strtolower($product['type']) && 
                        $relatedCount < $maxRelated)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="related-product">
                                <a href="/singleProduct?product-id={{ $relatedProduct['id'] }}" style="text-decoration:none;">
                                    <img src="{{ $relatedProduct['image'] }}" alt="{{ $relatedProduct['name'] }}">
                                    <h6 style="text-decoration:none;">{{ Str::limit($relatedProduct['name'], 40) }}</h6>
                                    <div class="price">Rs. {{ number_format($relatedProduct['dis_price'], 2) }}</div>
                                </a>
                            </div>
                        </div>
                        @php $relatedCount++; @endphp
                    @endif
                @endforeach
                
                {{-- If we don't have enough products of the same type, fill with other products --}}
                @if($relatedCount < $maxRelated)
                    @foreach($products as $relatedProduct)
                        @if($relatedProduct['id'] != $product['id'] && 
                            strtolower($relatedProduct['type']) != strtolower($product['type']) && 
                            $relatedCount < $maxRelated)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="related-product">
                                    <a href="/singleProduct?product-id={{ $relatedProduct['id'] }}" style="text-decoration:none;">
                                        <img src="{{ $relatedProduct['image'] }}" alt="{{ $relatedProduct['name'] }}">
                                        <h6 >{{ Str::limit($relatedProduct['name'], 40) }}</h6>
                                        <div class="price">Rs. {{ number_format($relatedProduct['dis_price'], 2) }}</div>
                                    </a>
                                </div>
                            </div>
                            @php $relatedCount++; @endphp
                        @endif
                    @endforeach
                @endif
                
                {{-- Show "You May Also Like" message if no products of same type found --}}
                @if($relatedCount == 0)
                    <div class="col-12 text-center">
                        <p class="text-muted">No related products available at the moment.</p>
                    </div>
                @endif
            </div>
        </div>
    @endif



    <br/><br/>

    @include('layouts.modals')
    @include('layouts.footer2')

    <script src="publicsite/js/bootstrap.bundle.min.js"></script>
    <script src="publicsite/js/tiny-slider.js"></script>
    <script src="publicsite/js/custom.js"></script>
    
    <script>
        function changeMainImage(newSrc, thumbnailElement) {
            document.getElementById('mainImage').src = newSrc;
            
            // Update active thumbnail
            document.querySelectorAll('.thumbnail').forEach(thumb => {
                thumb.classList.remove('active');
            });
            thumbnailElement.classList.add('active');
        }
        

    </script>
</body>
</html>