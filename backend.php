<?php

    $con = mysqli_connect("localhost","root","","practice - curd");
    if(!$con){
        echo "FINE";
    }
    
    // FOR ADDITION OF PRODUCTS

    if (isset($_POST['add'])) {

        $name = $_POST['name'];
    
        $price = $_POST['price'];
    
        $qty = $_POST['qty'];
    
    
    
        $sql = "INSERT INTO `products`(`Name`, `Price`, `Quintity`) VALUES ('$name','$price','$qty')";
    
        $result = $con->query($sql);
    
        if ($result == TRUE) {
    
          
          header("location:homepage.php");
    
        }else{
    
          echo "Error: PLEASE GO BACK";
    
        } 
    
        
    
      }
    
      // FOR UPDATE DATA 


if(isset($_POST['update']))
{
  $id = $_POST['id'];

  $name = $_POST['name'];
    
  $price = $_POST['price'];

  $qty = $_POST['qty'];


    $query = "UPDATE products SET Name='$name', Price='$price', Quintity='$qty' WHERE Sno='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
       
        header("Location: homepage.php");
       
    }
    else
    {
        
      echo "fail";
        
    }

}


?>

