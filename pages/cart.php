<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_POST) {
    $_SESSION['cart'][] = $_POST['id'];
}

print_r($_SESSION['cart']);