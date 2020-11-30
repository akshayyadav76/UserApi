
<?php

require "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$inser = "INSERT INTO user(name,email,pass) VALUES('$name','$email','$pass')";
$reult = mysqli_query($con,$inser);


if($reult){
    echo "working";
}else{

    echo "not working";
}

?>