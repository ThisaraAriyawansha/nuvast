<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Loading - Nuvast Furniture</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #ffffff 0%, #f9f9f9 100%);
            color: #3b5d50;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Inter', sans-serif;
            overflow: hidden;
            user-select: none;
        }
        
        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .dots-container {
            display: flex;
            gap: clamp(8px, 2vw, 16px);
            margin-bottom: 40px;
            opacity: 1;
            transition: opacity 0.8s ease;
            justify-content: center;
            align-items: center;
        }
        
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #3b5d50;
            opacity: 0.2;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .dot.active {
            opacity: 1;
            transform: scale(1.3);
            box-shadow: 0 0 15px rgba(59, 93, 80, 0.3);
        }
        
        .brand-text {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 300;
            letter-spacing: clamp(2px, 0.5vw, 4px);
            color: #3b5d50;
            opacity: 0;
            transform: translateY(20px);
            transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1);
            text-align: center;
        }
        
        .brand-text.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .subtitle {
            font-size: clamp(0.7rem, 2vw, 1rem);
            font-weight: 400;
            letter-spacing: clamp(1px, 0.2vw, 2px);
            color: #3b5d50;
            opacity: 0;
            margin-top: 8px;
            text-transform: uppercase;
            transition: all 1.2s cubic-bezier(0.165, 0.84, 0.44, 1) 0.3s;
            text-align: center;
        }
        
        .subtitle.show {
            opacity: 0.7;
        }
        
        .dots-container.hide {
            opacity: 0;
            transform: translateY(-10px);
        }
        
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
    </style>
</head>
<body>
    <div class="loading-container">
        <div class="dots-container" id="dotsContainer">
            <div class="dot" id="dot1"></div>
            <div class="dot" id="dot2"></div>
            <div class="dot" id="dot3"></div>
            <div class="dot" id="dot4"></div>
            <div class="dot" id="dot5"></div>
        </div>
        
        <div class="brand-text" id="brandText">NUVAST</div>
        <div class="subtitle" id="subtitle">Furniture</div>
    </div>
    
    <script>
        const dots = document.querySelectorAll('.dot');
        const dotsContainer = document.getElementById('dotsContainer');
        const brandText = document.getElementById('brandText');
        const subtitle = document.getElementById('subtitle');
        
        let currentDot = 0;
        let dotInterval;
        
        function animateDots() {
            // Reset all dots
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Activate current dot
            dots[currentDot].classList.add('active');
            
            // Move to next dot
            currentDot = (currentDot + 1) % dots.length;
        }
        
        // Start dot animation
        dotInterval = setInterval(animateDots, 500);
        
        // Show brand name after 2.5 seconds
        setTimeout(() => {
            // Stop dot animation and hide dots
            clearInterval(dotInterval);
            dotsContainer.classList.add('hide');
            
            // Show brand text and subtitle
            setTimeout(() => {
                brandText.classList.add('show');
                subtitle.classList.add('show');
            }, 400);
            
            // Redirect after showing brand (uncomment when ready to use)
            setTimeout(() => {
                window.location.href = "{{ route('home') }}";
            }, 2600);
            
        }, 3000);
    </script>
</body>
</html>