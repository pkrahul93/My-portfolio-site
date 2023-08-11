<?php include 'sidebar.php'; ?>

<?php
if (isset($_POST['delete'])) {
  $b_id = $_POST['b_id'];

  $query = "DELETE FROM `questions` WHERE id='$b_id'";
  if (mysqli_query($connect, $query)) {
    $message = "Client Deleted Successfully";
  }
}


?>



<h3 align="center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">All Frequently Asked Questions & Answers</h3>
<div class="card-body">
  <div class="table-responsive">

    <a href="add_qas.php" style="float:right;margin:5px;width:200px;" class="btn btn-primary"> Add New Question</a>

    <?php

    $sql = "SELECT * FROM `questions` ";
    $result = mysqli_query($connect, $sql);
    $count = 1;

    ?>
    <table class="table table-bordered table-responsive" id="example" width="100%" cellspacing="0">

      <thead style="background: #2E59D9;color: white;">

        <tr>

          <th>Q.ID</th>

          <th>Questions</th>

          <th>Answers</th>

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
              <td><?php echo $row['questions_']; ?></td>
              <td><?php echo $row['answers_']; ?></td>
              <td><?php echo $row['added_on']; ?></td>
              <td><?php echo $row['status']; ?></td>
              <td>
                <form action="#" method="post" style="float:left;margin:5px;">
                  <input type="hidden" name="b_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete" value="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
                <a href="update_qas.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
                <a href="show_qas.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>
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