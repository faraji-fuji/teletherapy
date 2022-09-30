<?php
include("head.php");
include("header.php");
include("../connect.php");

// get national id from GET
$nationalId = $_GET['nationalId'];

// get profile data from the database
$sql = "SELECT * FROM `jobapplication` WHERE `nationalId` = '$nationalId'";
$res = $db->query($sql);
$row = $res->fetch_assoc();

// store fetched data in variables
$firstName = $row['firstName'];
$lastName = $row['lastName'];
$nationalId = $row['nationalId'];
$dateOfBirth = $row['dateOfBirth'];
$gender = $row['gender'];
$emailAddress = $row['emailAddress'];
$phoneNumber = $row['phoneNumber'];
$laptop = $row['laptop'];
$proficiency = $row['proficiency'];
$workHours = $row['workHours'];
$motivation = $row['motivation'];
$resume = $row['resume'];
$status = $row['status'];

?>

<section>
    <div class="container  bg-light">

        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                    <div class="card-body text-center">
                        <h5 class="my-3"><?= $firstName . " " . $lastName ?></h5>
                        <p class="text-muted mb-1"><?= $proficiency ?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary">Approve</button>
                            <button type="button" class="btn btn-outline-primary ms-1">Reject</button>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">

                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-envelope fa-lg text-warning"></i>
                                <p class="mb-0"><?= $emailAddress ?></p>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fa fa-phone fa-lg" style="color: #333333;"></i>
                                <p class="mb-0"><?= $phoneNumber ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">First Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $firstName ?> </p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Last Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"> <?= $lastName ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">National ID</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $nationalId ?></p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Date of Birth</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $dateOfBirth ?></p>
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
                            <div class="card-body shadow">

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
                                        <p class="text-muted mb-0"><?= $workHours ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card shadow mb-4 mb-md-0">
                            <div class="card-header">
                                <h5>Motivation</h5>
                            </div>
                            <div class="card-body">
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