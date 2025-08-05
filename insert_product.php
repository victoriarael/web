<?php
include 'includes/dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $product = trim($_POST['product']);
    $quantity = intval($_POST['quantity']);
    $price = floatval($_POST['price']);

    // Basic validation
    if (!empty($product) && $quantity > 0 && $price > 0) {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO products (product, quantity, price) VALUES (?, ?, ?)");
        $stmt->bind_param("sid", $product, $quantity, $price);

        // Execute and check
        if ($stmt->execute()) {
            // Redirect back to products page
            header("Location: products.php");
            exit();
        } else {
            echo "Error inserting product: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please fill in all fields correctly.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
