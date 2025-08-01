<?php
include('includes/header.php');
require_once('includes/dbConnect.php');

// Fetch contacts from database
$sql = "SELECT * FROM contacts ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container">
    <h2>Contact Messages</h2>

    <?php if ($result->num_rows > 0): ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['subject']) ?></td>
                    <td><?= htmlspecialchars($row['message']) ?></td>
                    <td>
                        <a href="delete.php?id=<?= $row['id'] ?>&table=contacts" onclick="return confirm('Delete this entry?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No contact messages found.</p>
    <?php endif; ?>

</div>

<?php
$conn->close();
include('includes/footer.php');
?>
