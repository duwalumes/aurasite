<?php
session_start();
require "db.php";

if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $stmt=$conn->prepare("SELECT * FROM users WHERE email=? AND role='admin'");
  $stmt->bind_param("s",$email);
  $stmt->execute();
  $result=$stmt->get_result();
  $user=$result->fetch_assoc();

  if($user && password_verify($password,$user['password'])){
    $_SESSION['admin']=$user['email'];
    header("Location: admin_dashboard.php");
  } else {
    echo "Invalid Admin";
  }
}
?>

<form method="POST">
<h2>Admin Login</h2>
<input type="email" name="email" required>
<input type="password" name="password" required>
<button name="login">Login</button>
</form>