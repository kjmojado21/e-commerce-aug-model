<?php
include 'functions/functions.php';
// print_r(item_list());

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

    <div class="container-fluid">
        <?php include 'user_navbar.php' ?>
        <div class="row mt-5">
            <?php foreach (item_list() as $row) : ?>
                <div class="col-3">
                    <div class="card mt-3">
                        <div class="card-header">
                            ITEM NAME: <?php echo $row['item_name'] ?>
                        </div>
                        <div class="card-body">
                            ITEM PRICE: <?php echo $row['item_price'] ?>
                        </div>
                        <div class="card-footer">
                            <form action="" method="post">
                                <input type="hidden" name="item_id" value="<?php echo $row['item_id'] ?>">


                                <button type="submit" name="add_to_cart" class="btn btn-success">Add to cart</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach;

            if (isset($_POST['add_to_cart'])) {
                $item_id = $_POST['item_id'];
             

                add_to_cart($item_id, $_SESSION['id']);
            }
            ?>

        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>