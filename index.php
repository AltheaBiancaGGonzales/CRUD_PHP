<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Item Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Item Management</h3>
  <a href="add.php" class="btn btn-success mb-3">+ Add Item</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th><th>Name</th><th>Price</th><th>Quantity</th><th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM items");
      while ($row = $result->fetch_assoc()):
      ?>
        <tr>
          <td><?= $row['item_id'] ?></td>
          <td><?= $row['product_name'] ?></td>
          <td><?= number_format($row['product_price'], 2) ?></td>
          <td><?= $row['product_quantity'] ?></td>
          <td>
            <a href="edit.php?id=<?= $row['item_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
            <a href="delete.php?id=<?= $row['item_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this item?')">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</body>
</html>
