<?php include 'sidebar.php'; ?>

<?php
if (isset($_POST['delete'])) {
    $s_id = $_POST['b_id'];

    $query = "DELETE FROM `members` WHERE id='$s_id'";
    if (mysqli_query($connect, $query)) {
        $message = "Service Deleted Successfully";
    }
}


?>


<h3 align="center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">All Team Members</h3>
<div class="card-body">
    <div class="table-responsive">

        <a href="add_member.php" style="float:right;margin:5px;width:150px;" class="btn btn-primary"> Add New Member</a>

        <?php

        $sql = "SELECT * FROM `members` ";
        $result = mysqli_query($connect, $sql);
        $count = 1;

        ?>

        <table class="table table-bordered table-responsive" id="example" width="100%" cellspacing="0">

            <thead style="background: #2E59D9;color: white;">

                <tr>

                    <th>M.ID</th>

                    <th>Photos</th>

                    <th>Name</th>

                    <th>Post</th>

                    <th>Tweeter</th>

                    <th>Facebook</th>

                    <th>Linkdean</th>

                    <th>Instagram</th>

                    <th>Status</th>
                    
                    <th>Added On</th>

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
                            <td style="color:red;"><img src="http://localhost/Ontech/admin/<?php echo $row['pics']; ?>" style="width:150px;"></td>
                            <td><?php echo $row['name_']; ?></td>
                            <td><?php echo $row['post']; ?></td>
                            <td><?php echo $row['twt']; ?></td>
                            <td><?php echo $row['fbk']; ?></td>
                            <td><?php echo $row['lnk']; ?></td>
                            <td><?php echo $row['insta']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo $row['added_on']; ?></td>
                            <td>
                                <form action="#" method="post" style="float:left;margin:5px;">
                                    <input type="hidden" name="b_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete" value="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                                <a href="update_team.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
                            </td>

                        </tr>
                <?php

                    }
                } else {

                    echo "no record found";
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