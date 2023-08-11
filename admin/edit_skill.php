<?php include 'sidebar.php';?>

<?php
$g_id = $_GET['id'];
$message = '';
if (isset($_POST["edit_skill"])) {
    $skill = $_POST['skill'];
    $avg = $_POST['avg'];
    $date = date('Y-m-d');

    $query = "UPDATE `skills` SET `skill` = '$skill', `avg` = '$avg' Where `id` = '$g_id'";

    if (mysqli_query($connect, $query)) {
        $message = 'Skill has been updated Sucessfully.';
        ?>
        <script>
            window.location.href='skills.php';
        </script>
        <?php
} else {
        $message = 'Sorry Skill has not been updated yet . Due to ' . mysqli_error($connect);
    }
}

if (isset($g_id) && $g_id != '') {
    $sql = "SELECT * FROM skills WHERE id = $g_id";
    $res = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($res);
}

?>

<div class="container">
    <h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">Edit Current Skill</h3>
    <h4 class="text-center" style="color:#FF9E00;"><?php echo $message ?> </h4>

    <form method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                <label for="apps">Name Of Skill</label>
                    <input type="text" name="skill" class="form-control" value="<?php echo $row['skill']; ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                <label for="avg">Average (%)</label>
                    <input type="number" name="avg" class="form-control" value="<?php echo $row['avg']; ?>">
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="mx-auto">
                    <input type="submit" name="edit_skill" value="Update Skill" class="btn btn-primary">
                </div>
            </div>
        </div>

    </form>

</div>

<?php include 'footer.php';?>