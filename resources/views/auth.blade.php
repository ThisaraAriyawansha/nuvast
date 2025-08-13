<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />
		<title>NUVAST Furnitures</title>
    <meta name="description" content="NovaLink Computers offer the best computers available at the market">
  <link rel="shortcut icon" href="green_n.png">
    <!-- CSS -->
    <script src="assets/js/tailwind-cdn.js"></script>

      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js"></script>



		<link href="publicsite/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="publicsite/css/tiny-slider.css" rel="stylesheet">
		<link href="publicsite/css/style.css" rel="stylesheet">
		<title>NUVAST Furnitures</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>



    <style>
        :root {
            --primary: #3b5d50;
            --primary-dark: #3b5d50;
        }
        body {
            font-family: 'Orbitron', sans-serif;
            background-color: #f8fafc;
        }
        .auth-container {
            max-width: 1200px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
        }
        .auth-image {
            background: url('assets/images/auth/photo-1695457264650-c0bd2202fb5e.jpeg');
            background-size: cover;
            background-position: center;
        }

        
        .auth-tabs {
            border-bottom: 2px solid #e2e8f0;
        }
        .auth-tab {
            padding: 1rem 2rem;
            transition: all 0.3s ease;
            position: relative;
        }
        .auth-tab.active {
            color: var(--primary);
            font-weight: 600;
        }
        .auth-tab.active:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary);
        }
        .form-input {
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            padding: 0.75rem 1rem;
        }
        .form-input:focus {
            border-color: #3b5d50;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        .btn-primary {
            background: var(--primary);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }
        @media (max-width: 1023px) {
            .auth-image {
                height: 200px;
            }
        }
    </style>
</head>

<body>
@include('layouts.nav-2')

    <div class="h-[1dvh]"></div>

        <nav style="display: flex; align-items: center; padding: 1px 4px;    max-width: 1200px; margin: 10px auto;" aria-label="Breadcrumb">
            <ol style="display: inline-flex; align-items: center; margin: 0; padding: 0; list-style: none; flex-wrap: wrap;">
                <li style="display: inline-flex; align-items: center;">
                    <a href="/home" style="display: inline-flex; align-items: center; font-size: 14px; font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px; color: #4b5563; text-decoration: none; transition: color 0.3s ease, transform 0.2s ease; padding: 6px 10px; border-radius: 6px;">
                        <svg style="width: 18px; height: 18px; margin-right: 8px; fill: none; stroke: #6b7280; stroke-width: 2;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Home
                    </a>
                </li>

                <li style="display: flex; align-items: center; margin: 0 6px;" aria-current="page">
                    <svg style="width: 16px; height: 16px; color: #9ca3af; fill: none; stroke: currentColor; stroke-width: 2;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span style="margin-left: 8px; font-size: 14px; font-weight: 600; color: #374151; padding: 6px 10px; border-radius: 6px; font-family: 'Inter', sans-serif; letter-spacing: 1px;">Login</span>
                </li>
            </ol>
        </nav>


