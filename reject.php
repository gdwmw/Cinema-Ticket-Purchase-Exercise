<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: signin.php");
    exit;
}
?>

<?php
include 'config.php';

$id = $_GET['id'];
$status = 'Rejected';

$query = "UPDATE history SET status='$status' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: page-admin.php");
}
?>