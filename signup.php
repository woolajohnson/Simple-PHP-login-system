

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
        <div class="card mt-4">
            <div class="card-header">
                <h1>Create Account</h1>
            </div>
            <div class="card-body">
            <?php 
                if (isset($_GET['error'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?= $_GET['error']; ?>
                        </div>
                    <?php

                }
            ?>
            <?php 
                if (isset($_GET['success'])) {
                    ?>
                        <div class="alert alert-success">
                            <?= $_GET['success']; ?>
                        </div>
                    <?php

                }
            ?>

                <form action="includes/signup_inc.php" class="mt-3" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="">
                    </div>
                    <button type="submit" name="signup" class="btn btn-primary">Signup</button><br><br>
                    <a href="index.php" class="block-inline">Login?</a>
                </form>
            </div>
        </div>
        
        
    </div>  

<script>
    let messageAlert = document.querySelector('.alert');
    setTimeout(function () {
        messageAlert.style.display = 'none';
    }, 3000);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>