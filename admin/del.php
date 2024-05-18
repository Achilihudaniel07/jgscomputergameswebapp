<?php require_once 'head.php';?>

<?php 

$del = $_GET["p"];
$del = mysqli_real_escape_string($conn,$del);
$del = stripslashes($del);
$del = htmlspecialchars($del);
$del = preg_replace('/[^a-zA-Z0-9]/', '', $del);

// echo $del;
$sql = "DELETE FROM product WHERE product_id = '$del'";
$result = mysqli_query($conn, $sql);
if($result == true){
    echo "<script> alert ('Product Deleted') </script>";
    $delay = 5;
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
                window.location.href = 'products.php';
            }
        }
        
        const intervalId = setInterval(updateCountdown, 1000); // Update every second
    </script>
        </body>
    </html>



<?php require_once 'footer.php';?>


