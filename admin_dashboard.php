<?php
session_start();
require "db.php";

if(!isset($_SESSION['admin'])){
  header("Location: admin_login.php");
}

$result = $conn->query("SELECT * FROM users WHERE role='student'");
?>

<h2>Admin Dashboard</h2>
<a href="logout.php">Logout</a>

<table border="1">
<tr><th>Name</th><th>Email</th><th>Action</th></tr>
<?php while($row=$result->fetch_assoc()): ?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td>
<a href="delete_student.php?id=<?= $row['id'] ?>">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>