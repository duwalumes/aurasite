<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>AURA Robotics</title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<button onclick="toggleDark()">🌙</button>

<h1>AURA Robotics</h1>

<div id="countdown"></div>

<section class="stats">
  <div><h2 class="counter" data-target="500">0</h2><p>Students</p></div>
  <div><h2 class="counter" data-target="50">0</h2><p>Workshops</p></div>
  <div><h2 class="counter" data-target="20">0</h2><p>Competitions</p></div>
</section>

<a href="register.php">Register</a>
<a href="login.php">Login</a>
<a href="admin_login.php">Admin</a>

<script src="assets/script.js"></script>
</body>
</html>