<?php include 'sidebar.php'; ?>

<?php
$ht_id = $_REQUEST['id'];

$sql = "SELECT * FROM `questions` WHERE id ='$ht_id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
?>

<?php


if (isset($_POST["udate_client"])) {

    $qs = $_POST["qs"];
    $ans = $_POST["ans"];

    $c_update = "update questions set questions_ = '$qs', answers_ = '$ans' where id ='$ht_id'";

    $run_update = mysqli_query($connect, $c_update);

    if ($run_update == TRUE) {
        $message = "Question & Answer Updated Successfully.";
    }
} else {
    $message = "**.....Update Peocess Not Yet Complited.....**";
}

?>

<div>

    <h3 align="center" style="padding-top:60px;">Update Clients</h3>

    <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

    <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="modal-body">

            <div class="form-group">
                <?php

                $sql = "SELECT * FROM `questions` where id ='$ht_id'";
                $result = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($result);

                ?>

                <div class="form-group">
                    <label>Question :</label>
                    <input type="text" name="qs" class="form-control" value="<?php echo $row['questions_']; ?>">
                </div>

                <div class="form-group">
                    <label>Answer :</label>
                    <input type="text" name="ans" class="form-control" value="<?php echo $row['answers_']; ?>">
                </div>

            </div>

            <div class="modal-footer">
                <input type="submit" name="udate_client" value="Update Category" class="btn btn-primary">
            </div>
        </div>


    </form>

</div>


<?php include 'footer.php'; ?>