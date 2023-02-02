<?php
session_start();
include '../config.php';
$_SESSION["id"] = 2;
$id = '2';
$img = 'Image/Spider-Man.jpg';
$title = 'Spider-Man : No Way Home';
$synopsis = 'With Spider-Man is identity now revealed, Peter asks Doctor Strange to help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.';
$genre = 'Genre : Action, Science Fiction, Adventure';
$duration = 'Duration : 2 Hours 28 Minutes';
$director = 'Director : Jon Watts';
$age_rating = 'Age Rating : R13+';
$price = '50000';

$query = "UPDATE movie SET img='$img', title='$title', synopsis='$synopsis', genre='$genre', duration='$duration', director='$director', age_rating='$age_rating', price='$price' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: ../order.php");
}
?>