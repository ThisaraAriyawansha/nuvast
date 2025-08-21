<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Loading - Nuvast Furniture</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #fefefe 0%, #f8f9fa 100%);
            color: #3b5d50;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            overflow: hidden;
            user-select: none;
            position: relative;
        }
        
        /* Subtle background pattern */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: radial-gradient(circle at 25% 25%, rgba(59, 93, 80, 0.02) 0%, transparent 50%),
                              radial-gradient(circle at 75% 75%, rgba(59, 93, 80, 0.015) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
        }
        
        .progress-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 1;
            transition: all 1.2s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .brand-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }
        
        .progress-ring {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 1.5px solid rgba(59, 93, 80, 0.08);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .progress-fill {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 1.5px solid transparent;
            border-top-color: #3b5d50;
            animation: spin 2s cubic-bezier(0.4, 0.0, 0.2, 1) infinite;
        }
        
        .progress-center {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3b5d50 0%, #4a7c59 100%);
            opacity: 0.4;
            animation: pulse 3s ease-in-out infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes pulse {
            0%, 100% { 
                opacity: 0.4; 
                transform: scale(1); 
            }
            50% { 
                opacity: 0.8; 
                transform: scale(1.1); 
            }
        }
        
        .brand-text {
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 200;
            letter-spacing: clamp(4px, 1.2vw, 10px);
            color: #3b5d50;
            opacity: 0;
            transform: translateY(0px);
            transition: all 2s cubic-bezier(0.16, 1, 0.3, 1);
            text-align: center;
            margin-bottom: 12px;
        }
        
        .brand-text.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .subtitle {
            font-size: clamp(0.75rem, 2vw, 1.1rem);
            font-weight: 300;
            letter-spacing: clamp(1px, 0.4vw, 4px);
            color: #7f8c8d;
            opacity: 0;
            text-transform: uppercase;
            transition: all 2s cubic-bezier(0.16, 1, 0.3, 1) 0.3s;
            text-align: center;
            position: relative;
        }
        
        .subtitle.show {
            opacity: 0.7;
        }
        
        .subtitle::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, #3b5d50 50%, transparent 100%);
            transition: width 1.5s ease 1.2s;
        }
        
        .subtitle.show::after {
            width: 100px;
        }
        
        .progress-container.hide {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.7);
        }
        
        /* Floating particles for calm ambiance */
        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background: rgba(59, 93, 80, 0.1);
            border-radius: 50%;
            animation: float 8s infinite ease-in-out;
        }
        
        .particle:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .particle:nth-child(2) {
            top: 70%;
            left: 80%;
            animation-delay: 2s;
        }
        
        .particle:nth-child(3) {
            top: 40%;
            left: 20%;
            animation-delay: 4s;
        }
        
        .particle:nth-child(4) {
            top: 60%;
            left: 70%;
            animation-delay: 6s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) translateX(0px);
                opacity: 0.3;
            }
            25% {
                transform: translateY(-20px) translateX(10px);
                opacity: 0.6;
            }
            50% {
                transform: translateY(-10px) translateX(-5px);
                opacity: 0.8;
            }
            75% {
                transform: translateY(-30px) translateX(15px);
                opacity: 0.4;
            }
        }
        
        @media (max-width: 768px) {
            .progress-ring {
                width: 60px;
                height: 60px;
            }
            
            .progress-center {
                width: 6px;
                height: 6px;
            }
            
            .loading-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating particles -->
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    
    <div class="loading-container">
        <div class="progress-container" id="progressContainer">
            <div class="progress-ring">
                <div class="progress-fill"></div>
                <div class="progress-center"></div>
            </div>
        </div>
        
        <div class="brand-container" id="brandContainer">
            <div class="brand-text" id="brandText">NUVAST</div>
            <div class="subtitle" id="subtitle">Furniture</div>
        </div>
    </div>
    
    <script>
        const progressContainer = document.getElementById('progressContainer');
        const brandText = document.getElementById('brandText');
        const subtitle = document.getElementById('subtitle');
        
        // Show brand name after 3.2 seconds
        setTimeout(() => {
            // Hide progress indicator with smooth fade
            progressContainer.classList.add('hide');
            
            // Show brand text and subtitle with gentle fade-in
            setTimeout(() => {
                brandText.classList.add('show');
                setTimeout(() => {
                    subtitle.classList.add('show');
                }, 200);
            }, 600);
            
            // Redirect after showing brand (uncomment when ready to use)
            setTimeout(() => {
               window.location.href = "{{ route('home') }}";
             }, 3500);
            
        }, 3200);
    </script>
</body>
</html>