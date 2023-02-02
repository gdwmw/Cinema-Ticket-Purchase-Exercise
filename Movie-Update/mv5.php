<?php
session_start();
include '../config.php';
$_SESSION["id"] = 5;
$id = '5';
$img = 'Image/Avatar-2.jpg';
$title = 'Avatar: The Way of Water';
$synopsis = 'Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na\'\'vi race to protect their home.';
$genre = 'Genre : Action, Adventure, Fantasy';
$duration = 'Duration : 3 Hours 12 Minutes';
$director = 'Director : James Cameron';
$age_rating = 'Age Rating : R13+';
$price = '50000';

$query = "UPDATE movie SET img='$img', title='$title', synopsis='$synopsis', genre='$genre', duration='$duration', director='$director', age_rating='$age_rating', price='$price' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: ../order.php");
}
?>