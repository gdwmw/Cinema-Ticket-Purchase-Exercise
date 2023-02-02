<?php
session_start();
include '../config.php';
$_SESSION["id"] = 1;
$id = '1';
$img = 'Image/Black-Adam.jpg';
$title = 'Black Adam';
$synopsis = 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods and imprisoned just as quickly Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.';
$genre = 'Genre : Action, Adventure, Fantasy, Science';
$duration = 'Duration : 2 Hours 12 Minutes';
$director = 'Director : Jaume Collet-Serra';
$age_rating = 'Age Rating : R13+';
$price = '50000';

$query = "UPDATE movie SET img='$img', title='$title', synopsis='$synopsis', genre='$genre', duration='$duration', director='$director', age_rating='$age_rating', price='$price' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: ../order.php");
}
?>