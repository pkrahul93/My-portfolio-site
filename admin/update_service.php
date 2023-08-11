<?php include 'sidebar.php'; ?>

<?php
$g_id = $_GET['id'];
$message = '';
if (isset($_POST["edit_service"])) {
    $s_name = $_POST["sname"];
    $icon = $_POST["icon"];
    $dtl = $_POST["details"];
    $status = $_POST["status"];
    $date = date('Y-m-d');

    $query = "UPDATE `services` SET `service_name` = '$s_name', `icon` = '$icon', `service_dtl` = '$dtl', `status` = '$status', `added_on` = '$date' WHERE id = '$g_id' ";

    if (mysqli_query($connect, $query)) {
        $message = 'Service has been updated Sucessfully.';
    } else {
        $message = 'Sorry Service has not been updateed yet . Due to ' . mysqli_error($connect);
    }
}

if (isset($g_id) && $g_id != '') {
    $sql = "SELECT * FROM services WHERE id = $g_id";
    $res = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($res);
}

?>

<style>
    .bx {
        font-size: 100px !important;
    }
</style>
<div class="container">
    <h3 class="text-center" style="padding-top:60px;">Update Current Service</h3>
    <h4 class="text-center" style="color:#FF9E00;"><?php echo $message ?> </h4>

    <form method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">

                    <input type="text" name="sname" class="form-control" value="<?php echo $row['service_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="icon">Current Icon</label>
                    <div class="icon text-center"><?php echo $row['icon']; ?></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="icon">Icon Code</label>
                    <input type="text" name="icon" class="form-control" value="<?php echo htmlspecialchars($row['icon']); ?>">
                </div>
                <div class="form-group">
                    <label for="icon">Status</label>
                    <select name="status" class="form-control">
                        <option value="Selected disabled" class="form-control">
                            <?php
                            if ($row['status'] = 1) {
                                echo "Active";
                            } else {
                                echo "Deactive";
                            }
                            ?>
                        </option>
                        <option value="1" class="form-control">Active</option>
                        <option value="0" class="form-control">Deactive</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="icon">Service Details</label>
                    <textarea name="details" rows="10" style="width: 100%;padding:10px;"><?php echo $row['service_dtl']; ?></textarea>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="mx-auto">
                    <input type="submit" name="edit_service" value="Update Service" class="btn btn-primary">
                </div>
            </div>
        </div>

    </form>

</div>

<?php include 'footer.php'; ?>