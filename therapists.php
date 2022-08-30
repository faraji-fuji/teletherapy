<?php
include("header.php")
?>

<div class="container marketing my-4">
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4 ">
      <img src="images\resizedprof.jpg" alt="" width="150" class="rounded-circle justify-content-evenly">
      <h2 class="fw-normal">Heading</h2>
      <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Appointment &raquo;</button>
    </div>

    <!-- /.col-lg-4 -->
    <div class="col-lg-4 ">
      <img src="images\resizedprofi.jpg" alt="" width="150" class="rounded-circle justify-content-evenly">
      <h2 class="fw-normal">Heading</h2>
      <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Appointment &raquo;</button>
    </div>

    <!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img src="images\resizedprofile.jpg" alt="" width="150" class="rounded-circle justify-content-evenly">
      <h2 class="fw-normal">Heading</h2>
      <p>And lastly this, the third column of representative placeholder content.</p>
      <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Appointment &raquo;</button>
    </div>
    <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form class="row g-3">
            <div class="col-md-6">
              <label for="appointment_date" class="form-label">Date</label>
              <input type="date" class="form-control" id="appointment_date">
            </div>
            <div class="col-md-6">
              <label for="appointment_time" class="form-label">Time</label>
              <input type="time" class="form-control" id="appointment_time">
            </div>
            <div class="col-12">
              <select class="form-select" aria-label="Default select example">
                <option selected>Select Payment Method</option>
                <option value="1">Mpesa</option>
                <option value="2">Credit Card</option>
                <option value="3">Paypal</option>
              </select>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-secondary">Book Appointment</button>
            </div>
            <div></div>
          </form>


        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>
</div>
<?php
include("footer.php")
?>