<?php
require 'config.php';
$id = $_GET['id'];
$ann = $conn->query("SELECT * FROM announcements WHERE id=$id")->fetch_assoc();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $conn->query("UPDATE announcements SET title='$title', description='$description', date='$date' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Announcement</title></head>
<body>
<h2>Edit Announcement</h2>
<form method="POST">
    Title: <input type="text" name="title" value="<?= $ann['title'] ?>" required><br>
    Description: <textarea name="description" required><?= $ann['description'] ?></textarea><br>
    Date: <input type="date" name="date" value="<?= $ann['date'] ?>" required><br>
    <input type="submit" value="Update Announcement">
</form>
</body>
</html>