<?php
include 'dbConnect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM contacts WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin_contacts.php?deleted=1");
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}
?>
