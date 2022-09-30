<?php
include("head.php");
include("header.php");
include("../connect.php");

$sql = "SELECT `firstName`, `lastName`, `emailAddress`, `proficiency`, `nationalId` FROM `jobapplication`";
$result = $db->query($sql);

?>

<h5 class="text-center text-primary">Therapists</h5>
<hr>
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Name</th>
            <th>Proficiency</th>
            <th>Email Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < $result->num_rows; $i++) {

            $applicant = $result->fetch_assoc();

            $firstName = $applicant['firstName'];
            $lastName = $applicant['lastName'];
            $emailAddress = $applicant['emailAddress'];
            $proficiency = $applicant['proficiency'];
            $nationalId = $applicant['nationalId'];

            include("applicationItem.php");
        }

        ?>
    </tbody>
</table>





<?php include("footer.php") ?>