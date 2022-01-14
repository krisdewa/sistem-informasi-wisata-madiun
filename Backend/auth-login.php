<?php
    include('function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <!-- <div class="auth-logo">
                        <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                    </div> -->
                    <h1 class="auth-title" style="color: #137ECB;">Log in</h1>
                    <p class="auth-subtitle mb-4">Admin Wisata Madiun </p><br>

                    <form action="auth-login.php" method="POST" id="login">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username"
                                placeholder="username or email" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password"
                                placeholder="password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <!-- <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                I'm not a robot
                            </label>
                        </div> -->
                        <div class="form-group position-relative has-icon-left mb-1">
                            <div class="g-recaptcha" data-sitekey="6Le1Jn8dAAAAABL7H26Fcl6_E3y5O8JcAyz6hnRh"></div>
                        </div>

                        <button type="submit" style="background-color: #137ECB;"  class="btn btn-primary btn-block btn-lg shadow-lg mt-5" name="login"
                            value="login">Log in</button>
                    </form>

                    <p> <br> CATATAN <br> Apabila Lupa username dan password, silahkan menghubungi Admin Website</p>

                    <div class="text-center mt-2 text-lg fs-4">
                        <!-- <p class="text-gray-600" style="color: #137ECB;">Don't have an account? <a href="auth-register.php"
                                class="font-bold" style="color: #137ECB;">Sign up</a>.</p> -->
                        <p class="text-gray-600" style="color: #137ECB;">Back to  <a href="../index.php"
                                class="font-bold" style="color: #137ECB;">Home</a>.</p>
                        <!-- <p><a class="font-bold" style="color: #137ECB;" href="auth-forgot-password.php">Forgot password?</a>.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <img style="width: 1100px; height: 900px;" src="assets/img/login/login.jpg" alt="foto"></a>
                </div>
            </div>
        </div>

    </div>

    <!-- JAVASCRIPT RECAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</script>
</body>

</html>