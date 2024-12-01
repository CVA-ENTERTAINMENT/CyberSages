<?php include('header.php'); ?>
<?php require_once 'cart_functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="headerstyles.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="cart-styles.css">
</head>
<body>
    <div class="cart-container">
        <h1>Shopping Cart</h1>
        <div id="cart-items">
            <div class="cart-item cart-header">
                <div>Product</div>
                <div>Price</div>
                <div>Quantity</div>
                <div>Total</div>
                <div></div>
            </div>
            <!-- Cart items will be inserted here by JavaScript -->
        </div>
        <div class="cart-total">
            Total: RM<span id="cart-total-amount">0.00</span>
        </div>
        <a href="#" class="checkout-btn" onclick="proceedToCheckout()">Proceed to Checkout</a>
    </div>

    <script>
        function displayCart() {
            const cartContainer = document.getElementById('cart-items');
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const headerRow = cartContainer.querySelector('.cart-header');
            
            // Clear previous items but keep the header
            cartContainer.innerHTML = '';
            cartContainer.appendChild(headerRow);

            if (cart.length === 0) {
                const emptyMessage = document.createElement('div');
                emptyMessage.className = 'empty-cart';
                emptyMessage.textContent = 'Your cart is empty';
                cartContainer.appendChild(emptyMessage);
                document.getElementById('cart-total-amount').textContent = '0.00';
                return;
            }

            let totalAmount = 0;

            cart.forEach((item, index) => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <div>${item.productName}</div>
                    <div>RM${item.price.toFixed(2)}</div>
                    <div>${item.quantity}</div>
                    <div>RM${item.total.toFixed(2)}</div>
                    <div>
                        <button onclick="removeFromCart(${index})">Remove</button>
                    </div>
                `;
                cartContainer.appendChild(cartItem);
                totalAmount += item.total;
            });

            document.getElementById('cart-total-amount').textContent = totalAmount.toFixed(2);
        }

        function removeFromCart(index) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            displayCart();
        }

        function proceedToCheckout() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert('Your cart is empty!');
                return;
            }

            // Send cart data to PHP endpoint
            fetch('save_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ items: cart })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Order placed successfully!');
                    localStorage.removeItem('cart'); // Clear the cart
                    displayCart(); // Refresh the display
                } else {
                    alert('Error placing order. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error placing order. Please try again.');
            });
        }

        // Display cart when page loads
        document.addEventListener('DOMContentLoaded', displayCart);
    </script>
</body>
</html> 