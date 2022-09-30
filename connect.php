<?php
$db_server_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_name = "therapy";

//database instance
$db = new mysqli($db_server_name, $db_user_name, $db_password, $db_name);

// client table
// create client table
$sql = "CREATE TABLE IF NOT EXISTS `client` (
    `firstName` VARCHAR(50),
    `lastName` VARCHAR(50),
    `emailAddress` VARCHAR(50) UNIQUE,
    `password` VARCHAR(50),
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `createdAt` DATETIME DEFAULT CURRENT_TIMESTAMP
)";

$db->query($sql);

// function to insert into client table
function insertClient(
    $firstName,
    $lastName,
    $emailAddress,
    $password
) {
    global $db;

    $sql = "INSERT INTO 
    `client` (
        `firstName`,
        `lastName`, 
        `emailAddress`, 
        `password`
        ) 
        VALUES(
            '$firstName', 
            '$lastName', 
            '$emailAddress', 
            '$password'
        )";

    $result = $db->query($sql);
    if ($result) {
        return $result;
    } else {
        echo $db->error;
        return $result;
    }
}

// service table
// create service table
$sql = "CREATE TABLE IF NOT EXISTS `service` (
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `name` VARCHAR(20),
    `description` VARCHAR(300),
    `image` VARCHAR(50),
    `createdAt` DATETIME DEFAULT CURRENT_TIMESTAMP
)";

$db->query($sql);

// function to insert into service table
function insertService($name, $description, $image)
{
    global $db;

    $sql = "INSERT INTO `service`(
        `name`,
        `description`,
        `image`
        ) VALUES (
            '$name', 
            '$description', 
            '$image'
        )";

    $result = $db->query($sql);
    if ($result) {
        return $result;
    } else {
        echo $db->error;
        return $result;
    }
}

// job application table
// create
$sql = "CREATE TABLE IF NOT EXISTS `jobApplication` (
    `firstName` VARCHAR(50),
    `lastName` VARCHAR(50),
    `nationalId` VARCHAR(12) PRIMARY KEY,
    `dateOfBirth` DATE,
    `gender` VARCHAR(20),
    `emailAddress` VARCHAR(30),
    `phoneNumber` VARCHAR(12),
    `laptop` VARCHAR(10),
    `proficiency` VARCHAR(50),
    `workHours` VARCHAR(10),
    `motivation` VARCHAR(300),
    `resume` VARCHAR(100),
    `status` INT,
    `createdAt` DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

$db->query($sql);

// function to insert into job application table
function insertJobApplication(
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
) {
    global $db;

    $sql = "INSERT INTO `jobApplication` (
        `firstName`, 
        `lastName`,
        `nationalId`,
        `dateOfBirth`, 
        `gender`, 
        `emailAddress`,
        `phoneNumber`,
        `laptop`,
        `proficiency`,
        `workHours`,
        `motivation`, 
        `resume`,
        `status`
        ) VALUES (
            '$firstName',
            '$lastName',
            '$nationalId',
            '$dateOfBirth',
            '$gender',
            '$emailAddress',
            '$phoneNumber',
            '$laptop',
            '$proficiency',
            '$workHours',
            '$motivation',
            '$resume',
            0
            )";

    $result = $db->query($sql);
    if ($result) {
        return $result;
    } else {
        echo $db->error;
        return $result;
    }
}


// functionalities
//function to verify users
function  verifyUser($submittedEmail, $submittedPassword)
{
    global $db;
    $result = $db->query("SELECT * FROM `client` WHERE `emailAddress` = '$submittedEmail'");
    $row = $result->fetch_assoc();
    if ($submittedPassword == $row['password']) {
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['emailAddress'] = $row['emailAddress'];
        $_SESSION['loginStatus'] = TRUE;
        return 1;
    } else {
        return 0;
    }
}



// therapist table
// create
$sql = "CREATE TABLE IF NOT EXISTS `therapist`(
    `id`,
    `availability`
)";


//js alerts
$signup_success = <<< EOT
<script>
alert("Sign Up successful! Proceed to login");
</script>
EOT;

$signup_fail = <<< EOT
<script>
alert("Something went wrong! Please Contact Support.");
</script>
EOT;

$application_success = <<< EOT
<script>
alert("Your Application has been submitted successfully.");
</script>
EOT;

$application_fail = <<< EOT
<script>
alert("Something went wrong! Please Contact Support.");
</script>
EOT;

$login_fail = <<< EOT
<script>
alert("Wrong Username or Password!");
</script>
EOT;
