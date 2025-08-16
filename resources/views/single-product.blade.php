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
            --primary: #3b5d50;
            --accent: #f9bf29;
            --light-bg: #f8f9fa;
            --text-dark: #2d3748;
            --text-light: #718096;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            background-color: white;
            line-height: 1.6;
        }
        
        .product-gallery {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .main-image {
            width: 100%;
            height: 500px;
            object-fit: contain;
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .thumbnail-container {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        
        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
            cursor: pointer;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .thumbnail:hover {
            border-color: var(--primary);
            transform: scale(1.05);
        }
        
        .product-details {
            padding: 30px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .price-section {
            margin: 24px 0;
        }
        
        .discounted-price {
            font-size: 28px;
            font-weight: 600;
            color: var(--primary);
        }
        
        .retail-price {
            font-size: 18px;
            text-decoration: line-through;
            color: var(--text-light);
            margin-left: 10px;
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
            font-weight: 600;
            color: var(--primary);
            padding: 6px 12px;
            background-color: rgba(59, 93, 80, 0.1);
            border-radius: 20px;
            display: inline-block;
        }
        
        .out-of-stock {
            color: #e53e3e;
            background-color: rgba(229, 62, 62, 0.1);
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 12px 24px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #2d473d;
            border-color: #2d473d;
            transform: translateY(-2px);
        }
        
        .breadcrumb-item a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .breadcrumb-item a:hover {
            color: var(--primary);
        }
        
        .breadcrumb-item.active {
            color: var(--primary);
            font-weight: 500;
        }
        
        h1 {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 16px;
        }
        
        h5 {
            font-weight: 500;
            color: var(--primary);
            margin-bottom: 12px;
        }
        
        .brand-tag {
            display: inline-block;
            padding: 4px 12px;
            background-color: rgba(249, 191, 41, 0.2);
            color: #b7791f;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 16px;
        }
        
        .divider {
            height: 1px;
            background-color: #edf2f7;
            margin: 24px 0;
        }
        
        .warranty-badge {
            display: inline-block;
            padding: 6px 12px;
            background-color: rgba(249, 191, 41, 0.2);
            color: #b7791f;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
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
    <div class="container py-5">
        <div class="row">
            <!-- Product Images Section -->
            <div class="col-lg-6">
                <div class="product-gallery">
                    <!-- Main Product Image -->
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="main-image" id="mainImage">
                    
                    <!-- Thumbnail Gallery -->
                    @if(count($product['additional_images']) > 0)
                        <div class="thumbnail-container">
                            @foreach($product['additional_images'] as $image)
                                <img src="{{ $image }}" alt="Product Image {{ $loop->iteration }}" class="thumbnail" onclick="changeMainImage('{{ $image }}')">
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
                    
                    <div class="price-section">
                        <span class="discounted-price">Rs. {{ number_format($product['dis_price'], 2) }}</span>
                        @if($product['ret_price'] > $product['dis_price'])
                            <span class="retail-price">Rs. {{ number_format($product['ret_price'], 2) }}</span>
                        @endif
                    </div>
                    
                    <div class="mb-4">
                        <span class="stock-status {{ $product['in_stock'] ? '' : 'out-of-stock' }}">
                            <i class="fas {{ $product['in_stock'] ? 'fa-check-circle' : 'fa-times-circle' }} mr-2"></i>
                            {{ $product['in_stock'] ? 'In Stock' : 'Out of Stock' }}
                        </span>
                        @if($product['warranty'])
                            <span class="warranty-badge ml-3"><i class="fas fa-shield-alt mr-2"></i>{{ $product['warranty'] }}</span>
                        @endif
                    </div>
                    
                    <div class="divider"></div>
                    
                    <div class="mb-4">
                        <h5>Description</h5>
                        <p class="text-muted">{{ $product['desc'] }}</p>
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
                    
                    <!-- Add to Cart Button -->
                    <div class="mt-5">
                        <button class="btn btn-primary btn-lg px-5 py-3" 									data-bs-toggle="modal" 
									data-bs-target="#exampleModal-Cart" 
									onclick="addToCart({{ $product['id'] }});" {{ $product['in_stock'] ? '' : 'disabled' }}>
                            <i class="fas fa-shopping-cart mr-2"></i>
                            {{ $product['in_stock'] ? 'Add to Cart' : 'Out of Stock' }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.modals')
    @include('layouts.footer2')

    <script src="publicsite/js/bootstrap.bundle.min.js"></script>
    <script src="publicsite/js/tiny-slider.js"></script>
    <script src="publicsite/js/custom.js"></script>
    
    <script>
        function changeMainImage(newSrc) {
            document.getElementById('mainImage').src = newSrc;
            
            // Add animation effect
            const mainImage = document.getElementById('mainImage');
            mainImage.classList.add('animate__animated', 'animate__fadeIn');
            setTimeout(() => {
                mainImage.classList.remove('animate__animated', 'animate__fadeIn');
            }, 500);
        }
    </script>
</body>
</html>