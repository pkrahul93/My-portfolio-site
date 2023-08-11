<?php include 'sidebar.php'; ?>

<?php
$message = '';
if (isset($_GET['type']) && $_GET['type'] != '') {
    $type = get_safe_value($connect, $_GET['type']);
    if ($type == 'status') {
        $operation = get_safe_value($connect, $_GET['operation']);
        $id = get_safe_value($connect, $_GET['id']);
        if ($operation == 'active') {
            $status = '1';
        } else {
            $status = '0';
        }
        $update_status = "update `services` set status = '$status' where id = '$id' ";
        mysqli_query($connect, $update_status);
    }

    if ($type == 'delete') {
        $id = get_safe_value($connect, $_GET['id']);
        $del_sql = "delete from `services` where id = '$id' ";
        mysqli_query($connect, $del_sql);
        if (mysqli_query($connect, $query)) {
            $message = "Service Deleted Successfully.";
        }
    }
}

?>
<style>
    .bx {
        font-size: 50px !important;
    }
</style>
<div>
    <h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">All Services</h3>
</div>
<div class="container" style="padding:20px;">
    <?php echo $message ?>
</div>
<div class="card-body">
    <div class="table table-responsive">

        <a href="add_service.php" style="float:right;margin:5px;" class="btn btn-primary">Add New Service</a>

        <?php
        $sql = "SELECT * FROM `services` ";
        $result = mysqli_query($connect, $sql);
        $count = 1;
        ?>

        <table class="table table-bordered" id="example" width="100%" cellspacing="0">
            <thead style="background: #2E59D9;color: white;">
                <tr>
                    <th>S_No</th>
                    <th>Service_Name</th>
                    <th>Picture/Icon</th>
                    <th>Details</th>
                    <th>Added_On</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['service_name']; ?></td>
                            <td>
                                <div class="icon text-center"><?php echo $row['icon']; ?></div>
                            </td>
                            <td><?php echo $row['service_dtl']; ?></td>
                            <td><?php echo $row['added_on']; ?></td>
                            <td>
                                <?php
                                if ($row['status'] == 1) {
                                    echo "<a class='btn btn-success' href='?type=status&operation=deactive&id=" . $row['id'] . "'>Approved</a>&nbsp;";
                                } else {
                                    echo "<a class='btn btn-primary' href='?type=status&operation=active&id=" . $row['id'] . "'>Pending</a>&nbsp;";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="update_service.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
                                <a href="?type=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" style="margin:5px;float:left;"><i class="fa fa-trash" aria-hidden="true"></i></a>

                            </td>

                        </tr>
                <?php

                    }
                } else {

                    echo "No Record Found";
                }
                ?>
            </tbody>
        </table>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    </div>
</div>




<?php include 'footer.php'; ?>