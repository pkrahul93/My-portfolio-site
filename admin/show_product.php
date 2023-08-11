<?php  include 'sidebar.php';?>


            <div >
              <h3 align="center" style="padding-top:60px;">Show Product Details</h3>
            </div>
            <div class="container" style="padding:20px;">
           
                
              
             </div>
            <div class="card-body">
              <div class="table-responsive">
                  <h3 align="center" style="color:red;"><?php echo $message;?></h3>
                    

                      <?php  
                      $productid=$_REQUEST['product_id'];
    
      
    $sql = "SELECT * FROM `product` WHERE id='$productid'";
$result = mysqli_query($connect, $sql);

  $count =1;

    ?>
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                  <thead style="
    background: #2E59D9;
    color: white;
">
                  </thead>
                
                                    <tbody>
                      <?php
                      
                          if(mysqli_num_rows($result) > 0){
   
        $row = mysqli_fetch_array($result);
        
               
               
            ?>
              
          
  
                    <tr>
                             
                        <td style="font-weight:bold;background:#fff;">Product Name</td><td style="background:#fff;"><?php echo $row['product_name']   ; ?></td>
                      </tr>
                      
                      <tr>
                      <td style="font-weight:bold;background:#fff;">Category name</th><td style="background:#fff;"><?php echo $row['category_name']   ; ?></td>
                      </tr>
                      <tr>
                      <td style="font-weight:bold;background:#fff;">Product Image</th><td style="background:#fff;"><img src="https://snmtechnologies.in/html/bottmac3/admin/upload/<?php echo $row['fileToUpload']; ?>" style="width:150px;"></td>
                    
                    </tr>
                    <tr>
                      <td style="font-weight:bold;background:#fff;">Description</th> <td style="background:#fff;"><?php echo $row['about_more_content']   ; ?></td>
    </tr>
                    
    <?php 
            
            

            
            
        
        }
else {
    
    echo "no record found";
}?>
                  </tbody>
                </table>
                         <?php 
         
          
          
          
          ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
              </div>
            </div>
     



<?php  include 'footer.php';?>
