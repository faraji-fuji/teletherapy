<?php
$db_server_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_name = "therapy";

//initial connection to the database server
$db_server = new mysqli($db_server_name, $db_user_name, $db_password);
$db_server->query("CREATE DATABASE therapy");

// mysql queries to create relevant tables
// signup
$query_create_table_signup = "CREATE TABLE client (
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email_address VARCHAR(30) PRIMARY KEY,
    `password` VARCHAR(50)
    )";

// job application
$query_create_table_job_application = "CREATE TABLE job_application (
first_name VARCHAR(50),
last_name VARCHAR(50),
national_id VARCHAR(12) PRIMARY KEY,
date_of_birth DATE,
gender VARCHAR(20),
email_address VARCHAR(30),
phone_number VARCHAR(12),
laptop VARCHAR(10),
proficiency VARCHAR(50),
work_hours VARCHAR(10),
motivation VARCHAR(300),
`resume` VARCHAR(100),
`status` INT
)";

//connection to the database
$db = new mysqli($db_server_name, $db_user_name, $db_password, $db_name);

//Create relevant tables
$db->query($query_create_table_signup);
$db->query($query_create_table_job_application);

//functions to insert data into the relevant tables
function insert_into_client(
    $first_name,
    $last_name,
    $email_address,
    $password
) {
    global $db;
    $result = $db->query(
        "INSERT INTO `client` (
        `first_name`, 
        `last_name`, 
        `email_address`, 
        `password`
        ) VALUES(
            '$first_name', 
            '$last_name', 
            '$email_address', 
            '$password'
            )"
    );
    return $result;
}

function insert_into_jobapplication(
    $first_name,
    $last_name,
    $national_id,
    $date_of_birth,
    $gender,
    $email_address,
    $phone_number,
    $laptop,
    $proficiency,
    $work_hours,
    $motivation,
    $resume
) {
    global $db;
    $result = $db->query(
        "INSERT INTO `job_application` (
        `first_name`, 
        `last_name`,
        `national_id`,
        `date_of_birth`, 
        `gender`, 
        `email_address`,
        `phone_number`,
        `laptop`,
        `proficiency`,
        `work_hours`,
        `motivation`, 
        `resume`,
        `status`
        ) VALUES (
            '$first_name',
            '$last_name',
            '$national_id',
            '$date_of_birth',
            '$gender',
            '$email_address',
            '$phone_number',
            '$laptop',
            '$proficiency',
            '$work_hours',
            '$motivation',
            '$resume',
            0
            )"
    );
    return $result;
}

//function to verify users
function  verify_user($submitted_email, $submitted_password)
{
    global $db;
    $result = $db->query("SELECT * FROM `client` WHERE `email_address` = '$submitted_email'");
    $row = $result->fetch_assoc();
    if ($submitted_password == $row['password']) {
        return 1;
    } else return 0;
}


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


// service table
// create service table
$sql = "CREATE TABLE `service` (
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `name` VARCHAR(20),
    `description` VARCHAR(300),
    `image` VARCHAR(50)
)";

$db->query($sql);

// function to insert into service table
function insert_service($name, $description, $image)
{
    global $db;

    $sql = "INSERT INTO `service`(`id`,`name`,`description`,`image`) VALUES (NULL, '$name', '$description', '$image')";
    $res = $db->query($sql);
    if ($res) {
    } else {
        echo $db->error;
        echo $db->errno;
    }
}
