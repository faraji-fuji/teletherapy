<?php
include("header.php")
?>
<div class="container my-4 ">
    <div class="row justify-content-evenly">
        <div class="col-5 shadow">
            <form action="login.php" method="POST">
                <div class="mb-3 my-4">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email_address" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="user_password" id="exampleInputPassword1">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                <div class="my-4"></div>
            </form>
        </div>
    </div>
</div>
<?php

if (isset($_POST['submit'])) {
    $submitted_email = $_POST['email_address'];
    $submitted_password = $_POST['user_password'];

    // verify user
    $verification_status = verify_user($submitted_email, $submitted_password);
    if ($verification_status) {
        echo '<script type="text/javascript">';
        echo 'window.location.href = "index_member.php"';
        echo '</script>';
    } else {
        echo $login_fail;
    }
}

include("footer.php")
?>