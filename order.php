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
    <title>Order</title>
</head>

<body style="background-color: blanchedalmond;">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body">

                            <?php
                            $id = $_SESSION["id"];
                            $query = "SELECT * FROM movie WHERE id = $id ORDER BY id";
                            $result = mysqli_query($conn, $query);
                            $row = mysqli_fetch_array($result);

                            echo "<div class='container mt-3'>
                                <div class='row'>
                                    <div class='col-md-2'>
                                        <img src='" . $row['img'] . "' style='width: 100%; height: 100%;'>
                                    </div>
                                    <div class='col-md-10'>
                                        <h5>
                                            " . $row['title'] . "
                                        </h5>
                                        <p>
                                            " . $row['synopsis'] . "
                                        </p>
                                        <p>
                                            " . $row['genre'] . "
                                        </p>
                                        <p>
                                            " . $row['duration'] . "
                                        </p>
                                        <p>
                                            " . $row['director'] . "
                                        </p>
                                        <p>
                                            " . $row['age_rating'] . "
                                        </p>
                                        <div class='col-md-2'>
                                        <div class='col-md-12'>
                                            <div class='input-group'>
                                                <span class='input-group-text'>Rp</span>
                                                <input type='number' class='form-control' value='" . number_format($row['price'], 0, ",", ".") . "' disabled>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>";
                            ?>

                            <div class="container mt-3">
                                <form class="row" method="post">
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date :</label>
                                        <input type="date" class="form-control" name="date" id="date" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="studio">Studio :</label>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="form-select mb-2" name="studio" id="studio" required>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                </select>
                                                <label class="form-label" for="bench">Select Bench :</label>
                                                <select class="form-select" size="13" name="bench" id="bench" required>
                                                    <option id="A1">A1</option>
                                                    <option id="A2">A2</option>
                                                    <option id="A3">A3</option>
                                                    <option id="A4">A4</option>
                                                    <option id="A5">A5</option>
                                                    <option id="A6">A6</option>
                                                    <option id="A7">A7</option>
                                                    <option id="A8">A8</option>
                                                    <option id="A9">A9</option>
                                                    <option id="A10">A10</option>
                                                    <option id="A11">A11</option>
                                                    <option id="A12">A12</option>
                                                    <option id="A13">A13</option>
                                                    <option id="A14">A14</option>
                                                    <option id="A15">A15</option>
                                                    <option id="A16">A16</option>
                                                    <option id="A17">A17</option>
                                                    <option id="A18">A18</option>
                                                    <option id="B1">B1</option>
                                                    <option id="B2">B2</option>
                                                    <option id="B3">B3</option>
                                                    <option id="B4">B4</option>
                                                    <option id="B5">B5</option>
                                                    <option id="B6">B6</option>
                                                    <option id="B7">B7</option>
                                                    <option id="B8">B8</option>
                                                    <option id="B9">B9</option>
                                                    <option id="B10">B10</option>
                                                    <option id="B11">B11</option>
                                                    <option id="B12">B12</option>
                                                    <option id="B13">B13</option>
                                                    <option id="B14">B14</option>
                                                    <option id="B15">B15</option>
                                                    <option id="B16">B16</option>
                                                    <option id="B17">B17</option>
                                                    <option id="B18">B18</option>
                                                    <option id="C1">C1</option>
                                                    <option id="C2">C2</option>
                                                    <option id="C3">C3</option>
                                                    <option id="C4">C4</option>
                                                    <option id="C5">C5</option>
                                                    <option id="C6">C6</option>
                                                    <option id="C7">C7</option>
                                                    <option id="C8">C8</option>
                                                    <option id="C9">C9</option>
                                                    <option id="C10">C10</option>
                                                    <option id="C11">C11</option>
                                                    <option id="C12">C12</option>
                                                    <option id="C13">C13</option>
                                                    <option id="C14">C14</option>
                                                    <option id="C15">C15</option>
                                                    <option id="C16">C16</option>
                                                    <option id="C17">C17</option>
                                                    <option id="C18">C18</option>
                                                    <option id="D1">D1</option>
                                                    <option id="D2">D2</option>
                                                    <option id="D3">D3</option>
                                                    <option id="D4">D4</option>
                                                    <option id="D5">D5</option>
                                                    <option id="D6">D6</option>
                                                    <option id="D7">D7</option>
                                                    <option id="D8">D8</option>
                                                    <option id="D9">D9</option>
                                                    <option id="D10">D10</option>
                                                    <option id="D11">D11</option>
                                                    <option id="D12">D12</option>
                                                    <option id="D13">D13</option>
                                                    <option id="D14">D14</option>
                                                    <option id="D15">D15</option>
                                                    <option id="D16">D16</option>
                                                    <option id="D17">D17</option>
                                                    <option id="D18">D18</option>
                                                    <option id="E1">E1</option>
                                                    <option id="E2">E2</option>
                                                    <option id="E3">E3</option>
                                                    <option id="E4">E4</option>
                                                    <option id="E5">E5</option>
                                                    <option id="E6">E6</option>
                                                    <option id="E7">E7</option>
                                                    <option id="E8">E8</option>
                                                    <option id="E9">E9</option>
                                                    <option id="E10">E10</option>
                                                    <option id="E11">E11</option>
                                                    <option id="E12">E12</option>
                                                    <option id="E13">E13</option>
                                                    <option id="E14">E14</option>
                                                    <option id="E15">E15</option>
                                                    <option id="E16">E16</option>
                                                    <option id="E17">E17</option>
                                                    <option id="E18">E18</option>
                                                    <option id="F1">F1</option>
                                                    <option id="F2">F2</option>
                                                    <option id="F3">F3</option>
                                                    <option id="F4">F4</option>
                                                    <option id="F5">F5</option>
                                                    <option id="F6">F6</option>
                                                    <option id="F7">F7</option>
                                                    <option id="F8">F8</option>
                                                    <option id="F9">F9</option>
                                                    <option id="F10">F10</option>
                                                    <option id="F11">F11</option>
                                                    <option id="F12">F12</option>
                                                    <option id="F13">F13</option>
                                                    <option id="F14">F14</option>
                                                    <option id="F15">F15</option>
                                                    <option id="F16">F16</option>
                                                    <option id="F17">F17</option>
                                                    <option id="F18">F18</option>
                                                    <option id="G1">G1</option>
                                                    <option id="G2">G2</option>
                                                    <option id="G3">G3</option>
                                                    <option id="G4">G4</option>
                                                    <option id="G5">G5</option>
                                                    <option id="G6">G6</option>
                                                    <option id="G7">G7</option>
                                                    <option id="G8">G8</option>
                                                    <option id="G9">G9</option>
                                                    <option id="G10">G10</option>
                                                    <option id="G11">G11</option>
                                                    <option id="G12">G12</option>
                                                    <option id="G13">G13</option>
                                                    <option id="G14">G14</option>
                                                    <option id="G15">G15</option>
                                                    <option id="G16">G16</option>
                                                    <option id="G17">G17</option>
                                                    <option id="G18">G18</option>
                                                    <option id="H1">H1</option>
                                                    <option id="H2">H2</option>
                                                    <option id="H3">H3</option>
                                                    <option id="H4">H4</option>
                                                    <option id="H5">H5</option>
                                                    <option id="H6">H6</option>
                                                    <option id="H7">H7</option>
                                                    <option id="H8">H8</option>
                                                    <option id="H9">H9</option>
                                                    <option id="H10">H10</option>
                                                    <option id="H11">H11</option>
                                                    <option id="H12">H12</option>
                                                    <option id="H13">H13</option>
                                                    <option id="H14">H14</option>
                                                    <option id="H15">H15</option>
                                                    <option id="H16">H16</option>
                                                    <option id="H17">H17</option>
                                                    <option id="H18">H18</option>
                                                    <option id="I1">I1</option>
                                                    <option id="I2">I2</option>
                                                    <option id="I3">I3</option>
                                                    <option id="I4">I4</option>
                                                    <option id="I5">I5</option>
                                                    <option id="I6">I6</option>
                                                    <option id="I7">I7</option>
                                                    <option id="I8">I8</option>
                                                    <option id="I9">I9</option>
                                                    <option id="I10">I10</option>
                                                    <option id="I11">I11</option>
                                                    <option id="I12">I12</option>
                                                    <option id="I13">I13</option>
                                                    <option id="I14">I14</option>
                                                    <option id="I15">I15</option>
                                                    <option id="I16">I16</option>
                                                    <option id="I17">I17</option>
                                                    <option id="I18">I18</option>
                                                    <option id="J1">J1</option>
                                                    <option id="J2">J2</option>
                                                    <option id="J3">J3</option>
                                                    <option id="J4">J4</option>
                                                    <option id="J5">J5</option>
                                                    <option id="J6">J6</option>
                                                    <option id="J7">J7</option>
                                                    <option id="J8">J8</option>
                                                    <option id="J9">J9</option>
                                                    <option id="J10">J10</option>
                                                    <option id="J11">J11</option>
                                                    <option id="J12">J12</option>
                                                    <option id="J13">J13</option>
                                                    <option id="J14">J14</option>
                                                    <option id="J15">J15</option>
                                                    <option id="J16">J16</option>
                                                    <option id="J17">J17</option>
                                                    <option id="J18">J18</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="film">Film :</label>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input name='film' class='form-control mb-2' type='text' value=<?php echo "'" .
                                                    $row['title'] . "'"; ?> disabled>
                                                <label class="form-label" for="time">Select Time :</label>
                                                <select class="form-select" size="13" name="time" id="time" required>
                                                    <option>09:00</option>
                                                    <option>10:00</option>
                                                    <option>11:00</option>
                                                    <option>12:00</option>
                                                    <option>13:00</option>
                                                    <option>14:00</option>
                                                    <option>15:00</option>
                                                    <option>16:00</option>
                                                    <option>17:00</option>
                                                    <option>18:00</option>
                                                    <option>19:00</option>
                                                    <option>20:00</option>
                                                    <option>21:00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-grid gap-2 col-6 mx-auto">
                                        <input type="submit" class="btn btn-primary" value="Payment" name="order">
                                    </div>
                                    <img src="Image/Denah-Studio.jpg" class="mt-4 col-md-12">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>