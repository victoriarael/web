<?php
include 'includes/header.php';
include 'includes/dbConnect.php';

$id = $_GET['id'] ?? 0;

// Fetch the product
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

if (!$product) {
    echo "<p>Product not found.</p>";
    include 'includes/footer.php';
    exit;
}
?>

<div class="container mt-5">
    <h2>Edit Product</h2>
    <form action="update_product.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <div class="mb-3">
            <label for="product" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product" name="product" value="<?= htmlspecialchars($product['product']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $product['quantity'] ?>" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price (KES)</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= $product['price'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
