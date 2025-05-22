<?php include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["product_name"];
    $price = $_POST["product_price"];
    $qty = $_POST["product_quantity"];

    $conn->query("INSERT INTO items (product_name, product_price, product_quantity)
                  VALUES ('$name', '$price', '$qty')");

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Add Item</title></head>
<body>
<div class="container mt-5">
  <h3>Add New Item</h3>
  <form method="POST">
    <input type="text" name="product_name" placeholder="Product Name" class="form-control mb-2" required>
    <input type="number" name="product_price" step="0.01" placeholder="Product Price" class="form-control mb-2" required>
    <input type="number" name="product_quantity" placeholder="Quantity" class="form-control mb-2" required>
    <button class="btn btn-success">Save</button>
    <a href="index.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>
