<?php
session_start();
require('../includes/dbconnection.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <?php
            include('message.php');
        ?>
    
        <div class="row mt-3">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student's list <a href="add.php" class="btn btn-primary float-end">Add new</a></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                            <?php
                                $query = "SELECT * FROM students";
                                $query_run = $conn->query($query) or die ($conn->error);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $students) {
                                        ?>
                                            <tr>
                                                <td><?= $students['id'];?></td>
                                                <td><?= $students['firstname'];?></td>
                                                <td><?= $students['lastname'];?></td>
                                                <td><?= $students['course'];?></td>
                                                <td>
                                                    <a href="view.php?id=<?= $students['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?id=<?= $students['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" class="d-inline" method="POST">
                                                        <button class="btn btn-danger btn-sm" type="submit" name="delete_student" value="<?= $students['id']; ?>">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php

                                    }
                                } else {

                                }
                            ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</body>
</html>