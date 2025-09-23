<?php
$host = 'localhost';
$user = 'devops';
$pass = 'password';
$db   = 'studentdb';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$student = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE students SET name='$name', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Edit Student</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $student['email'] ?>" required><br><br>
    <input type="submit" value="Update Student">
</form>
<a href="index.php">⬅ Back</a>
</body>
</html>
