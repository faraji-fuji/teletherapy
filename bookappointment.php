<?php
include("header.php");
?>


<!-- <div class="container">
    <form action="bookappointment.php" method="Post">
        <div class="row">
            <label for="appointment_date">Date</label>
            <input type="date" id="appointmen_date">
        </div>
        <div class="row">
            <label for="appointment_time">Time</label>
            <input type="time" id="appointment_time">
        </div>
        <div class="row">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Payment Method</option>
                <option value="1">Mpesa</option>
                <option value="2">Credit Card</option>
                <option value="3">Paypal</option>
            </select>
        </div>
        <div class="row">
            <button>submit</button>
        </div>
    </form>
</div> -->

<div class="container  my-4">
    <div class="row justify-content-evenly">
        <div class="col-8 shadow">
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
                    <button type="submit" class="btn btn-primary">Book Appointment</button>
                </div>
                <div></div>
            </form>
        </div>
    </div>
</div>



    
    
    

    
   
    
</form>
<?php
include("footer.php");
