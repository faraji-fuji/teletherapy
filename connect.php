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
`resume` VARCHAR(100)
)";

//connection to the database
$db = new mysqli($db_server_name, $db_user_name, $db_password, $db_name);

//Create relevant tables
$db->query($query_create_table_signup);
$db->query($query_create_table_job_application);

//functions to insert data into the relevant tables
function insert_into_signup(
    $f_name,
    $l_name,
    $email_addr,
    $user_password
) {
    global $db, $signup_success, $signup_fail;
    $result = $db->query(
        "INSERT INTO `signup` (
        `first_name`, 
        `last_name`, 
        `email`, 
        `user_password`
        ) VALUES(
            '$f_name', 
            '$l_name', 
            '$email_addr', 
            '$user_password'
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
        `resume`
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
            '$resume'
            )"
    );
    return $result;
}

//function to verify users
function  verify_user($submitted_email, $submitted_password)
{
    global $db;
    $result = $db->query("SELECT * FROM `signup` WHERE email = '$submitted_email'");
    $row = $result->fetch_assoc();
    if ($submitted_password == $row['user_password']) {
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

// echo $db->error;
