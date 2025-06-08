<?php
session_start();
require_once '../config/database.php';

// Check if user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

// Get post ID from URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    header("Location: index.php");
    exit;
}

// Get image path before deleting
$sql = "SELECT image_path FROM blog_posts WHERE id = ?";
if ($stmt = mysqli_prepare($conn, $sql)) {
    mysqli_stmt_bind_param($stmt, "i", $id);
    if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $image_path = $row['image_path'];
        }
    }
    mysqli_stmt_close($stmt);
}

// Delete the post
$sql = "DELETE FROM blog_posts WHERE id = ?";
if ($stmt = mysqli_prepare($conn, $sql)) {
    mysqli_stmt_bind_param($stmt, "i", $id);
    if (mysqli_stmt_execute($stmt)) {
        // Delete the image file if it exists
        if (!empty($image_path) && file_exists("../" . $image_path)) {
            unlink("../" . $image_path);
        }
    }
    mysqli_stmt_close($stmt);
}

header("Location: index.php");
exit;
?> 