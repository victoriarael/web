<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: signin.php");
    exit();
}

include('includes/header.php');
require_once('includes/dbConnect.php');

// Fetch contacts from database
$sql = "SELECT * FROM contacts ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h2 class="mb-4">Contact Messages</h2>

    <?php if ($result->num_rows > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['subject']) ?></td>
                        <td><?= htmlspecialchars($row['message']) ?></td>
                        <td>
                            <a href="delete.php?id=<?= $row['id'] ?>&table=contacts"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete this entry?');">
                               Delete
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-info">No contact messages found.</div>
    <?php endif; ?>
</div>

<?php
$conn->close();
include('includes/footer.php');
?>
