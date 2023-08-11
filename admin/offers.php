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
    $update_status = "update `offer` set status = '$status' where id = '$id' ";
    mysqli_query($connect, $update_status);
  }

  if ($type == 'delete') {
    $id = get_safe_value($connect, $_GET['id']);
    $del_sql = "delete from `offer` where id = '$id' ";
    mysqli_query($connect, $del_sql);
    if (mysqli_query($connect, $query)) {
      $message = "Offer Deleted Successfully.";
    }
  }
}


?>



<h3 align="center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">Setup Offer PopUp Window</h3>
<div class="card-body">
  <div class="table-responsive">

    <a href="add_client.php" style="float:right;margin:5px;width:150px;" class="btn btn-primary"> Add New Offer</a>

    <?php

    $sql = "SELECT * FROM `clients` ";
    $result = mysqli_query($connect, $sql);
    $count = 1;

    ?>
    <table class="table table-bordered table-responsive" id="example" width="100%" cellspacing="0">

      <thead style="background: #2E59D9;color: white;">

        <tr>

          <th>S. No.</th>
          <th>Client Name</th>
          <th>Client Image</th>
          <th>Client Address</th>
          <th>Post</th>
          <th>About Client</th>
          <th>Added On</th>
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
              <td><?php echo $row['client_name']; ?></td>
              <td style="color:red;"><img src="<?php echo $base_url; ?><?php echo $row['client_pic']; ?>" style="width:150px;"></td>
              <td><?php echo $row['client_adds']; ?></td>
              <td><?php echo $row['qualification_']; ?></td>
              <td><?php echo $row['content']; ?></td>
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
                <a href="update_client.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
                <a href="show_slider.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>
                <a href="?type=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger" style="margin:5px;float:left;"><i class="fa fa-trash"></i></a>
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