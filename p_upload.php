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
    
    
    // echo $name;
}


?>

<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
<link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">

<div
    class="container"
>
    <!-- Nav tabs -->
    <ul
        class="nav nav-tabs"
        id="navId"
        role="tablist"
    >
        <li class="nav-item">
            <a
                href="../index.php"
                class="nav-link "
                data-bs-toggle="tab"
                aria-current="page"
                >Home</a
            >
        </li>
        <!-- <li class="nav-item dropdown">
            <a
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="true"
                aria-expanded="false"
                >Dropdown</a
            >
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#tab2Id">Action</a>
                <a class="dropdown-item" href="#tab3Id">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#tab4Id">Action</a>
            </div>
        </li> -->
        <li class="nav-item" role="presentation">
            <a href="index.php" class="nav-link" data-bs-toggle="tab"
                >Dashboard</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="users" class="nav-link " data-bs-toggle="tab"
                >Users</a
            >
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link " data-bs-toggle="tab"
                >Sign Out</a
            >
        </li>
    </ul>
   
       
        
    
    
    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">
            
        </div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    
    <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
    <script>
        var triggerEl = document.querySelector("#navId a");
        bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
    </script>
    
</div>



<div style="margin-top:6rem;">


<?php
$title = $_POST["title"];
$brand = $_POST["brand"];
$price = $_POST["price"];
$type = $_POST["type"];
$size = $_POST["size"];

$specifications = $_POST["specification"];
$as = $_POST["a"];
$status = $_POST["status"];
$category = $_POST["category"];
$tag = $_POST["tag"];
$date = date("d-M-Y");
$description = $_POST["description"];
$p_id = rand();

$valid_extensions = array('jpeg', 'jpg', 'jfif', 'png', 'gif', 'bmp', 'webp'); // valid extensions
$path = 'products/'; // upload directory

if (!empty($_POST['title']) || !empty($_POST['price']) || $_FILES['image']) {
    $images = $_FILES['image']; // Get the array of uploaded files

    // Loop through each uploaded file
    foreach ($images['tmp_name'] as $key => $tmp) {
        $img = $images['name'][$key];

        // Get uploaded file's extension
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        // Generate a unique file name
        $final_image = rand(1000, 1000000) . $img;
        $path = $path . strtolower($final_image);

        // Check if it's a valid format
        if (in_array($ext, $valid_extensions)) {
            if (move_uploaded_file($tmp, $path)) {
                echo "<img src='$path' />";

                $date = date("d-m-y");
                // insert form data into the database
                for ($i = 0; $i < count($specifications); $i++) {
                    $specification = $specifications[$i];
                    $a = $as[$i];
                    $image = $path; // Assuming you want to insert the same image path for each row

                    $sql = "INSERT INTO product (name,unique_id,email,phone,title,price,specification,description,filename,op_a,type,size,status,product_id,category,date,tag,brand) 
                            VALUES ('$name','$unique_id','$email','$phone','$title','$price','$specification','$description','$image','$a','$type','$size','$status','$p_id','$category','$date','$tag','$brand')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script> alert(Product Uploaded)</script>";
                        if ($position == "admin") {
                            echo '<script>window.location="index.php"</script>';
                        } else {
                            echo '<script>window.location="index.php"</script>';
                        }
                    } else {
                        echo "Error inserting record: " . $conn->error;
                    }
                }
            }
        } else {
            echo 'Invalid file format.';
        }
    }
}

    
    
    ?>

</div>

<script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
<script src="jquery-3.6.4.min.js"></script>

<?php
require_once ('footer.php');

?>