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
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            background-color: white;
            line-height: 1.5;
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
        }
        
        .thumbnail:hover {
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
                </div>
            </div>
        </div>
    </div>
    <br/><br/><br/><br/>

    @include('layouts.modals')
    @include('layouts.footer2')

    <script src="publicsite/js/bootstrap.bundle.min.js"></script>
    <script src="publicsite/js/tiny-slider.js"></script>
    <script src="publicsite/js/custom.js"></script>
    
    <script>
        function changeMainImage(newSrc) {
            document.getElementById('mainImage').src = newSrc;
        }
    </script>
</body>
</html>