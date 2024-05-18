<?php require_once 'header.php'
?>



  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our Shop</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
        </div>
        <div
    class="container-sm  p-2"
  >
  
  
    <form class="d-flex" action="shop.php" method="get">
      <input class="form-control me-2" type="search" placeholder="Search" name="search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
    
  </div>
  
      </div>
    </div>
  </div>

  

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Adventure</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Strategy</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Racing</a>
        </li>
      </ul>
      <div class="row trending-box">
        
        <?php 
      
      // Define results per page
      $results_per_page = 10;
      
      // Get total number of records (replace with your table name)
      $query = "SELECT * FROM product";
      $result = mysqli_query($conn, $query);
      $number_of_result = mysqli_num_rows($result);
      
      // Determine total number of pages
      $number_of_page = ceil($number_of_result / $results_per_page);
      
      // Get current page number (default to 1)
      $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
      
      // Calculate starting record for current page
      $start_from = ($page - 1) * $results_per_page;
      
      // Check if search query is present in GET
      if (isset($_GET['search'])) {
          $search = $_GET['search'];
      
          // Include search term in both queries (total count and pagination)
          $query = "SELECT * FROM product WHERE title LIKE '%$search%'";
          $result = mysqli_query($conn, $query);
          $number_of_result = mysqli_num_rows($result);
      
          $sql = "SELECT DISTINCT filename, price, category, title, product_id FROM product WHERE title LIKE '%$search%' LIMIT $start_from, $results_per_page";
      } else {
          $sql = "SELECT DISTINCT filename, price, category, title, product_id FROM product LIMIT $start_from, $results_per_page";
      }
      
      $result = mysqli_query($conn, $sql);
      
      while ($row = mysqli_fetch_assoc($result)) {
          $product = $row["filename"];
          $price = $row["price"];
          $title = $row["title"];
          $category = $row["category"];
          $product_id = $row["product_id"];
          $old = $price * 100;
      
          echo "
              <div class='col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 str'>
                  <div class='item'>
                      <div class='thumb'>
                          <a href='product-details.php?id=$product_id'><img src='$product' class='images' alt=''></a>
                          <span class='price'><em>$$old</em>$$price</span>
                      </div>
                      <div class='down-content'>
                          <span class='category'>$category</span>
                          <h4>$title</h4>
                          <a href='product-details.php?id=$product_id'><i class='fa fa-shopping-bag'></i></a>
                      </div>
                  </div>
              </div>
          ";
      }


        ?>




      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">

          <?php 
     
            
           // Pagination links (adjust styling as needed)
if ($number_of_page > 1) {
  echo "<ul class='pagination'>";
  if ($page > 1) {
      $prev_search = isset($_GET['search']) ? "&search=" . urlencode($search) : "";  // Add search query to previous link
      echo "<li><a href='?page=" . ($page - 1) . $prev_search . "'>Prev</a></li>";
  }
  for ($i = 1; $i <= $number_of_page; $i++) {
      $active_class = $i == $page ? 'class="active"' : '';
      $page_search = isset($_GET['search']) ? "&search=" . urlencode($search) : "";  // Add search query to page link
      echo "<li " . $active_class . "><a href='?page=" . $i . $page_search . "'>" . $i . "</a></li>";
  }
  if ($page < $number_of_page) {
      $next_search = isset($_GET['search']) ? "&search=" . urlencode($search) : "";  // Add search query to next link
      echo "<li><a href='?page=" . ($page + 1) . $next_search . "'>Next</a></li>";
  }
  echo "</ul>";
}
    ?>



<!-- 
          <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
<?php 
require_once 'footer.php';
?>