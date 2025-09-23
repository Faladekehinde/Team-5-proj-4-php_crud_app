<?php
$host = 'localhost';
$user = 'devops';
$pass = 'password';
$db   = 'studentdb';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM students");

echo "<!DOCTYPE html>
<html>
<head>
<title>PHP CRUD App</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<h1>PHP CRUD App - Almost a DevOps Engineer!</h1>
<a href='add.php'>➕ Add New Student</a>
<table>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>";

while($row = $result->fetch_assoc()) {
  echo "<tr>
          <td>{$row['id']}</td>
          <td>{$row['name']}</td>
          <td>{$row['email']}</td>
          <td>
            <a href='edit.php?id={$row['id']}'>✏ Edit</a> | 
            <a href='delete.php?id={$row['id']}'>🗑 Delete</a>
          </td>
        </tr>";
}

echo "</table>
</body>
</html>";

$conn->close();
?>
