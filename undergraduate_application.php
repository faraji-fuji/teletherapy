<?php
include("header.php")
?>

<!-- <div class="container">
    <div class="row justify-content-evenly">
        <div class="col-4">
            <img src="images\lgbtqcropped.jpg" width="200" alt="">
        </div>
    </div>
</div> -->

<div class="container-fluid application-container">
    <div class="row justify-content-evenly">
        <div class="col-6">
            <form class="row g-3 application_form bg-light shadow rounded my-5" action="undergraduate_application.php" enctype="multipart/form-data" method="POST">
                <div class="col">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name">
                </div>
                <div class="col-12">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="">
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Date of Birth</label>
                    <input type="date" name="date_of_birth" class="form-control" id="age" placeholder="">
                </div>

                <div class="col">
                    <label for="inputState2" class="form-label">Gender</label>
                    <select id="inputState2" name="gender" class="form-select">
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Prefer Not to Say</option>
                    </select>
                </div>
                <div></div>
                <div class="col">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email_addr" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">National ID</label>
                    <input type="text" name="national_id" class="form-control" id="id" placeholder="">
                </div>

                <div class="input-group">
                    <span class="input-group-text">Motivation</span>
                    <textarea class="form-control" name="motivation" aria-label="With textarea" placeholder="Not more than 250 words"></textarea>
                </div>

                <div>
                    <div>
                        <label for="q1">Are willing to be working on a 24 hr basis?</label>
                    </div>
                    <span class="form-check form-check-inline" id="q1">
                        <input class="form-check-input" type="radio" name="question_a" value="Yes" id="inlineRadio1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </span>
                    <span class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="question_a" value="No" id="inlineRadio2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </span>
                </div>

                <div>
                    <div>
                        <label for="q1">Do you have a laptop?</label>
                    </div>
                    <span class="form-check form-check-inline" id="q2">
                        <input class="form-check-input" type="radio" name="question_b"  value="Yes"id="inlineRadio3">
                        <label class="form-check-label" for="inlineRadio3">Yes</label>
                    </span>
                    <span class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="question_b" value="No" id="inlineRadio4">
                        <label class="form-check-label" for="inlineRadio3">No</label>
                    </span>
                </div>

                <div class="col-md-4">
                    <label for="inputState1" class="form-label">Under which subcategory are you proficient with?</label>
                    <select id="inputState1" class="form-select" name="question_c">
                        <option selected>Choose...</option>
                        <option>Depression</option>
                        <option>Anxiety</option>
                        <option>LGBTQ+</option>
                        <option>Grief</option>
                        <option>Marriage and Family</option>
                    </select>
                </div>

                <div class="input-group mb-3">
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                    <input type="file"  name="userfile" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload CV</label>
                </div>

                <div class="col-12 my-2">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
                <div></div>
            </form>
        </div>
    </div>
</div>
<?php

include("connect.php");

if(isset($_POST['submit'])){
    $f_name = $_POST['first_name'];
    $l_name = $_POST['last_name'];
    $dob = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $email = $_POST['email_addr'];
    $national_id = $_POST['national_id'];
    $resume = $_FILES['userfile']['name'];
    $motivation = $_POST['motivation'];
    $q1 = $_POST['question_a'];
    $q2 = $_POST['question_b'];
    $q3 = $_POST['question_c'];

    $application_status = insert_into_jobapplication($f_name, $l_name, $dob, $gender, $email, $national_id, $resume, $motivation, $q1, $q2, $q3);
    if ($application_status){
        echo $application_success;
    }
    else {
        echo $application_fail;
    }

    $uploads_dir = "resumes/";
    $destination = $uploads_dir.$_FILES['userfile']['name'];
    $status = move_uploaded_file($_FILES['userfile']['tmp_name'], $destination);
} 

include("footer.php")
?>