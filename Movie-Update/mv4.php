<?php
session_start();
include '../config.php';
$_SESSION["id"] = 4;
$id = '4';
$img = 'Image/Justice-League.jpg';
$title = 'Justice League';
$synopsis = 'Fueled by his restored faith in humanity and inspired by Superman\'\'s selfless act, Bruce Wayne enlists the help of his new-found ally, Diana Prince, to face an even greater enemy.';
$genre = 'Genre : Action, Science Fiction, Adventure';
$duration = 'Duration : 2 Hours 0 Minutes';
$director = 'Director : Joss Whedon, Zack Snyder';
$age_rating = 'Age Rating : R13+';
$price = '50000';

$query = "UPDATE movie SET img='$img', title='$title', synopsis='$synopsis', genre='$genre', duration='$duration', director='$director', age_rating='$age_rating', price='$price' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    header("Location: ../order.php");
}
?>