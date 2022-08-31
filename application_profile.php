<?php include("head.php");

// get national id from GET
$national_id = $_GET['national_id'];

// get profile data from the database
$sql = "SELECT * FROM `job_application` WHERE `national_id` = '$national_id'";
$res = $db->query($sql);
$row = $res->fetch_assoc();

// store fetched data in variables
$first_name = $row['first_name'];
$last_name = $row['last_name'];
$national_id = $row['national_id'];
$date_of_birth = $row['date_of_birth'];
$gender = $row['gender'];
$email_address = $row['email_address'];
$phone_number = $row['phone_number'];
$laptop = $row['laptop'];
$proficiency = $row['proficiency'];
$work_hours = $row['work_hours'];
$motivation = $row['motivation'];
$resume = $row['resume'];
$status = $row['status'];

?>

<section style="background-color: #eee;">
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="images/resizedprofi.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $first_name . " " . $last_name ?></h5>
                        <p class="text-muted mb-1"><?= $proficiency ?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Approve</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Reject</button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">

                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-envelope fa-lg text-warning"></i>
                                <p class="mb-0"><?= $email_address ?></p>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-phone fa-lg" style="color: #333333;"></i>
                                <p class="mb-0"><?= $email_address ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">First Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $first_name ?> </p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Last Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"> <?= $last_name ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">National ID</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $national_id ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Date of Birth</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $date_of_birth ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Gender</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $gender ?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Laptop?</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-muted mb-0"><?= $laptop ?></p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">Proficiency?</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-muted mb-0"><?= $proficiency ?></p>
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="mb-0">24hr basis?</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="text-muted mb-0"><?= $work_hours ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <h5>Motivation</h5>
                                <p>
                                    <?= $motivation ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>