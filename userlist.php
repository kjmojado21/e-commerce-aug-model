<?php
include 'functions/functions.php';
$userlist = get_users();
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// die();

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
  HELLO <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?>
  <div class="container-fluid">
    <div class="row">
      <?php foreach ($userlist as $row) :
        $id = $row['user_id'];
         ?>
        <div class="col-3">
          <div class="card mt-3">
            <div class="card-header">
              NAME: <?php echo $row['fname']." ".$row['lname']; ?>
            </div>
            <div class="card-body">
                <a href="update.php?user_id=<?php echo $id?>" class="btn btn-secondary">Update Data</a>
                <a href="delete.php?user_id=<?php echo $id?>" class="btn btn-danger">Delete Data</a>
              <?php ?> 
            </div>
          </div>
        </div>

      <?php endforeach; ?>
    </div>

    <a href="logout.php">LOGOUT</a>
  </div>
  <!-- soft-delete -> create status on table: active,inactive: the data remains on the database -->
  <!-- hard-delete -> delete it on database --> 




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>