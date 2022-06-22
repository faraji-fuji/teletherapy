<?php
$db_server_name = "localhost";
$db_user_name = "root";
$db_password = "";
$db_name = "therapy";

//initial connection to the database server
$db_server = new mysqli($db_server_name, $db_user_name, $db_password);
$db_server->query("CREATE DATABASE therapy"); 

//mysql queries to create relevant tables
$query_create_table_signup = "CREATE TABLE signup (
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(30) PRIMARY KEY,
    user_password VARCHAR(50)
    )";
    
$query_create_table_jobapplication = "CREATE TABLE jobapplication (
first_name VARCHAR(50),
last_name VARCHAR(50),
Date_of_birth DATE,
gender VARCHAR(20),
email VARCHAR(30),
national_id INT PRIMARY KEY,
user_resume VARCHAR(100),
motivation VARCHAR(300),
user_availability VARCHAR(10),
laptop VARCHAR(10),
choice varchar(10)
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

    
//connection to the database
$db = new mysqli($db_server_name, $db_user_name, $db_password, $db_name);

//Create relevant tables
$db->query($query_create_table_signup);
$db->query($query_create_table_jobapplication);


//functions to insert data into the relevant tables
function insert_into_signup($f_name, $l_name, $email_addr, $user_password){
    global $db, $signup_success, $signup_fail;
    $result = $db->query("INSERT INTO `signup` (`first_name`, `last_name`, `email`, `user_password`) VALUES('$f_name', '$l_name', '$email_addr', '$user_password')");
    return $result;
}

function insert_into_jobapplication($f_name, $l_name, $dob, $gender, $email, $national_id, $resume, $motivation, $q1, $q2, $q3){
    global $db, $aplication_success, $signup_fail;
    $result = $db->query("INSERT INTO `jobapplication` (`first_name`, `last_name`, `Date_of_birth`, `gender`, `email`, `national_id`, `user_resume`, `motivation`, `user_availability`, `laptop`, `choice`) VALUES ('$f_name', '$l_name', '$dob', '$gender', '$email', '$national_id', '$resume', '$motivation', '$q1', '$q2', '$q3')");
    return $result;
}

//function to verify users
function  verify_user($submitted_email, $submitted_password){
    global $db;
    $result = $db->query("SELECT * FROM `signup` WHERE email = '$submitted_email'");
    $row = $result->fetch_assoc();
    if ($submitted_password == $row['user_password']){
        return 1;
    }
    else return 0;
}
?>

