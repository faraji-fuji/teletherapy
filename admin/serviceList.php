<?php
// fetch services from db from 
$sql = "SELECT * FROM  `service`";
$res = $db->query($sql);
?>

<h5 class="text-center text-primary">AVAILABLE SERVICES</h5>
<hr>
<table class="table align-middle mb-0 bg-white mb-5">
    <thead class="bg-light">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php
        for ($i = 0; $i < $res->num_rows; $i++) {
            $service = $res->fetch_assoc();
            $name = $service['name'];
            $description = $service['description'];
            $image = $service['image'];
            include("serviceListItem.php");
        }
        ?>
    </tbody>
</table>