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
  <div class="container my-5">
    <div class="card">
      <div class="card-header">

      </div>
      <div class="card-body">
        <form action="" method="post">
          <input type="text" name="name" id="" placeholder="ITEM NAME" class="form-control mt-3">
          <input type="text" name="price" id="" placeholder="ITEM PRICE" class="form-control mt-3">
          <input type="text" name="desc" id="" placeholder="ITEM DESCRIPTION" class="form-control mt-3">
          <button type="submit" name="add_item" class="btn btn-info mt-3">add item</button>
        </form>

        <?php
        if (isset($_POST['add_item'])) {
          $name = $_POST['name'];
          $price = $_POST['price'];
          $desc = $_POST['desc'];

          add_item($name, $price, $desc);
          // db_connect()->query("INSERT INTO items(item_name,item_price,item_desc)VALUES('$name','$price','$desc')"); you can do this too
        }
        ?>
      </div>
    </div>


  </div>
  <div class="container-fluid">
    <?php $conn = db_connect();
    $sql =  "SELECT * FROM items";
    $result = $conn->query($sql);
    $container = array();
    while ($row = $result->fetch_assoc()) {
      $container[] = $row;
    }


    ?>
    <table class="table">
      <thead>
        <th>Item Name</th>
        <th>Item Description</th>
        <th>Item Price</th>
        <th>Item Image Filename</th>
        <th colspan="3">Options </th>
      </thead>
      <tbody>
          <?php foreach($container as $row): ?>
            <tr>
              <td><?php echo $row['item_name'] ?></td>
              <td><?php echo $row['item_desc'] ?></td>
              <td><?php echo $row['item_price'] ?></td>
              <td><?php echo $row['item_img'] ?></td>
              <td><a href="#"></a></td>
              <td><a href="#"></a></td>
              <td><a href="upload_item_img.php?item_id=<?php echo $row['item_id'] ?>" class="btn btn-secondary">Upload Item</a></td>
              
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