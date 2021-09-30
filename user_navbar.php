
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
              
                <a class="nav-item nav-link" href="item_list.php">Items</a>
                <a class="nav-item nav-link" href="cart_items.php">Your Cart(<?php if(get_user_cart_items($_SESSION['id'])== !FALSE){
                     echo count(get_user_cart_items($_SESSION['id']));
                }else{
                    echo 0;
                } ?>)</a>
                <a class="nav-item nav-link" href="purchase_history.php">Purchase history</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
               
            </div>
        </nav>
        <div class="alert alert-info">HELLO <?php echo $_SESSION['firstname'] ?> !</div>
 