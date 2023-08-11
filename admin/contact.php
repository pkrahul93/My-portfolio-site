<?php include 'sidebar.php'; ?>

<?php
if (isset($_POST['delete'])) {
    $s_id = $_POST['b_id'];

    $query = "DELETE FROM `contacts` WHERE id='$s_id'";
    if (mysqli_query($connect, $query)) {
        $message = "Service Deleted Successfully";
    }
}

?>

<div>
    <h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">Contact Query Details</h3>
</div>

<div class="card-body">
    <div class="table table-responsive">

        <?php
        $sql = "SELECT * FROM `contacts` Order By id DESC";
        $result = mysqli_query($connect, $sql);
        $count = 1;
        ?>

        <table class="table table-bordered" id="example" width="100%" cellspacing="0">
            <thead style="background: #2E59D9;color: white;">
                <tr>
                    <th>S. ID</th>
                    <th>User Name</th>
                    <th>Emails</th>
                    <th>Contact No</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Message On</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email_']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><?php echo $row['msg_on']; ?></td>
                            <td>
                                <form action="#" method="post" style="float:left;margin:5px;">
                                    <input type="hidden" name="b_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delete" value="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                <?php

                    }
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