<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Website</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;600&family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <h1 class="logo">CyberTronics®</h1>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <div class="button-container">
                <a href="login.php" class="login-btn">Login</a>
                <a href="signup.php" class="login-btn">Sign Up</a> 
            </div>
        </nav>
        
    </header>
    
    <section class="hero" id="home">
        <!-- Particles -->
        <div id="particles-js"></div>
        
        <div class="content">
            <h1 class="neon-text">Welcome to the Future</h1>
            <p>Explore our amazing products.</p>
            <a href="#products" class="cta-btn primary-btn">Shop Now</a>
            <a href="#about" class="cta-btn secondary-btn">Learn More</a>
        </div>
    </section>

    <section id="products">
        <h2>Our Products</h2>
        <div id="parallax-container">
            <div class="product-card">
                <img src="i5.png" alt="Core™ i5 Processors">
                <h3>CyberTronics® Core™ i5 Processors</h3>
                <p>Experience exceptional performance for home and business PCs with up to 14 cores for gaming, creativity, and multitasking.</p>
                <a href="https://www.intel.com/content/www/us/en/products/details/processors/core/i5.html" class="product-btn">Buy Now</a>
            </div>
            <div class="product-card">
                <img src="i7.png" alt="Core™ i7 Processors">
                <h3>CyberTronics® Core™ i7 Processors</h3>
                <p>This CPU packs the power of up to 20 cores for accelerated computing supporting high-end gaming, connectivity, and security.</p>
                <a href="https://www.intel.com/content/www/us/en/products/details/processors/core/i7.html" class="product-btn">Buy Now</a>
            </div>
            <div class="product-card">
                <img src="i9.png" alt="i9 Processors">
                <h3>CyberTronics® Core™ i9 Processors</h3>
                <p>Delivering up to 24 cores for seamless 4K Ultra HD and 360-degree video, robust gameplay, and multitasking performance.</p>
                <a href="https://www.intel.com/content/www/us/en/products/details/processors/core/i9.html" class="product-btn">Buy Now</a>
            </div>
            
            <!-- New Product Card -->
            <div class="product-card">
                <img src="ai.png" alt="CyberTronics® New AI Chip">
                <h3>CyberTronics® AI Quantum Chip</h3>
                <p>Our most advanced AI processor with quantum performance, built for next-generation computing and deep learning applications.</p>
                <a href="https://www.intel.com/content/www/us/en/products/details/processors/core-ultra.html" class="product-btn">Discover More</a>
            </div>
        </div>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <div class="about-content">
            <p>At CyberTronics®, we are dedicated to pushing the boundaries of technology. Our mission is to innovate and deliver cutting-edge solutions that empower individuals and businesses to achieve more.</p>
            <p>Founded in 2023, we have quickly established ourselves as leaders in the tech industry, known for our commitment to quality and customer satisfaction.</p>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
