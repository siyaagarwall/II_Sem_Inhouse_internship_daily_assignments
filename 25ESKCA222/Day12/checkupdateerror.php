<?php
include("db_connect.php");
$error = "";
$newpassword="";
$confirmpassword="";
$oldpassword="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
    $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);
    $oldpassword = mysqli_real_escape_string($conn,$_POST['oldpassword']);
    
    

    if( $newpassword=="" || $oldpassword==""||$confirmpassword==""){
        $error="all field are required.";
        echo $error;
        }
        elseif($newpassword != $confirmpassword){
            $error= "password does not match";
        echo $error;}
  
    
        
        
        else{
         $selectQuery="Select * From user WHERE id='" . $_SESSION['user_id'] . "'"; 

        $result= mysqli_query($conn,$selectQuery);
        $user=mysqli_fetch_assoc($result);
        
           
          
        if( $user && $user["password"] ==$oldpassword){
            $updateQuery ="update user set password= '$newpassword' where id='" . $_SESSION['user_id'] . "'";
         
             $result= mysqli_query($conn,$updateQuery);
             

            echo "password updated successfully";
            
         }elseif($user){
            echo "Old Password does not matched";
         }
         
         else{
            echo "Invalid Credentials";
            echo "error:" . mysqli_error($conn);
         }
        
    
        
}}
    

?>
