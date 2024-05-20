<?php 
require_once '../config.php';

    $name = $_POST["firstName"] . $_POST["lastName"];
    $email = $_POST["email"];
    $subject = "GAME";
    $message = $_POST["message"];
    
    require "vendor/autoload.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    
    
    
    
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER;
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '8524a002d9e88a';
    $phpmailer->Password = '0347bd8612c271';
    // $phpmailer = new PHPMailer();
    // $phpmailer->isSMTP();






    // // $phpmailer->Host = 'live.smtp.mailtrap.io';
    // $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    // // $phpmailer->Host = 'smtp.elasticemail.com';
    // $phpmailer->SMTPAuth = true;
    // // $phpmailer->Port = 587;
    // $phpmailer->Port = 2525;
    // // $phpmailer->Port = 2525;

    // // $phpmailer->Username = 'api';
    // $phpmailer->Username = '8524a002d9e88a';
    // // $phpmailer->Username = 'zikkyychukwudulue@gmail.com';

    // // $phpmailer->Password = '88c1bbed5c14e5e6c0ed6dd7893c6474';
    // $phpmailer->Password = '2814f77dfcc786f607e42e4aff39c354';
    // // $phpmailer->Password = 'D543C8E58BBD928435410C995CF8B2D87511';

    $phpmailer->setFrom($email, $name);
    $phpmailer->addAddress("zikkyychukwudulue@gmail.com", "zikky");
    $phpmailer->Subject = $subject;
    $phpmailer->Body = $message;

    if ($phpmailer->send()) {
        echo "<script> alert('Email sent successfully!') </script>";
        $date = date('d/m/Y');

        $newswql = "INSERT INTO orders (name,email,message,date) VALUES ('$name','$email','$message','$date')";
        $newquery = mysqli_query($conn, $newswql);


      } else {
        echo "<script> alert('Error sending email: " . $phpmailer->ErrorInfo . "') </script>";
      }

    $delay = 5;

    // echo "email sent";
  
    
    
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
                window.location.href = '../index.php';
            }
        }
        
        const intervalId = setInterval(updateCountdown, 1000); // Update every second
    </script>
        </body>
    </html>

   