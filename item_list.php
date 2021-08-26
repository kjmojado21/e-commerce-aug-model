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
    <style>
        .box {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
        }

        .card {
            margin-top: 80px;
            height: 300px;
            transition: 0.5s;
        }

        .card:hover {
            border: 1px solid red;
            border-radius: 30px;
        }

        .card .cardImg {
            height: 150px;
            width: 90%;
            position: relative;
            top: -15px;
            left: 5%;
        }

        .card .cardImg img {
            width: 100%;
            height: 100%;
        }

        .card .info {
            text-align: center;
        }

        .card .info h3 {
            color: rgb(70, 66, 66);
        }

        .card .info p {
            color: rgb(41, 201, 49);
        }

        .ligne {
            display: flex;
        }
    </style>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">
        <?php include 'user_navbar.php' ?>
        <!-- <div class="row mt-5">
           
                <div class="col-3">
                    <div class="card mt-3">
                        <div class="card-header">
                            ITEM NAME: <?php //echo $row['item_name'] 
                                        ?>
                        </div>
                        <div class="card-body">
                            ITEM PRICE: <?php //echo $row['item_price'] 
                                        ?>
                        </div>
                        <div class="card-footer">
                            <form action="" method="post">
                                <input type="hidden" name="item_id" value="<?php // echo $row['item_id'] 
                                                                            ?>">


                                <button type="submit" name="add_to_cart" class="btn btn-success">Add to cart</button>
                            </form>
                            
                        </div>
                    </div>
                </div> -->


        <div class="container">
            <div class="row">
                <?php foreach (item_list() as $row) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="box card">
                            <div class="box cardImg">
                                <img src="https://image.freepik.com/psd-gratuit/cap-maquette_1310-498.jpg" alt="...">
                            </div>
                            <div class="info">
                                <h3><?php echo $row['item_name'] ?></h3>
                                <p><span><?php echo $row['item_price'] ?></span> PHP</p>
                                <form action="" method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $row['item_id']?>">


                                    <button class="btn btn-primary" name="add_to_cart">ADD TO CART</button>
                                </form>


                            </div>
                        </div>
                    </div>


                <?php endforeach; ?>
            </div>

            <?php
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