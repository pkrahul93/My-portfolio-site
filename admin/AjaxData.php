<?php  $connect = mysqli_connect("localhost", "shribala_admin", "snmtech#1245", "shribala_adb"); 

// Include the database config file 

  
if(!empty($_POST["committee_name"])){ 
  
    // Fetch city data based on the specific state 
    $query='';
    $committeeName=$_POST["committee_name"];
    $LoanDate=$_POST["loan_date"];
  
    
    if($committeeName=='Loan')
    {
        $query = "SELECT loan_name as name, due_date as tdate FROM loan"; 
    }
    else if($committeeName=='Committee')
    {
         $query = "SELECT committee_name as name, committee_due_date as tdate  FROM committee"; 
    }
    
    else if($committeeName=='Vender')
    {
         $query = "SELECT vender_name as name, vender_due_date as tdate FROM vender"; 
    }
    
    else if($committeeName=='Other Income')
    {
         $query = "SELECT income_name as name, income_due_date as tdate FROM income"; 
    }
    
    else if($committeeName=='Other Expense')
    {
         $query = "SELECT expense_name as name, expense_due_date as tdate FROM expense"; 
    }
    
        else if($committeeName=='Salary')
    {
         $query = "SELECT employee_name as name, salary_date as tdate FROM employee"; 
    }
    
        else if($committeeName=='Advance_Salary')
    {
         $query = "SELECT employee_name as name, salary_date as tdate FROM employee"; 
    }
    
    

   
    $result = $connect->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['tdate'].'">'.$row['name'].''.'<strong>'.' [' .$row['tdate'].']'.'</strong>'.''.'</option>';
             
        } 
    }
    else{ 
        echo '<option value="">Select</option>'; 
    } 

}
?>