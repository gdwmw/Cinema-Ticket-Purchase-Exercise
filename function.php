<?php
// Memulai Session
session_start();
// jika tombol signin di tekan maka jalankan aksinya
if (isset($_POST['signin'])) {

    $usrname = $_POST['usrname'];
    $passwrd = $_POST['passwrd'];

    $result = mysqli_query($conn, "SELECT * FROM account WHERE usrname = '$usrname'");
    // memeriksa username jika data ditemukan jalankan aksinya
    if (mysqli_num_rows($result) === 1) {
        // memeriksa password jika data ditemukan jalankan aksinya
        $row = mysqli_fetch_assoc($result);
        if (password_verify($passwrd, $row["passwrd"])) {
            // memeriksa tipe jika data ditemukan jalankan aksinya
            if ($row["tipe"] == 'user') {
                $_SESSION["user"] = true;
                header("Location: page-user.php");
                exit;
            } else {
                $_SESSION["admin"] = true;
                header("Location: page-admin.php");
                exit;
            }
        }
    }
    // jika data tidak di temukan maka error sama dengan true
    $error = true;
}

// jika tombol signup di tekan maka jalankan aksinya
if (isset($_POST['signup'])) {
    // menghilangkan karakter spesial dan spasi
    $usrname = preg_replace('/[^a-z0-9]/', '', $_POST['usrname']);
    // mengubah ke huruf kecil
    $usrname = strtolower($usrname);
    // menghilangkan spasi dari awal dan akhir
    $usrname = trim($usrname);
    // menyaring input menggunakan mysqli_real_escape_string
    $usrname = mysqli_real_escape_string($conn, $usrname);
    // memeriksa apakah input memiliki panjang yang sesuai
    if (strlen($usrname) > 16 || strlen($usrname) < 5) {
        echo "<script>alert('Username must be between 5 and 16 characters!');</script>";
        return false;
    }
    // memeriksa apakah username sudah digunakan
    $check_query = "SELECT * FROM account WHERE usrname = '$usrname'";
    $result = mysqli_query($conn, $check_query);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username already taken!');</script>";
        return false;
    }
    // memeriksa apakah password cocok
    $passwrd = $_POST['passwrd'];
    $cpasswrd = $_POST['cpasswrd'];
    if ($passwrd !== $cpasswrd) {
        echo "<script>alert('Passwords don\'t match!');</script>";
        return false;
    }
    // memeriksa kekuatan password
    if (!preg_match('/^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-zA-Z0-9!@#\$%\^&\*])[a-zA-Z0-9!@#\$%\^&\*]{8,20}$/', $passwrd)) {
        echo "<script>alert('Password must be at least 8 characters long, including at least 1 uppercase letter and 1 number!');</script>";
        return false;
    }
    // hash kata sandi menggunakan password_hash
    $options = [
        'cost' => 12,
    ];
    $hash_passwrd = password_hash($passwrd, PASSWORD_BCRYPT, $options);
    // jika passwrd tidak sama dengan cpasswrd maka jalankan aksi
    if ($passwrd !== $cpasswrd) {
        echo "<script>alert('Passwords don\'t match!');</script>";
        return false;
    } else { // memasukan data ke mySQL
        $query = "INSERT INTO account (usrname, passwrd, tipe) VALUES ('$usrname', '$hash_passwrd', 'user')";
        // alert jika signup berhasil/gagal
        if (mysqli_query($conn, $query)) {
            echo "<script>
                alert('Sign-up berhasil!');
                document.location.href='signin.php';
                </script>";
        } else {
            echo "<script>
                    alert('Sign-up gagal!');
                    document.location.href='signin.php';
                    </script>";
        }
    }
}

if (isset($_POST['order'])) {
    $gid = $_SESSION["id"];
    $gquery = "SELECT * FROM movie WHERE id = $gid ORDER BY id";
    $result = mysqli_query($conn, $gquery);
    $row = mysqli_fetch_array($result);

    $id = 1;
    $film = $row['title'];
    $studio = $_POST['studio'];
    $bench = $_POST['bench'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $price = $row['price'];

    $query = "UPDATE payment SET film='$film', studio='$studio', bench='$bench', date='$date', time='$time', price='$price' WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        header("Location: payment.php");
    }
}

if (isset($_POST['buy'])) {
    $gquery = "SELECT * FROM payment ORDER BY id";
    $result = mysqli_query($conn, $gquery);
    $row = mysqli_fetch_array($result);

    $film = $row['film'];
    $studio = $row['studio'];
    $bench = $row['bench'];
    $date = $row['date'];
    $time = $row['time'];
    $price = $row['price'];
    $number = '1234567890';
    $randomNumber = 'TCKET';
    for ($i = 0; $i < 5; $i++) {
        $randomNumber .= $number[rand(0, strlen($number) - 1)];
    }
    $code = $randomNumber;
    $status = 'Waiting';

    $query = "INSERT INTO history (film, studio, bench, date, time, price, code, status) VALUES ('$film', '$studio', '$bench', '$date','$time','$price', '$code', '$status')";
    if (mysqli_query($conn, $query)) {
        header("Location: page-user.php");
    }

}
?>