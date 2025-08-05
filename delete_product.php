<?php
include 'includes/dbConnect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM products WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: products.php?msg=Product+deleted");
        exit();
    } else {
        echo "Failed to delete product.";
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
