<?php  

require_once ('../config.php');


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
                href="../index.php" class="nav-link"
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
        <li class="nav-item" >
            <a href="index.php" class="nav-link" 
                >Dashboard</a
            >
        </li>
        <li class="nav-item" >
            <a href="users" class="nav-link " 
                >Users</a
            >
        </li>
        <li class="nav-item" >
            <a href="#" class="nav-link " 
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
