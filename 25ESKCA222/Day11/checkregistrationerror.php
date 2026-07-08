<?php
$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);

    if($name=="" || $email=="" || $password==""){
        $error="all field are required.";
        echo $error;
        }
         elseif(($password=="" )|| strlen($password)<6){
        $error = "Password must be atleast 6 characters.";
        echo $error;
    }
    elseif(strtolower($password)==strtolower($name)){
        $error = " Make some strong password.";
        echo $error;
    }
        elseif($password !=$confirmpassword){
            $error="password does not match";
            echo $error;
        }
        else{
            $insertQuery="INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";

         $result= mysqli_query($conn,$insertQuery);

         if($result){
            header ("location:success.php");
         }else{
            echo "error occured while storing data";
            echo "error:" . mysqli_error($conn);
         }
         header("Location: success.php");
        exit();
        }
}
    

?>
