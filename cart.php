<?php

require_once 'header.php';

if(!empty($_SESSION["id"])){

    
    $pid = $_POST["pid"];
    $query = "SELECT * FROM product WHERE product_id = '$pid'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $title = $row["title"];
    $price = $row["price"];
    $status = $row["status"];
    echo $title . "<br>";
    echo $price . "<br>";
    echo $status . "<br>";
    echo $pid . "<br>";
    echo $name . "<br>";
    echo $pid . "<br>";
    
    
    $sql = "INSERT INTO `cart` (`name`, `unique_id`, `product`, `product_id`, `price`, `status`) VALUES ('$name','$unique_id','$title','$pid','$price','$status')";
    $Result = mysqli_query($conn, $sql);
    if($Result == true){
        echo "<script> alert('Product Added to Cart')</script>";
        $delay = 5;
    }
}else{
    echo "<script> alert('Please Login First')</script>";
    echo"<script> window.location.href='sign-in.php' </script>";
}




?>

<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Delayed Redirect</title>
        <script src='redirect.js'></script> </head>
    <body>
    
    <h1>Redirecting in <span id="countdown">5</span> seconds</h1>
    <script>
        const countdownElement = document.getElementById("countdown");
        const targetDelay = <?php echo $delay; ?>; // Convert delay to seconds
        let remainingSeconds = targetDelay;
        
        const updateCountdown = () => {
            countdownElement.textContent = remainingSeconds;
            remainingSeconds--;
            if (remainingSeconds <= 0) {
                clearInterval(intervalId);
                window.location.href = 'checkout/index.php';
            }
        }
        
        const intervalId = setInterval(updateCountdown, 1000); // Update every second
    </script>
        </body>
    </html>
