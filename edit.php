<?php include 'config.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM items WHERE item_id=$id");
$item = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["product_name"];
    $price = $_POST["product_price"];
    $qty = $_POST["product_quantity"];

    $conn->query("UPDATE items SET product_name='$name', product_price='$price', product_quantity='$qty' WHERE item_id=$id");

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Item</title></head>
<body>
<div class="container mt-5">
  <h3>Edit Item</h3>
  <form method="POST">
    <input type="text" name="product_name" value="<?= $item['product_name'] ?>" class="form-control mb-2" required>
    <input type="number" name="product_price" step="0.01" value="<?= $item['product_price'] ?>" class="form-control mb-2" required>
    <input type="number" name="product_quantity" value="<?= $item['product_quantity'] ?>" class="form-control mb-2" required>
    <button class="btn btn-primary">Update</button>
    <a href="index.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>
