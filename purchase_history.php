<?php 
include 'functions/functions.php';
$paid_items = get_paid_items($_SESSION['id']);


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container-fluid">
      <?php include 'user_navbar.php' ?>
          <div class="bg-info">
              <h1 class="display-4 text-center text-white p-5 mt-5">
                  PAYMENT HISTORY
              </h1>
          </div>
      </div>
      <div class="container mt-3">
            <table class="table">
                <thead class="table-info">
                    <th>ITEM NAME</th>
                    <th>ITEM PRICE</th>
                    <th>ITEM DESCRIPTION</th>
                    <th>ITEM STATUS</th>
                 
                </thead>
                <tbody>
                    <?php foreach( $paid_items as $row): ?>
                        <tr>
                            <td><?php echo $row['item_name'] ?></td>
                            <td><?php echo $row['item_price'] ?></td>
                            <td><?php echo $row['item_desc'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                      
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>