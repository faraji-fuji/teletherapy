<?php
// fetch services from db from 
$sql = "SELECT * FROM  `service`";
$res = $db->query($sql);
?>


<!-- Section: Our Services -->
<div style="position: relative;" data-draggable="true" draggable="false" class="" id="our-services">
    <!---->
    <!---->
    <section draggable="false" class="container pt-5" data-v-271253ee="">
        <section class="mb-2 text-center">
            <h2 class="fw-bold mb-7 text-center">Our Services<br></h2>
            <div class="row gx-lg-5">

                <?php
                for ($i = 0; $i < $res->num_rows; $i++) {
                    $service = $res->fetch_assoc();
                    $name = $service['name'];
                    $description = $service['description'];
                    $image = $service['image'];
                    include("servicesItem.php");
                }
                ?>

            </div>
        </section>
    </section>
    <!---->
</div>