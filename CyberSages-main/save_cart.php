<?php
require_once 'cart_functions.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get JSON data from POST request
$json = file_get_contents('php://input');
$data = json_decode($json, true);

$success = true;
$error_message = '';

try {
    if (isset($data['items']) && is_array($data['items'])) {
        foreach ($data['items'] as $item) {
            $result = addToCart(
                $item['productName'],
                floatval($item['price']),
                intval($item['quantity'])
            );
            
            if (!$result) {
                throw new Exception("Failed to add item to cart");
            }
        }
    } else {
        throw new Exception("No items received");
    }
} catch (Exception $e) {
    $success = false;
    $error_message = $e->getMessage();
}

echo json_encode([
    'success' => $success,
    'error' => $error_message
]);
?> 