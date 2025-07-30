<?php include('includes/header.php'); ?>

<!-- Page header -->
<div class="header">
  <h1>Welcome Back</h1>
  <p>Log in to continue your journey</p>
</div>

<!-- Main content layout -->
<div class="row">

  <!-- Left content -->
  <div class="content">
    <h2>A Gentle Space to Grow</h2>
    <p>Every sign-in isn't just about access — it's a quiet moment of returning to something that supports you. Whether you're learning, building, or dreaming — this is your space.</p>

    <h2>What We Believe</h2>
    <p>Our mission is to humanize the web. Every feature, every page, every project — built with care for real people.</p>
  </div>

  <!-- Right sidebar with sign-in form -->
  <div class="sidebar">
    <h2>Sign In</h2>

    <form id="signinForm" action="process_signin.php" method="post" novalidate>
      <label for="username">Username</label><br />
      <input type="text" id="username" name="username" placeholder="Enter your username" required /><br />

      <label for="password">Password</label><br />
      <input type="password" id="password" name="password" placeholder="Enter your password" required /><br />

      <input type="submit" value="Sign In" />

      <p style="margin-top: 10px;">
        New here? <a href="signup.php">Create your account</a>
      </p>
    </form>

    <h2>Why This Matters</h2>
    <p>This platform is built for community — to support, encourage, and empower. You're welcome here, always.</p>
  </div>
</div>

<!-- Form validation script -->
<script>
  document.getElementById("signinForm").addEventListener("submit", function(e) {
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();
    const usernameRegex = /^[a-zA-Z\s]+$/;

    if (!usernameRegex.test(username)) {
      alert("Please enter a valid username (letters and spaces only).");
      e.preventDefault();
      return;
    }

    if (password.length < 4) {
      alert("Password must be at least 4 characters.");
      e.preventDefault();
    }
  });
</script>

<?php include('includes/footer.php'); ?>
