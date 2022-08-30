<?php
include("header.php");
include("navbar.php");

// Get category id from GET
$category_id = $_GET['category'];

// Set category from category id
switch ($category_id) {
  case 1:
    $category = "Marriage and Family";
    break;
  case 2:
    $category = "Depression";
    break;
  case 3:
    $category = "LGBTQ+";
    break;
  case 4:
    $category = "Anxiety";
    break;
  case 5:
    $category = "Grief";
    break;
  case 6:
    $category = "Work";
    break;
  default:
    $category = "";
}

?>

<!-- Therapists Per Category -->
<div data-draggable="true" style="position: relative;">
  <!---->
  <!---->
  <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
    <section class="mb-5">
      <!-- Background image -->
      <div class="p-5 text-center bg-image" style="background-image: url(images/croppeddepression.jpg); height: 500px; background-size: cover; background-position: 50% 50%; background-color: rgba(0, 0, 0, 0);" aria-controls="#picker-editor"></div> <!-- Background image -->
      <div class="container">
        <div class="card mx-4 mx-md-5 text-center shadow-5-strong" style=" margin-top: -170px; background: hsla(0, 0%, 100%, 0.5); backdrop-filter: blur(30px); ">
          <div class="card-body px-4 py-5 px-md-5">
            <h1 class="display-3 fw-bold ls-tight mb-4">
              <span><?= $category ?></span>
            </h1>
          </div>

          <!-- cards -->
          <?php include("therapists_card.php") ?>
          <?php include("therapists_card.php") ?>
          <?php include("therapists_card.php") ?>

        </div>
      </div>
    </section>
  </section>
  <!---->
</div>


<?php
include("footer.php")
?>