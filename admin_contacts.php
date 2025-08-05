<?php 
include('includes/dbConnect.php'); // ✅ FIXED the include statement
include('includes/header.php'); 
?>

<div class="mt-5">
  <h2 class="mb-4">Contact Messages</h2>

  <?php
  // Show delete confirmation message
  if (isset($_GET['deleted'])) {
      echo "<div class='alert alert-success'>Message deleted successfully.</div>";
  }

  // Fetch messages from the database
  $sql = "SELECT * FROM contacts ORDER BY created_at DESC";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
      echo "<div class='table-responsive'>";
      echo "<table class='table table-bordered table-striped'>
              <thead class='table-dark'>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Date</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>";
      
      while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>". htmlspecialchars($row['id']) ."</td>
                  <td>". htmlspecialchars($row['name']) ."</td>
                  <td>". htmlspecialchars($row['email']) ."</td>
                  <td>". nl2br(htmlspecialchars($row['message'])) ."</td>
                  <td>". htmlspecialchars($row['created_at']) ."</td>
                  <td>
                    <a href='delete_contact.php?id=". $row['id'] ."' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                  </td>
                </tr>";
      }

      echo "</tbody></table></div>";
  } else {
      echo "<p>No messages found.</p>";
  }
  ?>
</div>

<?php include 'includes/footer.php'; ?>
