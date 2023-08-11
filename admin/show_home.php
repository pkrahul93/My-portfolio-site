<?php include 'sidebar.php'; ?>


<div>
  <h3 align="center" style="padding-top:60px;">Homepage Details</h3>
</div>
<div class="container" style="padding:20px;">

</div>
<div class="card-body">
  <div class="card">

    <?php
    $h_id = $_REQUEST['id'];

    $sql = "SELECT * FROM `home` WHERE id='$h_id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    ?>

    <div class="modal-body">

      <div class="mb-2">
        <label>Banner Image (upload 1920*827)</label>
        <img src="http://localhost/Ontech/admin/<?php echo $row['banner']; ?>" style="width:250px;">
      </div>

      <div class="form-group">
        <label>Message :</label>
        <textarea class="form-control" name="msg" cols="25" rows="4" style="color:#000;"><?php echo $row['message']; ?></textarea>
      </div>

      <div class="form-group">
        <label>About :</label>
        <textarea class="form-control" name="msg" cols="25" rows="4" style="color:#000;"><?php echo $row['about']; ?></textarea>
      </div>

      <div class="form-group">
        <label>Vision :</label>
        <textarea class="form-control" name="msg" cols="25" rows="4" style="color:#000;"><?php echo $row['vision']; ?></textarea>
      </div>

      <div class="form-group">
        <label>Mission :</label>
        <textarea class="form-control" name="msg" cols="25" rows="4" style="color:#000;"><?php echo $row['mision']; ?></textarea>
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
</div>
</div>




<?php include 'footer.php'; ?>