<div class="min-h-[calc(100vh-12dvh)] flex items-center justify-center p-2 -mt-6">
    <div class="auth-container bg-white w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <!-- Left Side - Image -->
            <div class="auth-image hidden lg:flex flex-col justify-between p-10 text-white">
                <div>
                    <h2 class="text-3xl font-bold mb-4 text-white" style="font-family: 'Inter', sans-serif; font-weight: 400; letter-spacing: 1px;">NUVAST Furnitures</h2>
                    <p class="text-lg text-white" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">
                        Elegant and modern furniture crafted for comfort and style
                    </p>
                </div>
                <div class="flex space-x-6">
                    <div>
                        <div class="w-12 h-12 bg-[#3b5d50] bg-opacity-20 rounded-full flex items-center justify-center mb-2">
                            <i class="fas fa-couch text-xl"></i> <!-- Sofa Icon -->
                        </div>
                        <p  class="text-white" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Stylish Designs</p>
                    </div>
                    <div>
                        <div class="w-12 h-12 bg-[#3b5d50] bg-opacity-20 rounded-full flex items-center justify-center mb-2">
                            <i class="fas fa-tree text-xl"></i> <!-- Wooden/eco-friendly Icon -->
                        </div>
                        <p class="text-white" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Quality Craftsmanship</p>
                    </div>
                </div>
            </div>


            <!-- Right Side - Form -->
            <div class="p-8 lg:p-12">
                <div x-data="{ tab: 'login' }">
                    <!-- Tab buttons -->
                    <div class="auth-tabs flex mb-8">
                        <button @click="tab = 'login'"  style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;"
                                :class="tab === 'login' ? 'active' : 'text-gray-500 hover:text-gray-700'"
                                class="auth-tab">
                            Login
                        </button>
                        <button @click="tab = 'register'"  style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;"
                                :class="tab === 'register' ? 'active' : 'text-gray-500 hover:text-gray-700'"
                                class="auth-tab">
                            Register
                        </button>
                    </div>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="p-4 mb-6 bg-green-100 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Login Form -->
                    <div x-show="tab === 'login'" x-transition>
                        <h3 class="text-2xl font-bold mb-6 text-gray-800" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Welcome Back</h3>
                        @if(session('customer_id'))
                            <script>window.location.href = "{{ route('customer.dashboard') }}";</script>
                        @else
                            <form action="{{ url('/loginCustomer') }}" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">Email</label>
                                    <input type="text" name="email" placeholder="Email" required style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;"
                                           class="form-input w-full rounded-lg">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">Password</label>
                                    <input type="password" name="user-password" placeholder="Password" required style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;"
                                           class="form-input w-full rounded-lg">
                                </div>
                                
                                <button type="submit" 
                                        class="btn-primary w-full text-white py-3 px-4 rounded-lg font-medium mt-4 bg-[#3b5d50]" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">
                                    LOGIN
                                </button>
                            </form>
                        @endif
                    </div>

                    <!-- Register Form -->
                    <div x-show="tab === 'register'" x-transition>
                        <h3 class="text-2xl font-bold mb-6 text-gray-800" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Create Account</h3>
                        <form action="{{ route('customer.register') }}" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">Username</label>
                                <input type="text" name="user-name" placeholder="Username" value="{{ old('user-name') }}" required style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;"
                                       class="form-input w-full rounded-lg">
                                @error('user-name') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">First Name</label>
                                    <input type="text" name="fname" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;" placeholder="First Name" value="{{ old('fname') }}" required 
                                           class="form-input w-full rounded-lg">
                                    @error('fname') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">Last Name</label>
                                    <input type="text" name="lname" placeholder="Last Name" value="{{ old('lname') }}" required style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;"
                                           class="form-input w-full rounded-lg">
                                    @error('lname') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">Phone</label>
                                <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" required style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;"
                                       class="form-input w-full rounded-lg">
                                @error('phone') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">Password</label>
                                <input type="password" name="user-password" placeholder="Password" required style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;"
                                       class="form-input w-full rounded-lg">
                                @error('user-password') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">Email</label>
                                <input type="email" name="user-email" placeholder="Email" value="{{ old('user-email') }}" required style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;"
                                       class="form-input w-full rounded-lg">
                                @error('user-email') <div class="text-red-500 text-sm mt-1">{{ $message }}</div> @enderror
                            </div>
                            <button type="submit" 
                                    class="btn-primary w-full text-white py-3 px-4 rounded-lg font-medium mt-4 bg-[#3b5d50]" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">
                                REGISTER
                            </button>
                        </form>
                            <div class="mt-6 text-center text-sm text-gray-600" style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">
                                By registering, you agree to our
                                <a href="#" class="font-medium text-blue-600 hover:text-blue-500" 
                                style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; text-decoration: none;">
                                Terms of Service
                                </a>
                                and
                                <a href="#" class="font-medium text-blue-600 hover:text-blue-500" 
                                style="font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif; text-decoration: none;">
                                Privacy Policy
                                </a>.
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/><br/><br/>

@include('layouts.footer2')

<!-- Scripts -->
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="assets/js/plugins/jquery.countdown.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/scrollUp.js"></script>
<script src="assets/js/plugins/venobox.min.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
<script src="assets/js/plugins/mailchimp-ajax.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>