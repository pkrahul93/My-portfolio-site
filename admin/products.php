<?php include 'sidebar.php'; ?>

<?php





if (isset($_POST["update"])) {

  $b_ids = $_POST['b_ids'];

  $category_name = $_POST['category_name'];

  $date = date('Y-m-d');

  $c_update = "update product set status='Published' where id='$b_ids'";

  $run_update = mysqli_query($connect, $c_update);

  if ($run_update == TRUE) {
    $message = "Published Successfully";
  }
}
if (isset($_POST['delete'])) {
  $b_id = $_POST['b_id'];



  $query = "DELETE FROM `product` WHERE id='$b_id'";
  if (mysqli_query($connect, $query)) {
    $message = "Product Deleted Successfully";
  }
}



?>




<div>
  <h3 align="center" style="padding-top:50px;">All Product Details</h3>
</div>
<div class="container" style="padding:20px;">



</div>
<div class="card-body">
  <div class="table-responsive">
    <!-- <h3 align="center" style="color:red;"><?php echo $message; ?></h3> -->
    <a href="add_product.php" style="float:right;margin:5px;width:150px;" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Add Product</a>

    <?php
    if (isset($_POST['search'])) {
      $s_date = $_POST['s_date'];
      $e_date = $_POST['e_date'];

      $sql = "SELECT * FROM `amount` WHERE (system_date BETWEEN '$s_date' AND '$e_date') ORDER by id DESC";
      $result = mysqli_query($connect, $sql);
    } else {



      $sql = "SELECT * FROM `product`";
      $result = mysqli_query($connect, $sql);

      $count = 1;
    }
    ?>
    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
      <thead style="
    background: #2E59D9;
    color: white;
">
        <tr>


          <th>S. No.</th>
          <th>Product Name</th>



          <th>Category name</th>
          <th>Product Image</th>
          <th>Description</th>
          <th>Status</th>
          <th>Publish</th>


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

              <td><?php echo $row['product_name']; ?></td>


              <td><?php echo $row['category_id']; ?></td>
              <td style="color:red;"><img src="http://localhost/Electra/admin/upload/<?php echo $row['fileToUpload']; ?>" style="width:50px;"></td>
              <td><?php echo $row['about_more_content']; ?></td>
              <td><?php echo $row['status']; ?></td>
              <td>
                <form action="#" method="post" style="float:left;margin:5px;">
                  <input type="hidden" name="b_ids" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="update" value="" class="btn btn-info">Publish</button>
                </form>
              </td>

              <td>

                <form action="#" method="post" style="float:left;margin:5px;">
                  <input type="hidden" name="b_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete" value="" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>

                <a href="update_product.php?product_id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
                <a href="show_product.php?product_id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>

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