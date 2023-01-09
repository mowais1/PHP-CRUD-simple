<?php
include 'backend.php';

$sqli = "SELECT * FROM products";

$result = mysqli_query($con, $sqli);


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

        <table class="table table-bordered border-primary ">
            <thead>
                <tr>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right;">
                        ADD PRODUCT
                </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD PRODUCT</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="backend.php">
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label" style="color:black">Product Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:black">Product Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="price" class="form-control" id="inputPassword3">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:black">Quntity</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="qty" class="form-control" id="inputPassword3">
                                            </div>
                                        </div>


                                        <input type="submit" class="btn btn-primary" name="add" value="Confirm">
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </tr>
                <tr>
                    <th>S.no</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Qty.</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>
                        <tr>
                            <td><?php echo $row['Sno']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Price']; ?></td>
                            <td><?php echo $row['Quintity']; ?></td>
                            <td><span><a href="update.php?id=<?= $row['Sno'] ;?>"><button type="button" class="btn btn-outline-info"><i class="bi bi-pencil-square"></i> </button></a>&nbsp;&nbsp;
                            <a href="delete.php?id=<?= $row['Sno'] ;?>"><button type="button" class="btn btn-outline-danger"><i class="bi bi-trash3"></i></button></a></span></td>
                        </tr>
                <?php       }
                }

                ?>

            </tbody>
        </table>
    </div>



</body>

</html>