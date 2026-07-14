<?php
$error = "";


$email="";
$password="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    

    
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    

    if( $email=="" || $password==""){
        $error="all field are required.";
        echo $error;
        }
  
    
        
        
        else{
            $selectQuery="Select * From user where email='$email' and password='$password'";

         $result= mysqli_query($conn,$selectQuery);
          $user=mysqli_fetch_assoc($result);

          
          
         if($user){

         session_start();
         
         $_SESSION['user_id'] =$user['id'];
         $_SESSION['user_name'] =$user['name'];
         $_SESSION['user_email'] =$user['email'];
         
         if($user['role']=='admin'){
            header("Location:admin/admindashboard.php");
         }else{
            header ("Location: dashboard.php");}
            exit();
         }else{
            echo "Invalid Credentials";
            echo "error:" . mysqli_error($conn);
         }
        
    
        
}}
    

?>
