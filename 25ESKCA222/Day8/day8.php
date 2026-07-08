<?php

$txtname = $_POST["txtName"];

$txtemail = $_POST["txtEmail"];
$txtphone = $_POST["txtphone"];



if(empty($txtname)){
    echo "name is empty <br>";
}
if(!filter_var($txtemail, FILTER_VALIDATE_EMAIL)){
    echo"email is invalid<br>";

}

elseif( strlen($txtphone) != 10 || !is_numeric($txtphone)){
    echo "phone number is invalid  <br>";
}

else{
    echo "all values are valid <br>";
}

echo "values received : $txtname $txtemail $txtphone ";




?>
