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
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <div class="button-container">
                <a href="login.php" class="login-btn">Workers</a>
                <a href="admin" class="login-btn">Admin</a>
            </div>
        </nav>
        
    </header>
    
    <section class="hero" id="home">
        <!-- Particles -->
        <div id="particles-js"></div>
        
        <div class="content">
            <h1 class="neon-text">Welcome to the Future</h1>
            <p>Explore our amazing products.</p>
            <a href="products.php" class="cta-btn primary-btn">Shop Now</a>
            <a href="about.php" class="cta-btn primary-btn">Learn More</a>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
