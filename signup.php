<?php include('includes/header.php'); ?>

<!-- Page header -->
<div class="header">
  <h1>Join Rael's World</h1>
  <p>Sign up and step into a community where code meets compassion</p>
</div>

<!-- Begin main container -->
<div class="container">

  <!-- Main layout row -->
  <div class="row">

    <!-- Sign-up form -->
    <div class="content">
      <h2>Create Your Account</h2>

      <form id="signupForm" action="process_signup.php" method="post" novalidate>
        <label for="fullname">Full Name:</label><br />
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required /><br />

        <label for="email">Email Address:</label><br />
        <input type="email" id="email" name="email" placeholder="example@domain.com" required /><br />

        <label for="dob">Date of Birth:</label><br />
        <input type="date" id="dob" name="dob" required /><br />

        <label for="gender">Gender:</label><br />
        <select id="gender" name="gender" required>
          <option value="">-- Select Gender --</option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="other">Other</option>
        </select><br />

        <label for="password">Password:</label><br />
        <input type="password" id="password" name="password" placeholder="Choose a strong password" required /><br />

        <label for="confirmPassword">Confirm Password:</label><br />
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Re-type your password" required /><br />

        <input type="submit" value="Sign Up" />
      </form>
    </div>

    <!-- Sidebar message -->
    <div class="sidebar">
      <h2>Why Join?</h2>
      <p>Rael’s World is more than a website — it’s a creative community. Whether you're a dreamer, developer, or student, you belong here.</p>
      <p>Expect safe spaces, useful tools, and encouragement for every journey. Let’s build with heart.</p>
    </div>

  </div> <!-- end row -->
</div> <!-- end container -->

<!-- Form validation -->
<script>
  document.getElementById("signupForm").addEventListener("submit", function(e) {
    const name = document.getElementById("fullname").value.trim();
    const email = document.getElementById("email").value.trim();
    const dob = new Date(document.getElementById("dob").value);
    const gender = document.getElementById("gender").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    const nameRegex = /^[a-zA-Z\s]+$/;
    const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
    const today = new Date();
    let errors = [];

    if (!nameRegex.test(name)) {
      errors.push("Full name should contain only letters and spaces.");
    }

    if (!emailRegex.test(email)) {
      errors.push("Please enter a valid email address.");
    }

    if (isNaN(dob.getTime()) || dob >= today) {
      errors.push("Please enter a valid date of birth in the past.");
    }

    if (!gender) {
      errors.push("Please select your gender.");
    }

    if (password.length < 6) {
      errors.push("Password must be at least 6 characters.");
    }

    if (password !== confirmPassword) {
      errors.push("Passwords do not match.");
    }

    if (errors.length > 0) {
      alert(errors.join("\n"));
      e.preventDefault();
    }
  });
</script>

<?php include('includes/footer.php'); ?>
