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
    <title>Signup</title>
</head>

<body style="background-color: blanchedalmond;">
    <!-- Koneksi file (.php) -->
    <?php
    include 'config.php';
    include 'function.php';
    ?>
    <!-- Form Card -->
    <form action="" method="post">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <!-- Judul -->
                                <h3 class="text-center mb-4">SIGN-UP</h3>
                                <!-- Input Username -->
                                <div class="input-group mb-3">
                                    <input name="usrname" type="text" class="form-control" id="username"
                                        placeholder="Username" oninput="validateUsername()" maxlength="16"
                                        pattern="[a-z0-9]+" required>
                                </div>
                                <small class="form-text text-muted mb-3" id="warning-username"
                                    style="display:none">(Characters allowed are only a-z, 0-9)
                                    </br>Username must be between 5 and 16 characters!</small>
                                <!-- Input Password -->
                                <div class="input-group mb-3">
                                    <input name="passwrd" oninput="validatePassword()" type="password"
                                        class="form-control" id="passwordInput" placeholder="Password" maxlength="16"
                                        required>
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-eye-fill password-icon" onclick="hideunhide()"></i></span>
                                </div>
                                <small class="form-text text-muted mb-3" id="warning-password"
                                    style="display:none">Password
                                    must be at least 8 characters long,
                                    including at least 1 uppercase letter and 1 number!</small>
                                <!-- Input Confirm Password -->
                                <div class="input-group mb-3">
                                    <input name="cpasswrd" oninput="validatecPassword()" type="password"
                                        class="form-control" id="cpasswordInput" placeholder="Confirm Password"
                                        maxlength="16" required>
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-eye-fill cpassword-icon" onclick="chideunhide()"></i></span>
                                </div>
                                <small class="form-text text-muted mb-3" id="warning-cpassword"
                                    style="display:none">Passwords don't match!</small>
                                <!-- Tombol untuk ke halaman Sign-in -->
                                <p class="text-center mt-2">Already have an account? <a href="signin.php"
                                        class="link-info">Sign-in</a></p>
                                <!-- Tombol Submit untuk Sign-up -->
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="mt-3 btn btn-primary" type="submit" name="signup">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>