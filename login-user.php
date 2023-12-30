<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
?>



<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="form-server/node_modules/app.js" defer></script>
</head>
<body>
    
   
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active" style="opacity: 0.9;">
                    <img class="w-100" src="img/bg.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                </div>
    <!-- Carousel End -->


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <form action="login-user.php" method="POST" onsubmit="return handleLoginForm(this)">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LeqIBUpAAAAAO5Ix6ZutoslW3jPsXpvp6RQX145"></div>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function handleLoginForm(form) {
        const captchaResponse = grecaptcha.getResponse();

        if (!captchaResponse.length > 0) {
            alert("Please complete the reCAPTCHA!");
            return false;
        }

        // Add the reCAPTCHA response to the form data
        form.appendChild(createHiddenInput('g-recaptcha-response', captchaResponse));

        return true; // Allow the form to submit
    }

    function createHiddenInput(name, value) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = value;
        return input;
    }
</script>

</body>
</html>