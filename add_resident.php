<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $barangay = $_POST['barangay'];
    $conn->query("INSERT INTO residents(name, age, barangay) VALUES ('$name',$age,'$barangay')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Resident</title></head>
<body>
<h2>Add New Resident</h2>
<form method="POST">
    Name: <input type="text" name="name" required><br>
    Age: <input type="number" name="age" required><br>
    Barangay: <input type="text" name="barangay" required><br>
    <input type="submit" value="Add Resident">
</form>
</body>
</html>