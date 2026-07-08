<?php
include("db_connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $txtName = mysqli_real_escape_string($conn, $_POST["txtName"]);
    $roll = mysqli_real_escape_string($conn, $_POST["roll"]);
    $PhoneNo = mysqli_real_escape_string($conn, $_POST["PhoneNo"]);
    $branch = mysqli_real_escape_string($conn, $_POST["branch"]);
    $cgpa =  $_POST["cgpa"];
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "INSERT INTO user ( name, roll_no, phone_no, branch, cgpa,password) VALUES ('$txtName', '$roll', '$PhoneNo', '$branch', '$cgpa', '$password')";

    if(mysqli_query($conn, $sql)){
        echo "New record created successfully";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}   


$txtName = $_POST["txtName"];
$roll = $_POST["roll"];
$PhoneNo = $_POST["PhoneNo"];
$branch = $_POST["branch"];
$cgpa = $_POST["cgpa"];
$password = $_POST["password"];



if(empty($txtName )){
    echo "Name is empty <br>";
}

elseif(strlen($PhoneNo)!= 10 || !filter_var($PhoneNo, FILTER_VALIDATE_INT)){
    echo "Phone number is invalid <br>";
}



else{
    echo "all values are valid <br>";
}

echo "value received :  $txtName  <br> $PhoneNo  <br> $branch <br> $cgpa <br> $password";

?>
