<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="green_n.png">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link href="publicsite/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="publicsite/css/tiny-slider.css" rel="stylesheet">
  <link href="publicsite/css/style.css" rel="stylesheet">
  
  <title>NUVAST Furnitures - Blog</title>
  
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



    :root {
      --primary-color: #2c3e50;
      --secondary-color: #34495e;
      --accent-color: #3498db;
      --text-color: #333;
      --light-gray: #f8f9fa;
      --medium-gray: #e9ecef;
      --dark-gray: #6c757d;
      --white: #ffffff;
    }
    
    body {
      font-family: 'Inter', sans-serif;
      color: var(--text-color);
      line-height: 1.6;
    }
    
    /* Blog Section Enhancements */
    .blog-section {
      padding: 5rem 0;
      background-color: var(--light-gray);
    }
    
    .blog-section .container {
      max-width: 1200px;
    }
    
    .post-entry {
      background: var(--white);
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
    }
    
    .post-entry:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .post-thumbnail {
      display: block;
      position: relative;
      overflow: hidden;
    }
    
    .post-thumbnail img {
      transition: transform 0.5s ease;
    }
    
    .post-entry:hover .post-thumbnail img {
      transform: scale(1.03);
    }
    
    .post-content-entry {
      padding: 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
    
    .post-content-entry h3 a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }
    
    .post-content-entry h3 a:hover {
      color: var(--accent-color);
    }
    
    .meta {
      font-size: 0.85rem;
      color: var(--dark-gray);
      margin-bottom: 1rem;
    }
    
    .meta a {
      color: var(--dark-gray);
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .meta a:hover {
      color: var(--accent-color);
    }
    
    .blog-description {
      color: var(--secondary-color);
      font-size: 0.95rem;
      margin-bottom: 1.5rem;
      flex-grow: 1;
    }
    
    .blog-tags {
      margin-top: auto;
      padding-top: 1rem;
      border-top: 1px solid var(--medium-gray);
    }
    
    .tags-label {
      font-size: 0.8rem;
      color: var(--dark-gray);
      margin-right: 0.5rem;
    }
    
    .tag-list {
      display: inline-flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .tag-item {
      margin-right: 0.5rem;
    }
    
    .tag-item a {
      display: inline-block;
      padding: 0.25rem 0.5rem;
      background-color: var(--light-gray);
      color: var(--secondary-color);
      border-radius: 4px;
      font-size: 0.75rem;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .tag-item a:hover {
      background-color: var(--accent-color);
      color: var(--white);
    }
    
    .no-posts {
      text-align: center;
      padding: 3rem;
      width: 100%;
    }
    
    .no-posts-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
      opacity: 0.7;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .blog-section {
        padding: 3rem 0;
      }
      
      .post-entry {
        margin-bottom: 2rem;
      }
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
</head>

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
            <h1 style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Blog</h1>
            <p class="mb-4">Insights, trends, and design inspiration from the world of modern living.</p>
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
            <img src="publicsite/images/FloydSofaBed1.png " class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header/Navigation -->

  <!-- Start Blog Section -->
  <div class="blog-section">
    <div class="container">
      <div class="row">
        @forelse ($blogs as $blog)
        <div class="col-12 col-sm-6 col-md-4 mb-5">
          <div class="post-entry h-100 d-flex flex-column">
            <a href="{{ route('blog.show')}}" class="post-thumbnail">
              <div class="image-container" style="height: 250px; overflow: hidden;">
                <img src="{{ $blog['image'] }}" alt="{{ $blog['title'] }}" 
                  class="img-fluid w-100 h-100 object-fit-cover">
              </div>
            </a>
            <div class="post-content-entry flex-grow-1 p-4 d-flex flex-column">
              <h3 class="mb-3" style="font-size: 1.25rem; font-weight: 600;">
                <a href="{{ route('blog.show')}}">{{ $blog['title'] }}</a>
              </h3>
              <div class="meta mb-3">
                <span class="text-muted" style="font-size: 0.85rem;">
                  by <a href="{{ route('blog.show')}}">Admin</a> on <a href="#">{{ $blog['date'] }}</a>
                </span>
              </div>
              <p class="blog-description">
                {{ Str::limit($blog['description'], 150, '...') }}
              </p>
              <div class="blog-tags">
                <span class="tags-label">Tags:</span>
                <ul class="tag-list">
                  @foreach ($blog['tag'] as $tag)
                    <li class="tag-item"><a href="#">{{ $tag }}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        @empty
          <div class="col-12">
            <div class="no-posts">
              <div class="no-posts-icon">📝</div>
              <p>No blog posts available at the moment.</p>
            </div>
          </div>
        @endforelse
      </div>
    </div>
  </div>
  <!-- End Blog Section -->  

  <!-- Start Footer Section -->
  @include('layouts.footer2')
  <!-- End Footer Section -->  

  <script src="publicsite/js/bootstrap.bundle.min.js"></script>
  <script src="publicsite/js/tiny-slider.js"></script>
  <script src="publicsite/js/custom.js"></script>
</body>
</html>