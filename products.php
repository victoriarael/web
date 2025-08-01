<?php include 'includes/header.php'; ?>

<!-- Header Section -->
<div class="header">
  <h1>Explore Our Book Collection</h1>
</div>

<!-- Main Content Area -->
<div class="row">
  <div class="content">

    <!-- Intro -->
    <p>
      Welcome! We've thoughtfully arranged our books into categories to make browsing easier.
      Whether you're into coding or seeking therapy and growth resources, there’s something here for you.
    </p>

    <!-- Search Function -->
    <div class="search-box" style="margin-bottom: 20px;">
      <input type="text" id="searchInput" onkeyup="searchBook()" placeholder="Search for a book title..." />
    </div>

    <!-- Coding Books Table (Static for now) -->
    <h2>Coding Books</h2>
    <table id="codingTable" border="1" cellpadding="8" cellspacing="0" style="width: 100%;">
      <thead>
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>Level</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Clean Code</td><td>Robert C. Martin</td><td>Intermediate</td></tr>
        <tr><td>HTML & CSS</td><td>Jon Duckett</td><td>Beginner</td></tr>
        <tr><td>JavaScript: The Good Parts</td><td>Douglas Crockford</td><td>Advanced</td></tr>
      </tbody>
    </table>

    <!-- Therapy & Self-Development Books Table -->
    <h2 style="margin-top: 40px;">Therapy & Self-Development Books</h2>
    <table id="therapyTable" border="1" cellpadding="8" cellspacing="0" style="width: 100%;">
      <thead>
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>Focus Area</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>The Gifts of Imperfection</td><td>Brené Brown</td><td>Self-Worth</td></tr>
        <tr><td>Atomic Habits</td><td>James Clear</td><td>Habits</td></tr>
        <tr><td>Man’s Search for Meaning</td><td>Viktor E. Frankl</td><td>Purpose</td></tr>
      </tbody>
    </table>

    <!-- Add New Product Form -->
    <h2 style="margin-top: 50px;">Add a New Product</h2>
    <form action="#" method="post" style="margin-bottom: 20px;">
      <input type="text" name="product" placeholder="Product Name" required><br><br>
      <input type="number" name="quantity" placeholder="Quantity" required><br><br>
      <input type="text" name="price" placeholder="Unit Price (KES)" required><br><br>
      <input type="submit" value="Add Product">
    </form>

  </div>

  <!-- Sidebar Area -->
  <div class="sidebar">
    <h2>Why Books?</h2>
    <p>Whether you need to boost your skills or find clarity in life, our books guide your journey.</p>
    <p>Curated with purpose to support both the mind and the mission.</p>
  </div>
</div>

<!-- Optional JavaScript for Search -->
<script>
function searchBook() {
  const input = document.getElementById("searchInput").value.toLowerCase();
  const tables = [document.getElementById("codingTable"), document.getElementById("therapyTable")];

  tables.forEach(table => {
    const rows = table.getElementsByTagName("tr");
    for (let i = 1; i < rows.length; i++) {
      const rowText = rows[i].innerText.toLowerCase();
      rows[i].style.display = rowText.includes(input) ? "" : "none";
    }
  });
}
</script>

<?php include 'includes/footer.php'; ?>
