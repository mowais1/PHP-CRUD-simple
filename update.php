<?php
include 'backend.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sqli = "select * from products where Sno=$id";
    $result1 = mysqli_query($con,$sqli);
    
  
    
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>PRODUCTS PAGE</title>
    <style>
        body {
            background-color: black;

        }

        .table {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">

      
                <?php

                if ($result1->num_rows > 0) {

                    while ($row = $result1->fetch_assoc()) {

                ?>
                <br/>
                <br/>
                <br/>
                <div class="container bg-black ">
                    <center>                <div style="width: 40%; padding:10px " class="border border-primary">
                      <form action="backend.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $row['Sno']; ?>">

                                    <div class="mb-3">
                                        <label style="float: left; color:white">Product Name</label>
                                        <input type="text" name="name" value="<?=$row['Name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label style="float: left; color:white">Product Price</label>
                                        <input type="text" name="price" value="<?=$row['Price'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label style="float: left; color:white">Quintity</label>
                                        <input type="text" name="qty" value="<?=$row['Quintity'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            UPDATE PRODUCT
                                        </button>
                                    </div>

                                </form>
                                </div>
                                </center>

                                </div>
                <?php       }

                }

                ?>

           
    </div>



</body>

</html>