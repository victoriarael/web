<?php include 'includes/header.php'; ?>

<!-- Header Section -->
<div class="header">
  <h1>Manage Your Products</h1>
</div>

<!-- Main Content Area -->
<div class="row">
  <!-- Left/Main Content -->
  <div class="content">

    <!-- Add New Product Form -->
    <h2>Add a New Product</h2>
    <form action="insert_product.php" method="post" style="margin-bottom: 30px;">
      <input type="text" name="product" placeholder="Product Name" required><br><br>
      <input type="number" name="quantity" placeholder="Quantity" required><br><br>
      <input type="text" name="price" placeholder="Unit Price (KES)" required><br><br>
      <input type="submit" value="Add Product">
    </form>

    <!-- Display Products from Database -->
    <h2>All Products</h2>
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%;">
      <thead>
        <tr>
          <th>#</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price (KES)</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'includes/dbConnect.php';

        $sql = "SELECT * FROM products ORDER BY id DESC";
        $result = $conn->query($sql);
        $count = 1;

        if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$count}</td>
                    <td>{$row['product']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['price']}</td>
                    <td>
                      <a href='edit_product.php?id={$row['id']}'>Edit</a> | 
                     <a href='edit_product.php?id={$row['id']}'>Edit</a>

                    </td>
                  </tr>";
            $count++;
          }
        } else {
          echo "<tr><td colspan='5'>No products found.</td></tr>";
        }

        $conn->close();
        ?>
      </tbody>
    </table>
  </div>

  <!-- Right Sidebar -->
  <div class="sidebar">
    <h2>Why Buy With Us?</h2>
    <p>We believe in selling not just books, but also in reminding our community that connecting with one’s inner self is essential to living a balanced and healthy life.</p>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
