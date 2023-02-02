<?php
session_start();
if (!isset($_SESSION["admin"])) {
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
                            <h2 class="mt-2 text-center">--- ADMIN ---</h2>
                            <div class="container mt-3">
                                <div class=row>
                                    <hr class="my-4">
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
                                                    echo "<style> a:hover, a:active, a:focus {text-decoration: none; color: white;} </style>";
                                                    echo "<button id='accept" . $row['id'] . "' class='btn btn-success btn-sm'><a class='aedit' style='color: white;' href='accept.php?id=" . $row['id'] . "'>Accept</a></button> ";
                                                    echo "<button id='reject" . $row['id'] . "' class='btn btn-danger btn-sm'><a class='aedit' style='color: white;' href='reject.php?id=" . $row['id'] . "'>Reject</a></button> ";
                                                    echo "</form>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                    if ($row['status'] == 'Accepted') {
                                                        echo "<script>
                                                        document.getElementById('accept" . $row['id'] . "').disabled = true;
                                                        document.getElementById('reject" . $row['id'] . "').disabled = true;
                                                        </script>";
                                                    } elseif ($row['status'] == 'Rejected') {
                                                        echo "<script>
                                                        document.getElementById('accept" . $row['id'] . "').disabled = true;
                                                        document.getElementById('reject" . $row['id'] . "').disabled = true;
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