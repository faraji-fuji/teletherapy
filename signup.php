<?php
include("header.php")
?>

<!-- Section: Sign Up -->
<section class="text-center">

    <!-- Background image -->
    <div class="p-5 bg-image" style="background-image: url('images/lgbtqcropped.jpg'); height: 300px;"></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Sign Up Now</h2>

                    <form enctype="multipart/form-data" method="POST" action="signup.php">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="first_name" id="validationDefault03" class="form-control" required />
                                    <label class="form-label" for="validationDefault03">First name</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="last_name" id="validationDefault04" class="form-control" required />
                                    <label class="form-label" for="validationDefault04">Last name</label>
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email_address" id="validationDefault05" class="form-control" required />
                            <label class="form-label" for="validationDefault05">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="validationDefault07" class="form-control" required />
                            <label class="form-label" for="validationDefault07">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="validationDefault08" class="form-control" required />
                            <label class="form-label" for="validationDefault08">Repeat Password</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="sign_up" class="btn btn-primary btn-block mb-4">
                            Sign up
                        </button>

                        <div class="text-center">
                            <p>Already have an account? <a href="login.php"> Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Sign Up -->

<?php

if (isset($_POST['sign_up'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    $signup_status = insert_into_client(
        $first_name,
        $last_name,
        $email_address,
        $password
    );

    if ($signup_status) {
        echo $signup_success;
    } else {
        echo $signup_fail;
    }
}

include("footer.php")
?>