<?php include 'sidebar.php'; ?>


<div>
    <h3 align="center" style="padding-top:60px;">Show Product Details</h3>
</div>
<div class="container" style="padding:20px;">



</div>
<div class="card-body">
    <div class="table-responsive">

        <div class="table-responsive">

            <a href="add_qas.php" style="float:right;margin:5px;width:200px;" class="btn btn-primary"> Add New Question</a>

            <?php
            $ht_id = $_REQUEST['id'];
            $sql = "SELECT * FROM `questions` where id ='$ht_id'";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_array($result)
            // $count = 1;

            ?>
            <table class="table table-bordered table-responsive" id="example" width="100%" cellspacing="0">

                <thead style="background: #2E59D9;color: white;">

                    <tr>

                        <th>Q.ID</th>

                        <th>Questions</th>

                        <th>Answers</th>

                        <th>Status</th>

                        <th>Added_On</th>

                    </tr>
                </thead>

                <tbody>
                    <?php

                    if (mysqli_num_rows($result) > 0) {

                    ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['questions_']; ?></td>
                            <td><?php echo $row['answers_']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo $row['added_on']; ?></td>
                        </tr>
                    <?php

                    } else {

                        echo "no record found";
                    }
                    ?>
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