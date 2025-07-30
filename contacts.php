<?php include 'includes/header.php'; ?>

<!-- Page header section -->
<div class="header">
  <h1>Contact Me</h1>
</div>

<!-- Page layout: two-column structure -->
<div class="row">

  <!-- Left: main content area -->
  <div class="content">
    <!-- Contact details -->
    <h2>How You Can Reach Me</h2>
    <ul>
      <li><strong>Phone 1:</strong> +254 712 345678</li>
      <li><strong>Phone 2:</strong> +254 798 765432</li>
      <li><strong>Email:</strong> <a href="mailto:raelvickie1974@gmail.com">raelvickie1974@gmail.com</a></li>
    </ul>

    <!-- Introductory message -->
    <p>
      I enjoy meeting new people — friends I can learn from and share stories with. 
      If you'd like to connect, collaborate, or just say hi, feel free to reach out. 
      I'm always open to building meaningful connections.
    </p>

    <!-- Contact form section -->
    <h2>Leave a Message</h2>
    <form action="contact_process.php" method="post">
      <!-- Full name input -->
      <input type="text" name="fullname" placeholder="Enter your full name" required><br>

      <!-- Email input -->
      <input type="email" name="email" placeholder="Enter your email address" required><br>

      <!-- Message textarea -->
      <textarea name="message" placeholder="Your message" rows="4" cols="50" required></textarea><br>

      <!-- Submit and reset buttons -->
      <input type="submit" value="Send Message">
      <input type="reset" value="Clear">
    </form>

    <!-- Optional: Show success message -->
    <?php
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo "<p style='color: green;'>Message sent successfully!</p>";
    }
    ?>
  </div>

  <!-- Right: sidebar with helpful note -->
  <div class="sidebar">
    <h2>Need Help?</h2>
    <p>We’re always happy to hear from you. Reach out if you have questions, feedback, or want to collaborate.</p>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
