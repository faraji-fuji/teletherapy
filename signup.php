<?php
include("header.php")
?>
<div class="container my-4 shadow">
    <div class="row justify-content-evenly">
        <div class="col-7">
            <form action="signup.php" method="POST">
                <div class="mb-3 my-4">
                    <label for="formGroupExampleInput" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="formGroupExampleInput" placeholder="E.g. John">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="formGroupExampleInput2" placeholder="E.g. Doe">
                </div>
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email_address" id="inputEmail4">
                </div>
                <div class="mb-3">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" name="user_password"id="inputPassword4">
                </div>
                <div class="mb-3">
                    <label for="inputPassword4" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="inputPassword4">
                </div>
                <div class="col-12">
                    <button type="submit" name="sign_up" class="btn btn-primary">Sign up</button>
                </div>
                <div class="my-4"></div>
            </form>
        </div>
        <div class="col">
            <img src="images\sydney-rae-geM5lzDj4Iw-unsplash.jpg" width="450" alt="">
        </div>
    </div>   
</div>

<?php
include("connect.php");
if (isset($_POST['sign_up'])){
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $email_addr = $_POST['email_address'];
    $user_password = $_POST['user_password'];
    
    $signup_status = insert_into_signup($f_name, $l_name, $email_addr, $user_password);
    if ($signup_status){
        echo $signup_success;
    }
    else{
        echo $signup_fail;
    }
}

include("footer.php")
?>