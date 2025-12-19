<?php
require 'config.php';

// Fetch residents
$residents = $conn->query("SELECT * FROM residents ORDER BY id ASC");

// Fetch announcements/events
$announcements = $conn->query("SELECT * FROM announcements ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Barangay Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Barangay Portal Dashboard</h1>

    <h2>Residents</h2>
    <a href="add_resident.php">Add New Resident</a>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Name</th><th>Age</th><th>Barangay</th><th>Actions</th></tr>
        <?php while($r = $residents->fetch_assoc()): ?>
        <tr <?php if($r['age']>=60) echo 'style="background-color:#FFDDDD"';?>>
            <td><?= $r['id'] ?></td>
            <td><?= $r['name'] ?></td>
            <td><?= $r['age'] ?></td>
            <td><?= $r['barangay'] ?></td>
            <td>
                <a href="edit_resident.php?id=<?= $r['id'] ?>">Edit</a> |
                <a href="delete_resident.php?id=<?= $r['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <h2>Announcements / Events</h2>
    <a href="add_announcement.php">Add New Announcement</a>
    <table border="1" cellpadding="5">
        <tr><th>ID</th><th>Title</th><th>Description</th><th>Date</th><th>Actions</th></tr>
        <?php while($a = $announcements->fetch_assoc()): ?>
        <tr>
            <td><?= $a['id'] ?></td>
            <td><?= $a['title'] ?></td>
            <td><?= $a['description'] ?></td>
            <td><?= $a['date'] ?></td>
            <td>
                <a href="edit_announcement.php?id=<?= $a['id'] ?>">Edit</a> |
                <a href="delete_announcement.php?id=<?= $a['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>