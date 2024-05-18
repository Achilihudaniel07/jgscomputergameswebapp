<?php 
require_once "config.php";

    $page = $_POST["page"];
    if($page == "reg"){
        // $name =  filter_var($_POST["name"], FILTER_SANITIZE_STRING);  
        $name =  $_POST["name"];  
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];
        $position = "User";
        
        $date = date("d/m/Y");
        if($confirm == $password){

            function generateRandomString($length) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';
            
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, strlen($characters) - 1)];
                }
            
                return $randomString;
            }
            
            $length = 10; // Desired length of the random string
            $unique_id = generateRandomString($length);
            
            
            if(! preg_match("/[a-z]/i",$_POST["password"])){
                echo '<script> alert("Password must contain at least one letter")</script>';
              }
              elseif(! preg_match("/[0-9]/i",$_POST["password"])){
                  echo '<script> alert("Password must contain at least one number")</script>';
                }
                else{
                        // echo $name."<br>";
                        // echo $email."<br>";
                        // echo $phone."<br>";
                        // echo $password."<br>";
                        // echo $unique_id."<br>";
                                        // // echo $unique_id;
                                        $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE name = '$name' OR email = '$email'");
                                        
                        if(mysqli_num_rows($duplicate) > 0){
                            echo
                            "<script> alert('Username or Email Has Already Taken'); </script>";
                        }
                        else{
    
                              
    
                        $sql = "INSERT INTO users (name,username,email,phone,unique_id,password,position,date) VALUES ('$name','$username','$email','$phone','$unique_id','$password','$position','$date')";
                        

                       
                        
                        $result = mysqli_query($conn,$sql);
                        echo '<script> alert("Registration Successful")</script>'; 
                        header("Location:sign-in.php");
                    
                        
                        }
                    }
    
        }
        else{
            echo '<script> alert("Passwords Are Not The Same")</script>';
        }
}
    elseif($page == "log"){
        $emailphone = $_POST["emailphone"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $email = $row["email"];
            $phone = $row["phone"];
            $pass = $row["password"];
            $position = $row["position"];
            $username = $row["username"];
            if($email == $emailphone || $phone == $emailphone || $username == $emailphone ){
                if($pass == $password){

                    $_SESSION["login"] = true;
                    $_SESSION["id"] = $id;
                    // header("Location:index.php");
                    
                    // if($position == "admin"){
                    //  header("admin.php");
                    // }
                    // elseif($position == "sub-admin"){
                    //   header("sub-admin.php");
                    //  }
                    // else{
                    
                        echo '<script> alert("LOGIN SUCCESSFUL")</script>';
                        header("Location:Entrance/index.html");
                    // }
                }

            }
            else{
                echo "<script> alert('ACCOUNT NOT FOUND, WRONG EMAIL/PASSWORD')</script>";
            }
        }


    }

?>