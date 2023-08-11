<?php include 'sidebar.php'; ?>

<?php

session_start();

if (isset($_POST["add_qas"])) {

    $qs = $_POST["qs"];
    $ans = $_POST["ans"];
    $date = date('Y-m-d');
   
    $query = "INSERT INTO  questions (questions_, answers_, added_on) VALUES ('$qs','$ans','$date')";
    if (mysqli_query($connect, $query)) {
        $message = 'Question has been added Sucessfully';
    }

    
} else {
    $message = 'Question has not been added Yet.';
}

?>

<div>

    <h3 align="center" style="padding-top:60px;">Add New Question</h3>

    <h4 align="center" style="color:#FF9E00;"><?php echo $message; ?> </h4>

    <form action="#" method="POST" style="width:100%;" enctype="multipart/form-data">

        <div class="modal-body">
            <div class="form-group">
                <label>Question :</label>
                <input type="text" name="qs" class="form-control">
            </div>

            <div class="form-group">
                <label>Answer :</label>
                <input type="text" name="ans" class="form-control">
            </div>

            <div class="modal-footer">

                <input type="submit" name="add_qas" value="Add" class="btn btn-primary">
            </div>


    </form>

</div>


<?php include 'footer.php'; ?>