<?php  include 'sidebar.php';?>


           <?php      
 
 if(isset($_POST["add_loan"]))  
 {  
     
        $customer_id=$c_id;
$product_name =$_POST["title_name"];
$about_more_content= $_POST["about_more_content"];
$c_image= $_FILES['fileToUpload']['name'];
$c_image_temp=$_FILES['fileToUpload']['tmp_name'];

if($c_image_temp != "")
{
    move_uploaded_file($c_image_temp , "banner/$c_image");
    $c_update="update about set title_name='$product_name', fileToUpload= '$c_image', about_more_content='$about_more_content'
     where id='6'";   
}

$run_update=mysqli_query($connect, $c_update);

if($run_update == TRUE)

{
    $message ="Updated Successfully";
}        
}
     
                         

      
    $sql = "SELECT * FROM `about` where id='6'";
$result = mysqli_query($connect, $sql);


   
        $row = mysqli_fetch_array($result)
        
               
               
            ?>
 
   
   

  
    
       
<div>
      
      <h3 align="center" style="padding-top:60px;">Edit About Page</h3>
     
     <h4 align="center" style="color:#FF9E00;"><?php echo $message;?> </h4>

        <form  action ="#" method="POST" style="width:100%;" enctype ="multipart/form-data">
           
 
   
        <div class="modal-body">
            
            
            <div class="">
       <label>Upload Banner Image ( 1920*300) </label>
          <label for="img">Select image:</label>
          <img src="https://snmtechnologies.in/html/bottmac3/admin/banner/<?php echo $row['fileToUpload']; ?>" style="width:50px;">
  <input type="file" id="img" name="fileToUpload" accept="image/*" class="form-control">
        </div>
       <div class="form-group">
        <input type="text" name="title_name" class="form-control" value="<?php echo $row['title_name']; ?>" >
        </div>
  
  
     
        
   
  
     
 
  
    <div class="form-group">
        <textarea rows="10" name="about_more_content" style="width:100%;">value="<?php echo $row['about_more_content']; ?>" </textarea>
        </div>
  
</div>

        

            <div class="modal-footer">
            
            <input type="submit" name="add_loan" value="Update" class="btn btn-primary">
        </div>

  
        </form>

    </div>
    
   



     


<?php  include 'footer.php';?>
