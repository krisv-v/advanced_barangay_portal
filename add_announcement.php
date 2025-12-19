<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $conn->query("INSERT INTO announcements(title, description, date) VALUES ('$title','$description','$date')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Announcement</title></head>
<body>
<h2>Add New Announcement</h2>
<form method="POST">
    Title: <input type="text" name="title" required><br>
    Description: <textarea name="description" required></textarea><br>
    Date: <input type="date" name="date" required><br>
    <input type="submit" value="Add Announcement">
</form>
</body>
</html>