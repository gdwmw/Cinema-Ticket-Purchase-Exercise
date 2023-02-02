<?php
session_start();
include '../config.php';
$_SESSION["id"] = 3;
$id = '3';
$img = 'Image/Wakanda-Forever.jpg';
$title = 'Black Panther : Wakanda Forever';
$synopsis = 'The people of Wakanda fight to protect their home from intervening world powers as they mourn the death of King T\'\'Challa.';
$genre = 'Genre : Action';
$duration = 'Duration : 2 Hours 41 Minutes';
$director = 'Director : Ryan Coogler';
$age_rating = 'Age Rating : R13+';
$price = '50000';

$query = "UPDATE movie SET img='$img', title='$title', synopsis='$synopsis', genre='$genre', duration='$duration', director='$director', age_rating='$age_rating', price='$price' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: ../order.php");
}
?>