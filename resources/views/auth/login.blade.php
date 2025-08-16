<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NUVAST Furnitures</title>
	<link rel="shortcut icon" href="green_n.png">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333333;
            padding: 2rem;
        }

        .background-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.05;
            background-image: 
                radial-gradient(circle at 25% 25%, #3b5d50 2px, transparent 2px),
                radial-gradient(circle at 75% 75%, #3b5d50 1px, transparent 1px);
            background-size: 60px 60px, 40px 40px;
            background-position: 0 0, 30px 30px;
            z-index: 1;
        }

        .login-container {
            position: relative;
            z-index: 10;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 24px;
            width: 100%;
            max-width: 1000px;
            min-height: 600px;
            box-shadow: 
                0 20px 60px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(0, 0, 0, 0.05);
            animation: slideUp 0.8s ease-out;
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Left Side - Logo Section */
        .logo-section {
            background: linear-gradient(135deg, #3b5d50 0%, #2d4a40 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            border-radius: 24px 0 0 24px;
            position: relative;
            overflow: hidden;
        }

        .logo-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
            z-index: 1;
        }

        .logo-content {
            position: relative;
            z-index: 2;
            text-align: center;
            animation: fadeIn 1.2s ease-out 0.3s both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            width: 120px;
            height: 120px;
            border-radius: 24px;
            margin: 0 auto 2rem;
            background-color: white;
            transition: transform 0.3s ease;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo:hover {
            transform: translateY(-5px);
        }

        .company-name {
            font-size: 36px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1rem;
            letter-spacing: -1px;
        }

        .tagline {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 400;
            max-width: 250px;
            line-height: 1.5;
        }

        .decorative-line {
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, #ffffff, transparent);
            margin: 2rem 0;
        }

        /* Right Side - Form Section */
        .form-section {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            margin-bottom: 2.5rem;
        }

        .login-title {
            font-size: 32px;
            font-weight: 700;
            color: #3b5d50;
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .login-subtitle {
            color: #666666;
            font-size: 16px;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 1.8rem;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #3b5d50;
            margin-bottom: 0.8rem;
            letter-spacing: 0.3px;
            text-transform: uppercase;
        }

        .required {
            color: #ff4757;
            margin-left: 4px;
        }

        .input-wrapper {
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 18px 24px;
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid rgba(59, 93, 80, 0.3);
            border-radius: 16px;
            color: #333333;
            font-size: 16px;
            font-weight: 400;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input::placeholder {
            color: rgba(59, 93, 80, 0.5);
        }

        .form-input:focus {
            border-color: #3b5d50;
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 0 0 4px rgba(59, 93, 80, 0.1);
            transform: translateY(-2px);
        }

        .password-wrapper {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: rgba(59, 93, 80, 0.6);
            cursor: pointer;
            font-size: 20px;
            transition: all 0.3s ease;
            padding: 8px;
            border-radius: 8px;
        }

        .password-toggle:hover {
            color: #3b5d50;
            background: rgba(59, 93, 80, 0.1);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
        }

        .checkbox {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            accent-color: #3b5d50;
            cursor: pointer;
        }

        .checkbox-label {
            font-size: 14px;
            color: #666666;
            cursor: pointer;
            user-select: none;
        }

        .login-button {
            width: 100%;
            background: linear-gradient(135deg, #3b5d50 0%, #2d4a40 100%);
            color: #ffffff;
            border: none;
            padding: 20px;
            border-radius: 16px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: 0 8px 20px rgba(59, 93, 80, 0.2);
            position: relative;
            overflow: hidden;
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .login-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(59, 93, 80, 0.3);
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:active {
            transform: translateY(-1px);
        }

        .footer {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(59, 93, 80, 0.1);
        }

        .footer-text {
            color: #999999;
            font-size: 13px;
            text-align: center;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .login-container {
                grid-template-columns: 1fr;
                max-width: 400px;
                min-height: auto;
            }

            .logo-section {
                border-radius: 24px 24px 0 0;
                padding: 2rem;
            }

            .logo {
                width: 80px;
                height: 80px;
                font-size: 32px;
                margin-bottom: 1rem;
            }

            .company-name {
                font-size: 28px;
                margin-bottom: 0.5rem;
            }

            .tagline {
                font-size: 14px;
            }

            .form-section {
                padding: 2rem;
            }

            .login-title {
                font-size: 28px;
            }

            .decorative-line {
                margin: 1rem 0;
            }
        }

        /* Loading animation */
        .loading {
            position: relative;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.1), transparent);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { left: -100%; }
            100% { left: 100%; }
        }
    </style>
</head>
<body>
    <div class="background-pattern"></div>
    
    <div class="login-container">
        <!-- Left Side - Logo Section -->
        <div class="logo-section">
            <div class="logo-content">
                <div class="logo">
                    <img src="green_n.png" alt="NovaLink Logo">
                </div>
                <div class="company-name" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">NUVAST</div>
                <div class="decorative-line"></div>
                <div class="tagline">Discover furniture crafted to blend modern design with everyday comfort, creating spaces you’ll love to live in.</div>
            </div>
        </div>

        <!-- Right Side - Form Section -->
        <div class="form-section">
            <div class="login-header">
                <h1 class="login-title" style="font-family: 'Inter', sans-serif; font-weight: 300; letter-spacing: 1px;">Welcome Back</h1>
                <p class="login-subtitle">Sign in to access your account</p>
            </div>

            <form class="login-form" action="{{ asset('login') }}" method="POST" id="loginForm">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="form-label" for="email">
                        Email Address <span class="required">*</span>
                    </label>
                    <div class="input-wrapper">
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-input" 
                            placeholder="Enter your email address" 
                            required 
                            autocomplete="email"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">
                        Password <span class="required">*</span>
                    </label>
                    <div class="input-wrapper password-wrapper">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-input" 
                            placeholder="Enter your password" 
                            required 
                            autocomplete="current-password"
                        >
                        <button type="button" class="password-toggle" onclick="togglePassword()" aria-label="Toggle password visibility">
                            <span id="eyeIcon">👁</span>
                        </button>
                    </div>
                </div>


                <button type="submit" class="login-button" id="submitBtn">
                    Sign In
                </button>
            </form>

            <div class="footer">
                <p class="footer-text">2025 © All Rights Reserved | NUVAST Furniture</p>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.textContent = '👁‍🗨';
            } else {
                passwordInput.type = 'password';
                eyeIcon.textContent = '👁';
            }
        }

        // Form submission with loading state
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.classList.add('loading');
            submitBtn.textContent = 'Signing In...';
            submitBtn.disabled = true;
            
            // Remove loading state after 3 seconds (adjust as needed)
            setTimeout(() => {
                submitBtn.classList.remove('loading');
                submitBtn.textContent = 'Sign In';
                submitBtn.disabled = false;
            }, 3000);
        });

        // Enhanced input animations
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
                this.parentElement.style.transition = 'transform 0.3s ease';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

        // Entrance animation
        window.addEventListener('load', function() {
            const container = document.querySelector('.login-container');
            container.style.animation = 'slideUp 0.8s ease-out';
            
            // Stagger animation for form elements
            const formElements = document.querySelectorAll('.form-group, .form-options, .login-button');
            formElements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.animation = `fadeIn 0.6s ease-out ${0.2 + index * 0.1}s both`;
            });
        });
    </script>
</body>
</html>