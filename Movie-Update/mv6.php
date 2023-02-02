<?php
session_start();
include '../config.php';
$_SESSION["id"] = 6;
$id = '6';
$img = 'Image/Avenger-Endgame.jpg';
$title = 'Avengers: Endgame';
$synopsis = 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\'\' actions and restore balance to the universe.';
$genre = 'Genre : Action, Adventure, Drama';
$duration = 'Duration : 3 Hours 1 Minutes';
$director = 'Director : Anthony Russo, Joe Russo, Jacob Shrimpton';
$age_rating = 'Age Rating : R13+';
$price = '50000';

$query = "UPDATE movie SET img='$img', title='$title', synopsis='$synopsis', genre='$genre', duration='$duration', director='$director', age_rating='$age_rating', price='$price' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: ../order.php");
}
?>