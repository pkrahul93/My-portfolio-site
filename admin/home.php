<?php include 'sidebar.php'; ?>

<?php
// if (isset($_POST["delete"])) {
//   $vid = $_POST['v_id'];

//   $query = "DELETE FROM `home` WHERE id ='$vid' ";

//   $result2 = mysqli_query($connect, $query);
//   if ($result2) {
//     $message = "home Deleted Successfully";
//   }
// }

?>


<h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">Home Section</h3>
<div class="card-body">
  <div class="table-responsive">
    <!-- <a href="add_home.php" style="float:right;" class="btn btn-primary">Add home</a> -->

    <?php
    $sql = "SELECT * FROM `home`";
    $result = mysqli_query($connect, $sql);

    ?>

    <table class="table table-bordered" id="example" width="100%" cellspacing="0">

      <tbody>
        <?php
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) {

        ?>

          <tr>
            <th>Banner</th>
            <td><img src="http://localhost/Nuclify/admin/<?php echo $row['banner']; ?>" style="width:250px;"></td>
          </tr>
          <tr>
            <th>Message</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['message']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>About</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['about']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Vision</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['vision']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Mission</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['mision']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Actions</th>
            <td>
              <a href="update_home.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
              <a href="show_home.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>
            </td>
          </tr>
        <?php
        } else {
          echo "No Record Found.";
        } ?>
      </tbody>
    </table>
  </div>

  <h3 class="text-center py-2" style="background: black;color: #fff;font-weight: 600;">About Section</h3>
  <div class="table-responsive">
    <!-- <a href="add_home.php" style="float:right;" class="btn btn-primary">Add home</a> -->

    <?php
    $sql = "SELECT * FROM `home`";
    $result = mysqli_query($connect, $sql);

    ?>

    <table class="table table-bordered" id="example" width="100%" cellspacing="0">

      <tbody>
        <?php
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) {

        ?>

          <tr>
            <th>Banner</th>
            <td><img src="http://localhost/Nuclify/admin/<?php echo $row['banner']; ?>" style="width:250px;"></td>
          </tr>
          <tr>
            <th>Message</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['message']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>About</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['about']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Vision</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['vision']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Mission</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['mision']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Actions</th>
            <td>
              <a href="update_home.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
              <a href="show_home.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>
            </td>
          </tr>
        <?php
        } else {
          echo "No Record Found.";
        } ?>
      </tbody>
    </table>
  </div>

  <h3 class="text-center py-2" style="background: black;color: #fff;font-weight: 600;">Services Section</h3>
  <div class="table-responsive">
    <!-- <a href="add_home.php" style="float:right;" class="btn btn-primary">Add home</a> -->

    <?php
    $sql = "SELECT * FROM `home`";
    $result = mysqli_query($connect, $sql);

    ?>

    <table class="table table-bordered" id="example" width="100%" cellspacing="0">

      <tbody>
        <?php
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) {

        ?>

          <tr>
            <th>Banner</th>
            <td><img src="http://localhost/Nuclify/admin/<?php echo $row['banner']; ?>" style="width:250px;"></td>
          </tr>
          <tr>
            <th>Message</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['message']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>About</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['about']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Vision</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['vision']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Mission</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['mision']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Actions</th>
            <td>
              <a href="update_home.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
              <a href="show_home.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>
            </td>
          </tr>
        <?php
        } else {
          echo "No Record Found.";
        } ?>
      </tbody>
    </table>
  </div>

  <h3 class="text-center py-2" style="background: black;color: #fff;font-weight: 600;">Contact Section</h3>
  <div class="table-responsive">
    <!-- <a href="add_home.php" style="float:right;" class="btn btn-primary">Add home</a> -->

    <?php
    $sql = "SELECT * FROM `home`";
    $result = mysqli_query($connect, $sql);

    ?>

    <table class="table table-bordered" id="example" width="100%" cellspacing="0">

      <tbody>
        <?php
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0) {

        ?>

          <tr>
            <th>Banner</th>
            <td><img src="http://localhost/Nuclify/admin/<?php echo $row['banner']; ?>" style="width:250px;"></td>
          </tr>
          <tr>
            <th>Message</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['message']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>About</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['about']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Vision</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['vision']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Mission</th>
            <td>
              <div class="form-group">
                <textarea rows="10" name="about_more_content" style="width:100%;" value=""><?php echo $row['mision']; ?></textarea>
              </div>
            </td>
          </tr>

          <tr>
            <th>Actions</th>
            <td>
              <a href="update_home.php?id=<?php echo $row['id']; ?>" class="btn btn-info" style="margin:5px;float:left;"><i class="fa fa-edit"></i></a>
              <a href="show_home.php?id=<?php echo $row['id']; ?>" class="btn btn-success" style="margin:5px;float:left;"><i class="fa fa-eye"></i></a>
            </td>
          </tr>
        <?php
        } else {
          echo "No Record Found.";
        } ?>
      </tbody>
    </table>
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