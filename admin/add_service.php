<?php include 'sidebar.php'; ?>

<?php

$message = '';
if (isset($_POST["add_service"])) {
    $s_name = mysqli_real_escape_string($connect,$_POST["sname"]);
    $icon = mysqli_real_escape_string($connect,$_POST["icon"]);
    $dtl = mysqli_real_escape_string($connect,$_POST["details"]);
    $status = mysqli_real_escape_string($connect,$_POST["status"]);
    $date = date('Y-m-d');

    $query = "INSERT INTO `services` (`id`, `service_name`, `icon`, `service_dtl`, `status`, `added_on`) VALUES (NULL, '$s_name', '$icon', '$dtl', '$status', '$date')";

    if (mysqli_query($connect, $query)) {
        $message = 'Service has been added Sucessfully.';
    } else {
        $message = 'Sorry Service has not been added yet into database. Due to ' . mysqli_error($connect);
    }
}

?>

<div class="container">
    <h3 class="text-center" style="padding-top:60px;">Add New Project</h3>
    <h4 class="text-center" style="color:#FF9E00;"><?php echo $message ?> </h4>

    <form method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="sname">Service Name</label>
                    <input type="text" name="sname" class="form-control" placeholder="Service Name">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="status">Select Status</label>
                    <select name="status" class="form-control">
                        <option value="Selected disabled" class="form-control">Select Status</option>
                        <option value="1" class="form-control">Active</option>
                        <option value="0" class="form-control">Deactive</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="icon">Icons</label>
                    <input type="text" name="icon" class="form-control" placeholder="Icon....">
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="icon">Service Details</label>
                    <textarea name="details" rows="10" style="width: 100%;"></textarea>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="mx-auto">
                    <input type="submit" name="add_service" value="Add Service" class="btn btn-primary">
                </div>
            </div>
        </div>

    </form>

</div>

<?php include 'footer.php'; ?>