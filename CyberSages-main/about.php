<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .about-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 40px 20px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .about-container:hover {
            transform: translateY(-5px);
        }

        h1 {
            color: #2c3e50;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            font-size: 2.5em;
            text-align: center;
        }

        .about-text {
            line-height: 1.8;
            color: #34495e;
            font-size: 1.1em;
            margin-bottom: 40px;
        }

        .about-image {
            max-width: 100%;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 20px;
        }

        .about-image img {
            width: 100%;
            height: auto;
            transition: transform 0.3s, filter 0.3s;
        }

        .about-image img:hover {
            transform: scale(1.1);
            filter: brightness(1.1);
        }

        @media (max-width: 768px) {
            .about-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="about-container">
        <h1>About Us</h1>
        <div class="about-text">
            <p>
                At Cybertronics, we are revolutionizing the semiconductor industry with 
                cutting-edge chipset solutions designed to power the future of technology. 
                With innovation at our core, we specialize in crafting high-performance, 
                energy-efficient chips that drive advancements in artificial intelligence, 
                telecommunications, computing, and more.
            </p>
            <p>
                Founded with a vision to bridge the gap between technology and tomorrow, 
                Cybertronics has become a trusted partner for businesses seeking robust and 
                scalable solutions. Our team of world-class engineers and researchers is 
                dedicated to pushing the boundaries of innovation, ensuring that every product 
                we deliver meets the highest standards of quality and performance.
            </p>
        </div>
        <div class="about-image">
            <!-- Replace the src with your image path -->
            <img src="about.jpg" alt="About Us Image">
        </div>
    </div>
</body>
</html>
