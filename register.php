<?php
session_start();
require "db.php";

if(isset($_POST['register'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");
  $stmt->bind_param("sss",$name,$email,$password);

  if($stmt->execute()){
    echo "Registered Successfully!";
  } else {
    echo "Error: ".$stmt->error;
  }
}
?>

<form method="POST">
<h2>Register</h2>
<input type="text" name="name" required>
<input type="email" name="email" required>
<input type="password" name="password" required>
<button name="register">Register</button>
</form>