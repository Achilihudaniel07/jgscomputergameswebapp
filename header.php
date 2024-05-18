
<?php  

require_once ('config.php');


if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    // echo "<script> alert('id')</script>";
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $i = $row["id"];
    $name = $row["name"];
    $user = $row["username"];
    $email = $row["email"];
    $phone = $row["phone"];
    $unique_id = $row["unique_id"];

    $position = $row["position"];
    $sign = "Sign Out";
    $link = "logout.php";
    
    // echo $name;
}
else{
  $sign = "Sign In";
  $link = "sign-in.php";
}


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Jeffrey's Gaming Store </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/about.css">

  </head>
  <style>
		.logo1 span p{
		  
      color: white;
      font-size: xx-large;
      margin-top: 1.3rem;
      font-family:'Poppins', sans-serif; ;
      font-weight: 700;
      
      
		}
	  </style>

<body>



  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" >
    <div class="container" >
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo logo1" style="border-bottom:10px dotted #EE626B">
                        
                        <span><p>JGS</p></span>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php" class="active">Home</a></li>
                      <?php 

                        if(!empty($_SESSION["id"])){

                          if($position == "admin"){
                            echo '<li><a href="admin/index.php">Dashboard</a></li>';
                          }

                        }

                      ?>
                      
                      <li><a href="checkout/index.php">Cart</a></li>
                      <li><a href="shop.php">Our Shop</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                      <li><a href="<?php echo $link ?>"><?php echo $sign ?></a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->