<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .herosec {
        font-family: 'Inter', sans-serif;
        background: #3b5d50;
        color: white;
        overflow-x: hidden;
        cursor: none;
    }

    /* Custom Cursor */
    .cursor {
        width: 20px;
        height: 20px;
        border: 2px solid rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 10000;
        transition: all 0.1s ease;
        backdrop-filter: blur(5px);
    }

    .cursor-follow {
        width: 8px;
        height: 8px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        position: fixed;
        pointer-events: none;
        z-index: 9999;
        transition: all 0.15s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .cursor.hover {
        transform: scale(2);
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.6);
    }



    /* Hero Section */
    .hero {
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        padding: 2rem;
    }

    /* 3D Background Grid */
    .bg-grid {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 20s linear infinite;
        transform-style: preserve-3d;
    }

    @keyframes gridMove {
        0% { transform: translate(0, 0) rotateX(0deg); }
        100% { transform: translate(50px, 50px) rotateX(360deg); }
    }

    /* Mouse Follower Elements */
    .mouse-follower {
        position: absolute;
        pointer-events: none;
        border-radius: 50%;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .follower-1 {
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(255,255,255,0.03) 0%, transparent 70%);
        transform: translate(-50%, -50%);
    }

    .follower-2 {
        width: 100px;
        height: 100px;
        background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%);
        transform: translate(-50%, -50%);
        animation-delay: 0.1s;
    }

    .follower-3 {
        width: 50px;
        height: 50px;
        background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%);
        transform: translate(-50%, -50%);
        animation-delay: 0.2s;
    }

    /* Hero Content */
    .hero-container {
        max-width: 1400px;
        width: 100%;
        padding: 0 2rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        position: relative;
        z-index: 10;
    }

    .hero-content {
        animation: fadeInUp 1s ease-out;
    }

    .hero-content h1 {
        font-size: clamp(2.5rem, 3vw, 3rem);
        font-weight: 200;
        letter-spacing: clamp(4px, 2vw, 12px);
        line-height: 0.9;
        margin-bottom: 2rem;
        position: relative;
    }

    .hero-content h1::after {
        content: '';
        position: absolute;
        bottom: -1rem;
        left: 0;
        width: 100px;
        height: 2px;
        background: #f9bf29;
    }

    .hero-subtitle {
        font-size: clamp(1rem, 1vw, 1rem);
        font-weight: 300;
        letter-spacing: 2px;
        margin-bottom: 3rem;
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.8;
        max-width: 500px;
    }

    .hero-actions {
        display: flex;
        gap: 1.5rem;
        margin-top: 3rem;
        flex-wrap: wrap;
    }

    .action-btn {
        padding: 0.6rem 1.2rem;
        border: 1px solid rgba(255, 255, 255, 0.3);
        background: transparent;
        color: white;
        text-decoration: none;
        font-weight: 300;
        letter-spacing: 1px;
        font-size: 0.8rem;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        overflow: hidden;
        white-space: nowrap;
    }

    .action-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        transition: left 0.4s ease;
    }

    .action-btn:hover::before {
        left: 0;
    }

    .action-btn:hover {
        transform: translateY(-2px);
        border-color: white;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .action-btn--primary {
        background: white;
        color: #3b5d50;
        border-color: white;
    }

    .action-btn--primary::before {
        background: rgba(59, 93, 80, 0.1);
    }

    /* 3D Interactive Element - Smaller Desktop Version */
    .hero-visual {
        position: relative;
        height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        perspective: 1000px;
        animation: fadeInRight 1s ease-out;
    }

    .interactive-cube {
        width: 320px;
        height: 320px;
        position: relative;
        transform-style: preserve-3d;
        animation: autoRotate 20s infinite linear;
    }

    .cube-face {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        letter-spacing: 3px;
        font-weight: 200;
        transition: all 0.3s ease;
    }

    .cube-face:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .face-front { transform: rotateY(0deg) translateZ(190px); }
    .face-back { transform: rotateY(180deg) translateZ(190px); }
    .face-right { transform: rotateY(90deg) translateZ(190px); }
    .face-left { transform: rotateY(-90deg) translateZ(190px); }
    .face-top { transform: rotateX(90deg) translateZ(190px); }
    .face-bottom { transform: rotateX(-90deg) translateZ(190px); }

    @keyframes autoRotate {
        0% { transform: rotateX(0deg) rotateY(0deg); }
        25% { transform: rotateX(90deg) rotateY(90deg); }
        50% { transform: rotateX(180deg) rotateY(180deg); }
        75% { transform: rotateX(270deg) rotateY(270deg); }
        100% { transform: rotateX(360deg) rotateY(360deg); }
    }

    /* Floating Elements */
    .floating-element {
        position: absolute;
        width: 2px;
        height: 2px;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 50%;
        animation: float 8s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
        bottom: 30%;
        left: 20%;
        animation-delay: 4s;
    }

    .floating-element:nth-child(4) {
        top: 40%;
        right: 30%;
        animation-delay: 6s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) scale(1);
            opacity: 0.6;
        }
        50% {
            transform: translateY(-30px) scale(1.5);
            opacity: 1;
        }
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 3rem;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
        opacity: 0.6;
        animation: fadeIn 2s ease-out 1s both;
    }

    .scroll-text {
        font-size: 0.7rem;
        letter-spacing: 2px;
        font-weight: 300;
        transform: rotate(-90deg);
    }

    .scroll-line {
        width: 1px;
        height: 40px;
        background: #f9bf29;
        animation: scrollPulse 2s ease-in-out infinite;
    }

    @keyframes scrollPulse {
        0%, 100% { transform: scaleY(1); opacity: 0.4; }
        50% { transform: scaleY(1.5); opacity: 1; }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(60px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(60px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 0.6; }
    }

    /* Tablet Responsive */
    @media (max-width: 992px) {
        .hero-container {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 3rem;
            padding: 0 1.5rem;
        }
        
        .hero-content h1::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .hero-subtitle {
            max-width: 100%;
            text-align: center;
            margin: 0 auto 2rem;
        }
        
        .hero-actions {
            justify-content: center;
        }
        
        .hero-visual {
            height: 500px;
        }
        
        .interactive-cube {
            width: 200px;
            height: 200px;
        }
        
        .face-front,
        .face-back,
        .face-right,
        .face-left,
        .face-top,
        .face-bottom {
            transform: translateZ(100px);
        }
    }

    /* Mobile Responsive - Hide 3D Box */
    @media (max-width: 768px) {
        body {
            cursor: auto;
        }
        
        .cursor, .cursor-follow {
            display: none;
        }
        
        .hero {
            padding: 1rem;
            height: auto;
            min-height: 100vh;
        }
        
        .hero-content h1 {
            margin-bottom: 1.5rem;
        }
        
        .hero-actions {
            margin-top: 2rem;
            gap: 1rem;
        }
        
        .action-btn {
            padding: 0.8rem 1.5rem;
            font-size: 0.8rem;
            width: 100%;
            white-space: normal;
        }
        
        .hero-visual {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .hero-container {
            padding: 0 1rem;
        }
        
        .hero-content h1 {
            letter-spacing: 2px;
        }
        
        .hero-subtitle {
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        
        .scroll-indicator {
            bottom: 1.5rem;
        }
    }

    .cube-face {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1.5rem;
    }

    .cube-face i {
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.8);
    }

    .cube-face span {
        font-size: 0.9rem;
        letter-spacing: 3px;
        font-weight: 300;
    }

    @media (max-width: 992px) {
        .interactive-cube {
            width: 200px;
            height: 200px;
        }
        
        .cube-face i {
            font-size: 2rem;
        }
    }
</style>
<div class="herosec">
    <!-- Custom Cursors -->
    <div class="cursor"></div>
    <div class="cursor-follow"></div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <!-- Background Grid -->
        <div class="bg-grid"></div>
        
        <!-- Mouse Followers -->
        <div class="mouse-follower follower-1"></div>
        <div class="mouse-follower follower-2"></div>
        <div class="mouse-follower follower-3"></div>
        
        <!-- Floating Elements -->
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        
        <div class="hero-container">
            <div class="hero-content">
                <h1>NUVAST</h1>
                <p class="hero-subtitle">Crafting exceptional furniture with precision, elegance, and timeless design philosophy for modern living spaces.</p>
                <div class="hero-actions">
                    <a href="{{ route('aboutUs') }}" class="action-btn action-btn--primary">EXPLORE</a>
                    <a href="{{ route('product.category', ['sort' => 'name_asc', 'filter' => 'ALL']) }}" class="action-btn">COLLECTION</a>
                </div>
            </div>
            
            <div class="hero-visual">
                <div class="interactive-cube" id="cube">
                    <div class="cube-face face-front">
                        <i class="fas fa-gem"></i>
                        <span>ELEGANCE</span>
                    </div>
                    <div class="cube-face face-back">
                        <i class="fas fa-award"></i>
                        <span>QUALITY</span>
                    </div>
                    <div class="cube-face face-right">
                        <i class="fas fa-pencil-ruler"></i>
                        <span>DESIGN</span>
                    </div>
                    <div class="cube-face face-left">
                        <i class="fas fa-couch"></i>
                        <span>COMFORT</span>
                    </div>
                    <div class="cube-face face-top">
                        <i class="fas fa-crown"></i>
                        <span>LUXURY</span>
                    </div>
                    <div class="cube-face face-bottom">
                        <i class="fas fa-hammer"></i>
                        <span>CRAFTED</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <span class="scroll-text">SCROLL</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <script>
        // Custom Cursor
        const cursor = document.querySelector('.cursor');
        const cursorFollow = document.querySelector('.cursor-follow');
        
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
            
            setTimeout(() => {
                cursorFollow.style.left = e.clientX + 'px';
                cursorFollow.style.top = e.clientY + 'px';
            }, 50);
        });

        // Cursor hover effects
        const hoverElements = document.querySelectorAll('a, .action-btn');
        hoverElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursor.classList.add('hover');
            });
            
            element.addEventListener('mouseleave', () => {
                cursor.classList.remove('hover');
            });
        });

        // Mouse followers
        const followers = document.querySelectorAll('.mouse-follower');
        let mouseX = 0;
        let mouseY = 0;
        
        document.addEventListener('mousemove', (e) => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });
        
        followers.forEach((follower, index) => {
            let posX = 0;
            let posY = 0;
            const speed = 0.02 + (index * 0.01);
            
            function animateFollower() {
                posX += (mouseX - posX) * speed;
                posY += (mouseY - posY) * speed;
                
                follower.style.left = posX + 'px';
                follower.style.top = posY + 'px';
                
                requestAnimationFrame(animateFollower);
            }
            
            animateFollower();
        });

        // Parallax effect for background grid
        window.addEventListener('mousemove', (e) => {
            const mouseX = (e.clientX / window.innerWidth) - 0.5;
            const mouseY = (e.clientY / window.innerHeight) - 0.5;
            
            const bgGrid = document.querySelector('.bg-grid');
            bgGrid.style.transform = `translate(${mouseX * 20}px, ${mouseY * 20}px)`;
        });
    </script>
</div>