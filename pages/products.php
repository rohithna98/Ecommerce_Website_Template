<?php
include 'includes/db.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
$stmt->execute([$id]);
$p = $stmt->fetch();
?>

<h2><?= $p['name'] ?></h2>
<p><?= $p['description'] ?></p>
<p>₹<?= $p['price'] ?></p>

<form method="POST" action="cart.php">
<input type="hidden" name="id" value="<?= $p['id'] ?>">
<button>Add to Cart</button>
</form>