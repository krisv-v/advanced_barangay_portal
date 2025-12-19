<?php
require 'config.php';
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM residents WHERE id=$id")->fetch_assoc();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $barangay = $_POST['barangay'];
    $conn->query("UPDATE residents SET name='$name', age=$age, barangay='$barangay' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Resident</title></head>
<body>
<h2>Edit Resident</h2>
<form method="POST">
    Name: <input type="text" name="name" value="<?= $res['name'] ?>" required><br>
    Age: <input type="number" name="age" value="<?= $res['age'] ?>" required><br>
    Barangay: <input type="text" name="barangay" value="<?= $res['barangay'] ?>" required><br>
    <input type="submit" value="Update Resident">
</form>
</body>
</html>