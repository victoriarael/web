<?php include 'includes/header.php'; ?>

<!-- Header Section -->
<div class="header">
  <h1>Explore Our Book Collection</h1>
</div>

<!-- Main Content -->
<div class="row">
  <div class="content">

    <p>Welcome! We've thoughtfully arranged our books into categories to make browsing easier...</p>

    <!-- Search Input -->
    <div class="search-box">
      <input type="text" id="searchInput" onkeyup="searchBook()" placeholder="Search for a book title..." />
    </div>

    <!-- Coding Books Table (Static for now, DB coming next) -->
    <h2>Coding Books</h2>
    <table id="codingTable">
      <!-- your table from before -->
    </table>

    <h2>Therapy & Self-Development Books</h2>
    <table id="therapyTable">
      <!-- your second table from before -->
    </table>

    <!-- Form to Add Product (will connect to DB in next step) -->
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

<?php include 'includes/footer.php'; ?>
