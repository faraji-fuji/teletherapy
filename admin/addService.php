<!-- add service form  -->
<h5 class="text-center text-primary mb-2">ADD SERVICE</h5>
<hr>

<div class="card mx-4 mx-md-5 mt-5">
    <div class="card-body py-5 px-md-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <form enctype="multipart/form-data" action="addService.php" method="POST">

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input name="name" type="text" id="form4Example1" class="form-control">
                        <label class="form-label" for="form4Example1" style="margin-left: 0px;">Name</label>
                        <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px;"></div>
                            <div class="form-notch-middle" style="width: 42.4px;"></div>
                            <div class="form-notch-trailing"></div>
                        </div>
                    </div>

                    <!-- Description input -->
                    <div class="form-outline mb-4">
                        <textarea name="description" class="form-control" id="form4Example3" rows="4"></textarea>
                        <label class="form-label" for="form4Example2" style="margin-left: 0px;">Description</label>
                        <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px;"></div>
                            <div class="form-notch-middle" style="width: 60px;"></div>
                            <div class="form-notch-trailing"></div>
                        </div>
                    </div>

                    <!-- Image Input -->
                    <label for="inputGroupFile02" class="form-label my-2 visually-hidden">Image</label>
                    <div class="input-group mb-4">
                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                        <input type="file" name="userfile" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload Image</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="add" class="btn btn-primary btn-block" aria-controls="#picker-editor">ADD</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php
// handle add service

if (isset($_POST['add'])) {
    // fetch data from post
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['userfile']['name'];

    // handle image upload
    $uploads_dir = "../assets/images/services/";
    $destination = $uploads_dir . $_FILES['userfile']['name'];
    $status = move_uploaded_file($_FILES['userfile']['tmp_name'], $destination);
    if ($status) {
        // echo "file uploaded succesfuly";
    } else {
        // echo "file was not uploaded";
    }

    // sanitize and validate external input

    // store data in persistent storage(database)
    $status = insert_service($name, $description, $image);
    if ($status) {
        // added successfuly
    } else {
        // something went wrong
    }
}

?>