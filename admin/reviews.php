<?php include 'sidebar.php'; ?>

<?php
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
     $update_status = "update `reviews` set status = '$status' where id = '$id' ";
     mysqli_query($connect, $update_status);
  }

  if ($type == 'delete') {
    $id = get_safe_value($connect, $_GET['id']);
    $del_sql = "delete from `reviews` where id = '$id' ";
    mysqli_query($connect, $del_sql);
  }

}

?>

<h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">All Client Reviews</h3>
<div class="card-body">
  <div class="table table-responsive">

    <?php
    $sql = "SELECT * FROM `reviews` ";
    $result = mysqli_query($connect, $sql);
    $count = 1;
    ?>
    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
      <thead style="background: #2E59D9;color: white;">

        <tr>
          <th>S. No.</th>
          <th>Client-Name</th>
          <th>Avtar</th>
          <th>Post</th>
          <th>Client Phone</th>
          <th>Client-Review</th>
          <th>Review On</th>
          <th>Status</th>
          <th>Remove</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <td><?php echo $count++; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><img src="<?php echo $base_url ?><?php echo $row['client_pic']; ?>" style="width:150px;"></td>
              <td><?php echo $row['post']; ?></td>
              <td><?php echo $row['phone_no']; ?></td>
              <td><?php echo $row['review']; ?></td>
              <td><?php echo $row['review_on']; ?></td>
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
                <a href="?type=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>

            </tr>
        <?php

          }
        } else {

          echo "No record found.";
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