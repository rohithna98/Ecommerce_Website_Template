<?php
session_start();
include 'includes/db.php';

$total = count($_SESSION['cart']) * 100; // dummy price

$stmt = $conn->prepare("INSERT INTO orders (user_id,total) VALUES (?,?)");
$stmt->execute([$_SESSION['user']['id'], $total]);

echo "Order placed! Total ₹$total";