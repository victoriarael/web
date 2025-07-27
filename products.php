<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products - Vicky</title>
  <link rel="stylesheet" href="css/style.css" />

  <script>
    function searchBook() {
      const input = document.getElementById("searchInput").value.toLowerCase();
      const codingRows = document.querySelectorAll("#codingTable tbody tr");
      const therapyRows = document.querySelectorAll("#therapyTable tbody tr");

      [...codingRows, ...therapyRows].forEach(row => {
        const title = row.cells[1].textContent.toLowerCase();
        row.style.display = title.includes(input) ? "" : "none";
      });
    }
  </script>
</head>
<body>

<!-- Navigation Bar -->
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="about.html">About</a>
  <a href="projects.html">Projects</a>
  <a href="team.html">Team</a>
  <a href="products.html">Products</a>
  <a href="hobbies.html">Hobbies</a>
  <a href="contacts.html">Contacts</a>
  <div class="topnav-right">
    <a href="signin.html">Sign In</a>
    <a href="signup.html">Sign Up</a>
  </div>
</div>

<!-- Header Section -->
<div class="header">
  <h1>Explore Our Book Collection</h1>
</div>

<!-- Main Content -->
<div class="row">
  <div class="content">

    <!-- Friendly Welcome Message -->
    <p>Welcome! We've thoughtfully arranged our books into categories to make browsing easier. Whether you're expanding your skills or seeking personal growth, you're in the right place. Feel free to search or scroll through each section.</p>

    <!-- Search Input -->
    <div class="search-box">
      <input type="text" id="searchInput" onkeyup="searchBook()" placeholder="Search for a book title..." />
    </div>

    <!-- Coding Books -->
    <h2>Coding Books</h2>
    <table id="codingTable">
      <thead>
        <tr>
          <th>SN</th>
          <th>Book Title</th>
          <th>Author</th>
          <th>Price (KES)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Clean Code</td><td>Robert C. Martin</td><td>1500</td></tr>
        <tr><td>2</td><td>You Don’t Know JS</td><td>Kyle Simpson</td><td>1800</td></tr>
        <tr><td>3</td><td>The Pragmatic Programmer</td><td>Hunt & Thomas</td><td>2000</td></tr>
        <tr><td>4</td><td>Refactoring</td><td>Martin Fowler</td><td>1700</td></tr>
        <tr><td>5</td><td>JavaScript: The Good Parts</td><td>Douglas Crockford</td><td>1600</td></tr>
        <tr><td>6</td><td>Design Patterns</td><td>Erich Gamma</td><td>1900</td></tr>
        <tr><td>7</td><td>Cracking the Coding Interview</td><td>Gayle McDowell</td><td>2500</td></tr>
        <tr><td>8</td><td>Effective JavaScript</td><td>David Herman</td><td>1550</td></tr>
        <tr><td>9</td><td>Learning PHP, MySQL & JavaScript</td><td>Robin Nixon</td><td>1800</td></tr>
        <tr><td>10</td><td>HTML & CSS</td><td>Jon Duckett</td><td>1300</td></tr>
      </tbody>
    </table>

    <!-- Therapy & Self-Development Books -->
    <h2>Therapy & Self-Development Books</h2>
    <table id="therapyTable">
      <thead>
        <tr>
          <th>SN</th>
          <th>Book Title</th>
          <th>Author</th>
          <th>Price (KES)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Atomic Habits</td><td>James Clear</td><td>1200</td></tr>
        <tr><td>2</td><td>The Power of Now</td><td>Eckhart Tolle</td><td>1400</td></tr>
        <tr><td>3</td><td>12 Rules for Life</td><td>Jordan Peterson</td><td>1600</td></tr>
        <tr><td>4</td><td>Daring Greatly</td><td>Brené Brown</td><td>1500</td></tr>
        <tr><td>5</td><td>Think Like a Monk</td><td>Jay Shetty</td><td>1300</td></tr>
        <tr><td>6</td><td>Mindset</td><td>Carol S. Dweck</td><td>1350</td></tr>
        <tr><td>7</td><td>The Four Agreements</td><td>Don Miguel Ruiz</td><td>1100</td></tr>
        <tr><td>8</td><td>How to Do the Work</td><td>Nicole LePera</td><td>1450</td></tr>
        <tr><td>9</td><td>The Gifts of Imperfection</td><td>Brené Brown</td><td>1400</td></tr>
        <tr><td>10</td><td>The Mountain Is You</td><td>Brianna Wiest</td><td>1350</td></tr>
      </tbody>
    </table>

    <!-- Product Entry Form -->
    <h2>Add a New Product</h2>
    <form action="#" method="post">
      <input type="text" name="product" placeholder="Product Name" required><br>
      <input type="number" name="quantity" placeholder="Quantity" required><br>
      <input type="text" name="price" placeholder="Unit Price (KES)" required><br>
      <input type="submit" value="Add Product">
    </form>
  </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Why Books?</h2>
    <p>Whether you need to boost your skills or find clarity in life, our books guide your journey.</p>
    <p>Curated with purpose to support both the mind and the mission.</p>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <p>© 2025 Vicky. All rights reserved.</p>
  <p>Contact us at <a href="mailto:raelvickie1974@gmail.com">raelvickie1974@gmail.com</a></p>
</div>

</body>
</html>
