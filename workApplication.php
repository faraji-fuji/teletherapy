<!-- Section: Work With Us -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="background-image: url('assets/images/lgbtqcropped.jpg'); height: 300px;"></div>
    <!-- Background image -->
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">WORK WITH US</h2>

                    <form enctype="multipart/form-data" method="POST" action="work.php">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="firstName" id="validationDefault01" class="form-control" required />
                                    <label class="form-label" for="validationDefault01">First name</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" name="lastName" id="validationDefault02" class="form-control" required />
                                    <label class="form-label" for="validationDefault02">Last name</label>
                                </div>
                            </div>
                        </div>

                        <!-- ID Number -->
                        <div class="form-outline mb-4">
                            <input type="tel" name="nationalId" id="validationDefault03" placeholder="" class="form-control" required />
                            <label class="form-label" for="validationDefault03">National ID Number</label>
                        </div>

                        <!-- DOB -->
                        <div class="form-outline mb-4">
                            <input type="date" name="dateOfBirth" id="validationDefault04" placeholder="" class="form-control" required />
                            <label class="form-label" for="validationDefault04">DATE OF BIRTH</label>
                        </div>

                        <!-- Gender -->
                        <div class="mb-4">
                            <label for="inputState1" class="form-label">Gender</label>
                            <select id="inputState1" class="form-select" name="gender">
                                <option selected>--SELECT--</option>
                                <option>MALE</option>
                                <option>FEMALE</option>
                                <option>OTHER</option>
                            </select>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="emailAddress" id="validationDefault05" class="form-control" required />
                            <label class="form-label" for="validationDefault05">Email address</label>
                        </div>

                        <!-- Phone Number -->
                        <div class="form-outline mb-4">
                            <input type="tel" name="phoneNumber" id="validationDefault06" placeholder="254" class="form-control" required />
                            <label class="form-label" for="validationDefault06">Phone Number</label>
                        </div>

                        <!-- do you have a laptop -->
                        <div class="mb-4">
                            <label for="inputState2" class="form-label">Do you have a laptop?</label>
                            <select id="inputState2" class="form-select" name="laptop">
                                <option selected>--SELECT--</option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <!-- proficiency -->
                        <div class="mb-4">
                            <label for="inputState3" class="form-label">What area are proficient in?</label>
                            <select id="inputState3" class="form-select" name="proficiency">
                                <option selected>--SELECT--</option>
                                <option>DEPRESSION</option>
                                <option>ANXIETY</option>
                                <option>LGBTQ+</option>
                                <option>GRIEF</option>
                                <option>MARRIAGE AND FAMILY</option>
                                <option>WORK</option>

                            </select>
                        </div>

                        <!-- willing to work 24hrs -->
                        <div class="mb-4">
                            <label for="inputState4" class="form-label">Are you willing to work on a 24 hour basis?</label>
                            <select id="inputState4" class="form-select" name="workHours">
                                <option selected>--SELECT--</option>
                                <option>YES</option>
                                <option>NO</option>
                            </select>
                        </div>

                        <!-- Motivation -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" name="motivation" aria-label="With textarea" placeholder="Not more than 250 words"></textarea>
                            <label class="form-label" for="form3Example3">Motivation</label>
                        </div>

                        <!-- CV Input -->
                        <label for="inputGroupFile02" class="form-label my-2 visually-hidden">Profile Photo</label>
                        <div class="input-group mb-4">
                            <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                            <input type="file" name="userfile" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload CV</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                            SUBMIT APPLICATION
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Work With Us -->

<?php

if (isset($_POST['submit'])) {
    // get user data from the form and sanitize
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nationalId = $_POST['nationalId'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $gender = $_POST['gender'];
    $emailAddress = $_POST['emailAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $laptop = $_POST['laptop'];
    $proficiency = $_POST['proficiency'];
    $workHours = $_POST['workHours'];
    $motivation = $_POST['motivation'];
    $resume = $_FILES['userfile']['name'];

    // upload resume
    $uploads_dir = "resumes/";
    $destination = $uploads_dir . $_FILES['userfile']['name'];
    $status = move_uploaded_file($_FILES['userfile']['tmp_name'], $destination);

    // save user data into job application table
    $status = insertJobApplication(
        $firstName,
        $lastName,
        $nationalId,
        $dateOfBirth,
        $gender,
        $emailAddress,
        $phoneNumber,
        $laptop,
        $proficiency,
        $workHours,
        $motivation,
        $resume
    );

    // appropriate message depending on the status
    if ($status) {
        echo $application_success;
    } else {
        echo $application_fail;
    }
}
?>