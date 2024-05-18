<?php require_once 'header.php'
?>

<?php 
$pid = $_GET["id"];

$sql = "SELECT * FROM product WHERE product_id = '$pid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$title = $row["title"];
$picture = $row["filename"];
$price = $row["price"];
$description = $row["description"];
$category = $row["category"];
$tag = $row["tag"];
$product_id = $row["product_id"];



?>



  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3><?php echo $title?>® II</h3>
          <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Shop</a>  >  <?php echo $title?></span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="<?php echo $picture?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4><?php echo $title?>® </h4>
          <span class="price"><em>$<?php echo $price + 5 ?></em> $<?php echo $price?></span>
          <p><?php echo $description?></p>
          <form id="qty" action="cart.php" method="post">
            <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
            <input type="hidden" name="pid" value="<?php echo $product_id?>">
            <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
          </form>
          <ul>
            <li><span>Game ID:</span> <?php echo $product_id?></li>
            <li><span>Category:</span> <a href="#"><?php echo $category?></a></li>
            <li><span>tags:</span> <a href="#"><?php echo $tag?></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet porro ipsa aspernatur accusantium cum vel, aperiam rem recusandae similique cupiditate voluptate repellendus numquam ea id explicabo quis incidunt maiores eligendi.</p>
                  <br>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus, magni nobis. Dolor atque, aliquid quasi at nam in, est necessitatibus tempora consequuntur, illum fugit! Repellat, minus cupiditate. Amet earum molestiae molestias cupiditate blanditiis recusandae odit consequuntur atque, voluptatem aliquam accusamus consequatur, nihil natus non sit beatae iure repellendus. Quam, libero? </p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa voluptas autem iusto reiciendis unde soluta voluptatum sit, corrupti quasi cumque sint reprehenderit mollitia hic corporis, ipsum possimus quam dolores quod! Quasi et, autem odit nostrum, facilis sint fugit maxime neque sit voluptate magni? Esse vero odio necessitatibus aspernatur cum iure hic, dignissimos debitis delectus natus facere harum laborum, suscipit laudantium! </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section categories related-games">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Action</h6>
            <h2>Related Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php?page=1">View All</a>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Adventure</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff19.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Wrestling</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff18.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Sport</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff17.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Arcade</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff19.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Puzzle</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/Images2/jeff15.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php 
require_once 'footer.php';
?>