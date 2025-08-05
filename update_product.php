<?php
include 'includes/dbConnect.php';

if (isset($_POST['id']) && isset($_POST['product']) && isset($_POST['quantity']) && isset($_POST['price'])) {
    $id = $_POST['id'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET product=?, quantity=?, price=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sidi", $product, $quantity, $price, $id);

    if ($stmt->execute()) {
        header("Location: products.php");
        exit();
    } else {
        echo "Error updating product: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Invalid data submitted.";
}

$conn->close();
?>
