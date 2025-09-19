<?php
$conn = mysqli_connect("localhost","root","","medical");
if(!$conn){
    die("dead");
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM doctors WHERE email='$email' AND password='$password' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)> 0){
   echo("success");
    exit();
}
else{
    echo("wala");
}
mysqli_close($conn);
?>