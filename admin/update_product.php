<?php include 'sidebar.php'; ?>


<?php



$category_id = $_POST['category_id'];


$product_id = $_REQUEST['product_id'];


if (isset($_POST["add_loan"])) {

    $customer_id = $c_id;
    $product_name = $_POST["product_name"];
    $about_more_content = $_POST["about_more_content"];
    $category_id = $_POST['category_id'];
    $c_image = $_FILES['fileToUpload']['name'];
    $c_image_temp = $_FILES['fileToUpload']['tmp_name'];
    $date = date('Y-m-d');
    if ($c_image_temp != "") {
        move_uploaded_file($c_image_temp, "upload/$c_image");
        $c_update = "update product set product_name='$product_name', category_id='$category_id', fileToUpload= '$c_image', about_more_content='$about_more_content', 
    system_date='$date' where id='$product_id'";
    }

    $run_update = mysqli_query($connect, $c_update);

    if ($run_update == TRUE) {
        $message = "Updated Successfully";
    }
    
}



$sql = "SELECT * FROM `product` where id='$product_id'";
$result = mysqli_query($connect, $sql);



$row = mysqli_fetch_array($result)

?>






<div>

    <h3 align="center" style="padding-top:60px;">Update Product</h3>

    <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

    <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">



        <div class="modal-body">
            <div class="form-group">
                <input type="text" name="product_name" class="form-control" value="<?php echo $row['product_name']; ?>">
            </div>


            <div class="">
                <label>Upload Product image </label>
                <td style="color:red;"><img src="https://snmtechnologies.in/html/bottmac3/admin/<?php echo $row['fileToUpload']; ?>" style="width:50px;"></td>
                <input type="file" id="img" name="fileToUpload" accept="image/*" class="form-control">
            </div>




            <div class="form-group">
                <textarea type="text" name="about_more_content" class="form-control"><?php echo $row['about_more_content']; ?></textarea>
            </div>
            <div class="form-group">
                <?php


                $sql = "SELECT * FROM `category`";
                $result = mysqli_query($connect, $sql);
                $count = 1;


                ?>
                <select name="category_id" class="form-control">
                    <option value="Selected disabled"><?php echo  $row['category_id']; ?></option>
                    <?php if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {


                    ?>

                            <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?>. <?php echo  $row['category_name']; ?></option>

                    <?php }
                    } else {

                        echo "no record found";
                    } ?>

                </select>


            </div>





        </div>



        <div class="modal-footer">

            <input type="submit" name="add_loan" value="Update Product" class="btn btn-primary">
        </div>


    </form>

</div>










<?php include 'footer.php'; ?>