<?php
include("header.php");
include("navbar.php");
?>

<!-- Section: Login -->
<section class="text-center text-lg-start">
    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                    <div class="card-body p-5 shadow-5 text-center">
                        <h2 class="fw-bold mb-5">Login</h2>

                        <form action="login.php" method="POST">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email_address" id="validationDefault01" class="form-control" required />
                                <label class="form-label" for="validationDefault01">Email address</label>
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="user_password" id="validationDefault02" class="form-control" required />
                                <label class="form-label" for="validationDefault02">Password</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                                Login
                            </button>


                            <div class="text-center">
                                <p>Not a member? <a href="signup.php">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- image -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="images/sydney-rae-geM5lzDj4Iw-unsplash.jpg" class="w-100 rounded-4 shadow-4" alt="" />
            </div>
            <!-- image -->

        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Login -->

<?php

if (isset($_POST['submit'])) {
    $submitted_email = $_POST['email_address'];
    $submitted_password = $_POST['user_password'];

    // verify user
    $verification_status = verify_user($submitted_email, $submitted_password);
    if ($verification_status) {
        echo '<script type="text/javascript">';
        echo 'window.location.href = "index.php"';
        echo '</script>';
    } else {
        echo $login_fail;
    }
}

include("footer.php")
?>