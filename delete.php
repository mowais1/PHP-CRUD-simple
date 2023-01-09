<?php
 include 'backend.php';

 
 if (isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sqli = "delete from products where Sno=$id";
    $result1 = mysqli_query($con,$sqli);
    
    if($result1){
       
        header("location: homepage.php");
         
    }else{
        echo 'fail';
    }
        
    
  }



?>