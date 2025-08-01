<?php include 'includes/header.php'; ?>

<div class="container">

  <!-- Page header -->
  <div class="header">
    <h1>Contact Me</h1>
    <p>Where Code Meets Compassion</p>
  </div>

  <!-- Page layout -->
  <div class="row">

    <!-- Main content -->
    <div class="col-md-8 content">
      <h2>How You Can Reach Me</h2>
      <ul>
        <li><strong>Phone 1:</strong> +254 712 345678</li>
        <li><strong>Phone 2:</strong> +254 798 765432</li>
        <li><strong>Email:</strong> 
          <a href="mailto:raelvickie1974@gmail.com">raelvickie1974@gmail.com</a>
        </li>
      </ul>

      <p>
        I enjoy meeting new people — friends I can learn from and share stories with. 
        If you'd like to connect, collaborate, or just say hi, feel free to reach out. 
        I'm always open to building meaningful connections.
      </p>

      <h2>Leave a Message</h2>
      <form action="contact_process.php" method="post">
        <div class="form-group">
          <input type="text" name="name" placeholder="Enter your full name" required class="form-control">
        </div><br>
        <div class="form-group">
          <input type="email" name="email" placeholder="Enter your email address" required class="form-control">
        </div><br>
        <div class="form-group">
          <input type="text" name="subject" placeholder="Subject" required class="form-control">
        </div><br>
        <div class="form-group">
          <textarea name="message" placeholder="Your message" rows="5" required class="form-control"></textarea>
        </div><br>
        <input type="submit" value="Send Message" class="btn btn-primary">
        <input type="reset" value="Clear" class="btn btn-secondary">
      </form>

      <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<p style='color: green;'>Message sent successfully!</p>";
        }
      ?>
    </div>

    <!-- Sidebar -->
    <div class="col-md-4 sidebar">
      <h2>Need Help?</h2>
      <p>We’re always happy to hear from you. Reach out if you have questions, feedback, or want to collaborate.</p>
    </div>

  </div><!-- End .row -->

</div><!-- End .container -->

<?php include 'includes/footer.php'; ?>
