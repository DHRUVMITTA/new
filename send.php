<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];    //error????!!
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['message'];
$servername="localhost";
$username= "root";
$password="";
$database="platemate";
$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo"sorry connection failed to connect:".mysqli_connect_error();
}
else {
    echo"connection was succesful<br>";
   $sql= INSERT INTO `query` (`s.no`, `name`, `email`, `phone`, `mssg`) VALUES (NULL, '$name', '$email', '$phone', '$desc');
    $result=mysqli_query($conn,$sql);
if ($result) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your credential have been submitted successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
$sql->close();
$conn->close();
}
else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Alert!</strong> we are facing technical issue your credential have not been submitted successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
}
}
}
header('location:index.html');  
?>