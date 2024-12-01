<?php
// Update database connection to use loginsystem database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Add item to cart
function addToCart($product_name, $price, $quantity) {
    global $conn;
    $total_price = $price * $quantity;
    
    $sql = "INSERT INTO cart_items (product_name, price, quantity, total_price) 
            VALUES (:product_name, :price, :quantity, :total_price)";
    
    $stmt = $conn->prepare($sql);
    return $stmt->execute([
        ':product_name' => $product_name,
        ':price' => $price,
        ':quantity' => $quantity,
        ':total_price' => $total_price
    ]);
}

// Get all cart items
function getCartItems() {
    global $conn;
    $sql = "SELECT * FROM cart_items ORDER BY created_at DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Remove item from cart
function removeCartItem($id) {
    global $conn;
    $sql = "DELETE FROM cart_items WHERE id = :id";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([':id' => $id]);
}

// Update item quantity
function updateCartQuantity($id, $quantity, $price) {
    global $conn;
    $total_price = $price * $quantity;
    
    $sql = "UPDATE cart_items 
            SET quantity = :quantity, total_price = :total_price 
            WHERE id = :id";
            
    $stmt = $conn->prepare($sql);
    return $stmt->execute([
        ':id' => $id,
        ':quantity' => $quantity,
        ':total_price' => $total_price
    ]);
}
?>
