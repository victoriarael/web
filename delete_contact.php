<?php
require_once('includes/dbConnect.php');

$id = intval($_GET['id'] ?? 0);
$table = $_GET['table'] ?? '';

$allowed_tables = ['contacts', 'messages', 'signups'];
if ($id > 0 && in_array($table, $allowed_tables)) {
    $sql = "DELETE FROM $table WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: view_{$table}.php?deleted=1");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
