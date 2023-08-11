<?php include 'sidebar.php'; ?>

<?php
if (isset($_POST['delete'])) {
  $b_id = $_POST['b_id'];



  $query = "DELETE FROM `slider` WHERE id='$b_id'";
  if (mysqli_query($connect, $query)) {
    $message = "Reocrd Deleted Successfully";
  }
}

?>

<h3 align="center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">All Slider</h3>
<div class="card-body">
  <div class="table-responsive">
    <!-- <h3 align="center" style="color:red;"><?php echo $message; ?></h3> -->
    <a href="add_slider.php" style="float:right;margin:5px;width:150px;" class="btn btn-primary"> Add New Slider</a>

    <?php




    $sql = "SELECT * FROM `slider`";
    $result = mysqli_query($connect, $sql);

    $count = 1;

    ?>
    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
      <thead style="
    background: #2E59D9;
    color: white;
">
        <tr>


          <th>S. No.</th>
          <th>Slider Title</th>




          <th>Slider Image</th>



          <th>Action</th>



        </tr>
      </thead>

      <tbody>
        <?php

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_array($result)) {


        ?>



            <tr>
              <td><?php echo $count++; ?></td>

              <td><?php echo $row['title_name']; ?></td>



              <td style="color:red;"><img src="http://localhost/Electra/admin/<?php echo $row['fileToUpload']; ?>" style="width:50px;"></td>




              <td>

                <form action="#" method="post" style="float:left;margin:5px;">
                  <input type="hidden" name="b_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete" value="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>


                <a href="show_slider.php?product_id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>

              </td>



            </tr>
        <?php





          }
        } else {

          echo "no record found";
        } ?>
      </tbody>
    </table>
    <?php




    ?>

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