<?php
$msg = '**...Registration Is In Progress...**';


if (isset($_POST["submit-form"])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $qual = $_POST['qual'];
    $father = $_POST['father'];

    $query = "INSERT INTO `students` (`id`, `fname`, `lname`, `father`, `dob`, `phone`, `email`, `qualification`, `enrolled_on`) VALUES (NULL, '$fname', '$lname', '$father', '$dob', '$phone', '$email', '$qual', CURRENT_TIMESTAMP)";

    if (mysqli_query($connect, $query)) {

        header('location:thanks.php');
    }else{
        
    }

} else {
    $msg = "Sorry ....Registration could not be Completed Yet...!!<br /> Plz Try Again....";
}


?>