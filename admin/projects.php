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
        $update_status = "update `projects` set status = '$status' where id = '$id' ";
        mysqli_query($connect, $update_status);
    }

    if ($type == 'delete') {
        $id = get_safe_value($connect, $_GET['id']);
        $del_sql = "delete from `projects` where id = '$id' ";
        mysqli_query($connect, $del_sql);
        if (mysqli_query($connect, $query)) {
            $message = "Project Deleted Successfully.";
        }
    }
}

?>

<div>
    <h3 align="center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">All Projects</h3>
</div>
<div class="container" style="padding:20px;">
    <?php echo $message ?>
</div>
<div class="card-body">
    <div class="table-responsive">

        <a href="add_project.php" style="float:right;margin:5px;" class="btn btn-primary"> Add New Project</a>

        <?php
        $sql = "SELECT * FROM `projects` ";
        $result = mysqli_query($connect, $sql);
        $count = 1;
        ?>

        <table class="table table-bordered table-responsive" id="example" width="100%" cellspacing="0">
            <thead style="background: #2E59D9;color: white;">
                <tr>
                    <th>S_No</th>
                    <th>Project_Name</th>
                    <th>Picture</th>
                    <th>Category</th>
                    <th>Project_URL</th>
                    <th>Filter</th>
                    <th>Designed_On</th>
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
                            <td><?php echo $row['prj_name']; ?></td>
                            <td><img src="<?php echo $base_url; ?><?php echo $row['prj_img']; ?>" style="width:150px;"></td>
                            <td>
                                <?php
                                $cat = $row['cat_id'];
                                $sqll2 = "SELECT * FROM categories WHERE id = $cat";
                                $ress2 = mysqli_query($connect, $sqll2);
                                $ro = mysqli_fetch_array($ress2);
                                ?>
                                <?php echo $ro['category']; ?>
                            </td>
                            <td><?php echo $row['prj_url']; ?></td>
                            <td><?php echo $row['filter']; ?></td>
                            <td><?php echo $row['project_date']; ?></td>
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
                                <a href="edit_project.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
                                <a href="show_project.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>
                                <a href="?type=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" style="margin:5px;float:left;"><i class="fa fa-trash"></i></a>
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