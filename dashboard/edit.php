<?php
require('../includes/dbconnection.php');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit student details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit student 
                        <a href="main.php" class="btn btn-danger float-end">Back</a></h4>
                    </div>
                    <div class="card-body">
                        <?php 
                            $id = $_GET['id'];
                            if (isset($_GET['id'])) {
                                $query = "SELECT * FROM students WHERE id = '$id'";
                                $query_run = $conn->query($query) or die ($conn->error);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $row = $query_run->fetch_assoc();

                                    ?> 
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                        <div class="mb-3">
                                            <label class="">First name</label>
                                            <input type="text" name="firstname" class="form-control mt-1" id="" value="<?= $row['firstname']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="">Last name</label>
                                            <input type="text" name="lastname" class="form-control mt-1" id="" value="<?= $row['lastname']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="">Course</label>
                                            <input type="text" name="course" class="form-control mt-1" id="" value="<?= $row['course']; ?>">
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="update_student">Update student</button>
                                    </form>
                                    
                                    
                                    <?php
                                }

                            }
                        ?>


                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</body>
</html>