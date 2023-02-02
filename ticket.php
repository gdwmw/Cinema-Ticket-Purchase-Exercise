<?php
include 'config.php';
include 'function.php';
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
    <title>Ticket</title>
</head>

<body style="background-color: blanchedalmond;">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-6">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body">

                            <?php
                            $id = $_GET['id'];
                            $query = "SELECT * FROM history WHERE id=$id";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_array($result);
                            ?>

                            <!-- Judul -->
                            <h3 class="text-center mb-2">--- Ticket ---</h3>
                            <div class='container'>
                                <div class='row' method="post">

                                    <hr class="my-4">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <div class="col-md-6 text-start">
                                            <p class='mb-0' style='font-weight: bold;'>TOTAL :</p>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <?php echo "<p class='mb-0' style='font-weight: bold;'>" . "Rp " . number_format($row['price'], 0, ",", ".") . "</p>"; ?>
                                        </div>
                                    </div>
                                    <hr class="my-4">

                                    <div class="col-md-12">
                                        <div class="col-md-6 text-start">
                                            <span>Code :</span>
                                            <?php echo "<p style='font-weight: bold;'>" . $row['code'] . "</p>"; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6 text-start">
                                            <span>Film :</span>
                                            <?php echo "<p style='font-weight: bold;'>" . $row['film'] . "</p>"; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12 text-start">
                                            <span>Studio - Bench :</span>
                                            <?php echo "<p style='font-weight: bold;'>" . $row['studio'] . " - " . $row['bench'] . "</p>"; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6 text-start">
                                            <span>Date :</span>
                                            <?php echo "<p style='font-weight: bold;'>" . $row['date'] . "</p>"; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6 text-start">
                                            <span>Time :</span>
                                            <?php echo "<p style='font-weight: bold;'>" . $row['time'] . "</p>"; ?>
                                        </div>
                                    </div>
                                    <span>Product Description :</span>
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <div class="col-md-6 text-start">
                                            <?php echo "<p style='font-weight: bold;'>1 Ticket x " . "Rp " . number_format($row['price'], 0, ",", ".") . " :</p>"; ?>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <?php
                                            $price = $row['price'];
                                            $sum = 1 * $price;
                                            echo "<p style='font-weight: bold;'>" . "Rp " . number_format($sum, 0, ",", ".") . "</p>";
                                            ?>
                                        </div>
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