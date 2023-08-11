<?php include 'sidebar.php'; ?>

<?php
$message = '';
if (isset($_POST['delete'])) {
    $s_id = $_POST['b_id'];

    $query = "DELETE FROM `skills` WHERE id='$s_id'";
    if (mysqli_query($connect, $query)) {
        $message = "Service Deleted Successfully.";
    }
}

?>

<div>
    <h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">All Technical Skills</h3>
</div>
<div class="container" style="padding:20px;">
    <?php echo $message ?>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <a href="add_skill.php" style="float:right;margin:5px;" class="btn btn-primary">Add New Skill</a>

                <?php
                $sql = "SELECT * FROM `skills` ";
                $result = mysqli_query($connect, $sql);
                $count = 1;
                ?>

                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead style="background: #2E59D9;color: white;">
                        <tr>
                            <th>S_No</th>
                            <th>Skills</th>
                            <th>%</th>
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
                                    <td><?php echo $row['skill']; ?></td>
                                    <td><?php echo $row['avg']; ?></td>
                                    <td><?php echo $row['aaded_on']; ?></td>
                                    <td>
                                        <a href="edit_skill.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
                                        <form method="post" style="float:left;margin:5px;">
                                            <input type="hidden" name="b_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete" value="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </form>
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

            </div>
        </div>
    </div>
</div>

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


<?php include 'footer.php'; ?>