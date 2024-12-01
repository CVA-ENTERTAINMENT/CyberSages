<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="headerstyles.css"> <!-- Include this after styles2.css -->
    <link rel="stylesheet" href="styles2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="modal.css">
</head>

<body>
    <div class="main-content">
        <div class="carousel">
            <div class="img-box">
                <div class="img-list">
                <div class="img-slider">
                    <div class="img-item active" style="--i:1;">
                        <div class="item">
                            <img src="CT5.png">
                        </div>
                    </div>
                    <div class="img-item" style="--i:2;">
                        <div class="item">
                            <img src="CT7.png">
                        </div>
                    </div>
                    <div class="img-item" style="--i:3;">
                        <div class="item">
                            <img src="CT9.png">
                        </div>
                    </div>
                    <div class="img-item" style="--i:4;">
                        <div class="item">
                            <img src="AI.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-box">
            <div class="info-item active">
                <h2>CT5</h2>
                <h2>RM200.00</h2>
                <div class="colors">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <p>Create, edit, share 4K content, and enjoy immersive entertainment experiences with these processors.</p>
                <a href="#" class="btn" onclick="openPurchaseModal('CT5', 200.00)">Buy Now</a>
            </div>

            <div class="info-item">
                <h2>CT7</h2>
                <h2>RM400.00</h2>
                <div class="colors">
                    <span></span>
                    <span  class="active"></span>
                    <span></span>
                    <span></span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero modi ex minus voluptatum consequuntur molestiae cum sunt labore nostrum?</p>
                <a href="#" class="btn" onclick="openPurchaseModal('CT7', 400.00)">Buy Now</a>
            </div>

            <div class="info-item">
                <h2>CT9</h2>
                <h2>RM600.00</h2>
                <div class="colors">
                    <span></span>
                    <span></span>
                    <span class="active"></span>
                    <span></span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero modi ex minus voluptatum consequuntur molestiae cum sunt labore nostrum?</p>
                <a href="#" class="btn" onclick="openPurchaseModal('CT9', 600.00)">Buy Now</a>
            </div>

            <div class="info-item">
                <h2>Quantum AI chip</h2>
                <h2>RM800.00</h2>
                <div class="colors">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span class="active"></span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero modi ex minus voluptatum consequuntur molestiae cum sunt labore nostrum?</p>
                <a href="#" class="btn" onclick="openPurchaseModal('Quantum AI chip', 800.00)">Buy Now</a>
            </div>
        </div>

        <div class="navigation">
            <span class="prev-btn">
                <i class="bx bx-chevron-left"></i>
            </span>
            <span class="next-btn">
                <i class="bx bx-chevron-right"></i>
            </span>
        </div>

    </div>
</div>

    <div class="modal" id="purchaseModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 id="modal-product-title"></h2>
            <p id="modal-product-price"></p>
            <div class="quantity-controls">
                <button class="qty-btn" onclick="decreaseQuantity()">-</button>
                <input type="number" id="quantity" value="1" min="1">
                <button class="qty-btn" onclick="increaseQuantity()">+</button>
            </div>
            <div class="total-price">
                Total: RM<span id="total-price">0.00</span>
            </div>
            <button class="add-to-cart-btn">Add to Cart</button>
        </div>
    </div>

    <script src="script2.js"></script>
</body>

</html>