<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: signin.php');
    exit();
}
include('includes/header.php');
include('includes/dbConnect.php'); 

// Count totals from database
$userCount = $conn->query("SELECT COUNT(*) AS total FROM users")->fetch_assoc()['total'];
$messageCount = $conn->query("SELECT COUNT(*) AS total FROM messages")->fetch_assoc()['total'];
$contactCount = $conn->query("SELECT COUNT(*) AS total FROM contacts")->fetch_assoc()['total'];

$conn->close();
?>

<div class="container mt-5">
    <h1 class="mb-4">Dashboard</h1>
    <p class="lead">You are logged in. Welcome to your dashboard!</p>

    <div class="row mt-4">
        <!-- Users Card -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 shadow">
                <div class="card-header">Total Users</div>
                <div class="card-body">
                    <h3 class="card-title text-center"><?= $userCount ?></h3>
                </div>
            </div>
        </div>

        <!-- Messages Card -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 shadow">
                <div class="card-header">Messages</div>
                <div class="card-body">
                    <h3 class="card-title text-center"><?= $messageCount ?></h3>
                </div>
            </div>
        </div>

        <!-- Contacts Card -->
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3 shadow">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                    <h3 class="card-title text-center"><?= $contactCount ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
