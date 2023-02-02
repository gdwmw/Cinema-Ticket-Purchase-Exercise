<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: signin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Koneksi file (.css & .js) -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="script.js"></script>
    <!-- Title Website -->
    <title>Home</title>
</head>

<body style="background-color: blanchedalmond;">
    <section class=vh-100>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class=col-md-12>
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class=card-body>
                            <h2 class="mt-2 text-center">--- NOW SHOWING ---</h2>
                            <div class="container mt-3">
                                <div class=row>

                                    <div class="col-sm-2">
                                        <a href="Movie-Update/mv1.php">
                                            <img src="Image/Black-Adam.jpg" class="img-thumbnail"
                                                style="width: 189px; height: 142,5px;">
                                        </a>
                                        <p class="mb-0 text-ellipsis"><a href="Movie-Update/mv1.php">Black Adam</a>
                                        </p>
                                        <span>2022</span>
                                    </div>

                                    <div class="col-sm-2">
                                        <a href="Movie-Update/mv2.php">
                                            <img src="Image/Spider-Man.jpg" class="img-thumbnail"
                                                style="width: 189px; height: 142,5px;">
                                        </a>
                                        <p class="mb-0 text-ellipsis"><a href="Movie-Update/mv2.php">Spider-Man: No
                                                Way
                                                Home</a></p>
                                        <span>2021</span>
                                    </div>

                                    <div class="col-sm-2">
                                        <a href="Movie-Update/mv3.php">
                                            <img src="Image/Wakanda-Forever.jpg" class="img-thumbnail"
                                                style="width: 189px; height: 142,5px;">
                                        </a>
                                        <p class="mb-0 text-ellipsis"><a href="Movie-Update/mv3.php">Black Panther:
                                                Wakanda Forever</a></p>
                                        <span>2022</span>
                                    </div>

                                    <div class="col-sm-2">
                                        <a href="Movie-Update/mv4.php">
                                            <img src="Image/Justice-League.jpg" class="img-thumbnail"
                                                style="width: 189px; height: 142,5px;">
                                        </a>
                                        <p class="mb-0 text-ellipsis"><a href="Movie-Update/mv4.php">Justice
                                                League</a>
                                        </p>
                                        <span>2017</span>
                                    </div>

                                    <div class="col-sm-2">
                                        <a href="Movie-Update/mv5.php">
                                            <img src="Image/Avatar-2.jpg" class="img-thumbnail"
                                                style="width: 189px; height: 142,5px;">
                                        </a>
                                        <p class="mb-0 text-ellipsis"><a href="Movie-Update/mv5.php">Avatar: The Way
                                                of
                                                Water</a></p>
                                        <span>2022</span>
                                    </div>

                                    <div class="col-sm-2">
                                        <a href="Movie-Update/mv6.php">
                                            <img src="Image/Avenger-Endgame.jpg" class="img-thumbnail"
                                                style="width: 189px; height: 142,5px;">
                                        </a>
                                        <p class="mb-0 text-ellipsis"><a href="Movie-Update/mv6.php">Avengers:
                                                Endgame</a></p>
                                        <span>2019</span>
                                    </div>
                                    <hr class="my-4">
                                    <h5 class="mt-2 text-center">- HISTORY -</h5>
                                    <div class="overflow-scroll">
                                        <table class="table table-warning table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">No</th>
                                                    <th scope="col" class="text-center">Film</th>
                                                    <th scope="col" class="text-center">Studio - Bench</th>
                                                    <th scope="col" class="text-center">Date</th>
                                                    <th scope="col" class="text-center">Time</th>
                                                    <th scope="col" class="text-center">Price</th>
                                                    <th scope="col" class="text-center">Status</th>
                                                    <th scope="col" class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include 'config.php';
                                                // menampilkan data dari tabel history
                                                $query = "SELECT * FROM history ORDER BY id DESC";
                                                $result = mysqli_query($conn, $query);

                                                $no = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo "<tr>";
                                                    echo "<th class='no text-center' scope='row'>" . $no . "</th>";
                                                    echo "<td class='text-center'>" . $row['film'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['studio'] . " - " . $row['bench'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['date'] . "</td>";
                                                    echo "<td class='text-center'>" . $row['time'] . "</td>";
                                                    echo "<td class='text-center'>" . "Rp " . number_format($row['price'], 0, ",", ".") . "</td>";
                                                    echo "<td class='text-center'>" . $row['status'] . "</td>";
                                                    echo "<td class='text-center'>";
                                                    echo "<form method='post'>";
                                                    echo "<style> a:hover, a:active, a:focus {text-decoration: none; color: black;} </style>";
                                                    echo "<button id='ticket" . $row['id'] . "' class='btn btn-warning btn-sm' disabled><a href='ticket.php?id=" . $row['id'] . "'>Ticket</a></button> ";
                                                    echo "</form>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                    if ($row['status'] == 'Accepted') {
                                                        echo "<script>
                                                        document.getElementById('ticket" . $row['id'] . "').disabled = false;
                                                        </script>";
                                                    } elseif ($row['status'] == 'Rejected') {
                                                        echo "<script>
                                                        document.getElementById('ticket" . $row['id'] . "').disabled = true;
                                                        </script>";
                                                    }
                                                    $no++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <hr class="my-4">
                                    <div class="d-grid gap-2 d-md-block text-end">
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            onclick="location.href='signout.php'">Sign-out</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>