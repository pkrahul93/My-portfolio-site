<?php include 'sidebar.php'; ?>

<?php
$message = '';
if (isset($_POST["add_skill"])) {
    $skill = $_POST['skill'];
    $avg = $_POST['avg'];
    $date = date('Y-m-d');

    $query = "INSERT INTO `skills` (`id`, `skill`, `avg`, `aaded_on`) VALUES (NULL, '$skill', '$avg', '$date')";

    if (mysqli_query($connect, $query)) {
        $message = 'Skill has been added Sucessfully.';
    } else {
        $message = 'Sorry Skill has not been added yet into database. Due to ' . mysqli_error($connect);
    }
}

?>

<div class="container">
    <h3 class="text-center" style="padding-top:60px;background: black;color: #fff;font-weight: 600;">Add New Skill</h3>
    <h4 class="text-center" style="color:#FF9E00;"><?php echo $message ?> </h4>

    <form method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="skill" class="form-control" placeholder="Name of Skill">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="number" name="avg" class="form-control" placeholder="Average (%)">
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div class="mx-auto">
                    <input type="submit" name="add_skill" value="Add  New Skill" class="btn btn-primary">
                </div>
            </div>
        </div>

    </form>

</div>

<?php include 'footer.php'; ?>