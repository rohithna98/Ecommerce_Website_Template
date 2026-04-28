<?php
include '../includes/db.php';

if ($_POST) {
    $stmt = $conn->prepare("INSERT INTO products (name,price,description) VALUES (?,?,?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['price'],
        $_POST['desc']
    ]);
}
?>

<form method="POST">
<input name="name" placeholder="Name">
<input name="price">
<textarea name="desc"></textarea>
<button>Add</button>
</form>