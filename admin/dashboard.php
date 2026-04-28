<?php
session_start();
if ($_SESSION['user']['role'] != 'admin') {
    die("Access denied");
}
?>

<h1>Admin Dashboard</h1>
<a href="add_product.php">Add Product</a>