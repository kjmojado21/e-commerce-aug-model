<?php 
include 'functions/functions.php';


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card mx-auto w-50">
            <div class="card-header">
                <p class="lead text-center">
                    REGISTER A USER:
                </p>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" name="firstname" id="" class="form-control mt-3">
                    <input type="text" name="lastname" id="" class="form-control mt-3">
                    <input type="text" name="uname" id="" class="form-control mt-3">
                    <input type="password" name="pword" id="" class="form-control mt-3">
                    <button type="submit" name="register" class="btn btn-primary mt-3">REGISTER</button>

                </form>

                <?php 
                    if(isset($_POST['register'])){
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $username  = $_POST['uname'];
                        $password  = md5($_POST['pword']);

                        // password_hash()

                        // password_verify() -> true or false 

                        add_user($firstname,$lastname,$username,$password);



                    }
                
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>