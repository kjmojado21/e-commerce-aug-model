<?php



include 'Database.php';

// what is CRUD -> C-create: R-read/retrieve: U-update: D-delete

function add_user($fname,$lname,$uname,$pword){ //create
    $connect = db_connect(); // create a variable that will hold the mysqli object
    $sql = "INSERT INTO users(fname,lname,username,password)VALUE('$fname','$lname','$uname','$pword')"; //create a variable that will hold the sql string
    $result = $connect->query($sql); // make the sql string work

    if($result == TRUE){
        echo "user added successfully!";
    }else{
        die('ERROR: '.$connect->error);
    }

    // shortcut
    if($result == TRUE){
        echo "user added successfully!";
    }else{
        die('ERROR: '.$connect->error);
    }


}

function get_users(){ //read/retreive
    $connect = db_connect();
    $sql ="SELECT * FROM users";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $array = array(); // this will hold all of the data inside the database
        while($row = $result->fetch_assoc()){
            $array[] = $row;

        }

        return $array;

    }else{
        return FALSE;
    }

}

function update_user($fname,$lname,$username,$password,$id){ //update
    $connect = db_connect();
    $sql = "UPDATE users SET fname='$fname',lname='$lname',username='$username',password='$password' WHERE user_id='$id'";
    $result = $connect->query($sql);

    if($result == TRUE){
        header('location: userlist.php');
    }else{
        die('ERROR '.$connect->error);
    }

    
}

function delete_user($id){ //delete
    $connect = db_connect();
    $sql = "DELETE FROM users WHERE user_id = '$id'";
    $result = $connect->query($sql);

    if($result == TRUE){
        header('location: userlist.php');
    }else{
        die('ERROR '.$connect->error);
    }

}

function get_one_user($id){
    $connect = db_connect();
    $sql = "SELECT * FROM users WHERE user_id = '$id'";
    $result = $connect->query($sql);
    if($result->num_rows == 1){
        return $result->fetch_assoc();
    }else{
        echo "no data detected";
    }
}

function login($username,$password){
    $connect = db_connect();
    $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
    $result = $connect->query($sql);

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        // global variable.
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['firstname'] = $row['fname'];
        $_SESSION['lastname'] = $row['lname'];
       

        header('location:item_list.php');
    }else{

    }

}

function item_list(){
    $connect = db_connect();
    $sql ="SELECT * FROM items";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $array = array(); // this will hold all of the data inside the database
        while($row = $result->fetch_assoc()){
            $array[] = $row;

        }

        return $array;

    }else{
        return FALSE;
    }


}

function add_to_cart($item_id,$user_id){
    $connect = db_connect();
    $sql = "INSERT INTO cart(item_id,user_id)VALUES('$item_id','$user_id')";
    $result = $connect->query($sql);

    if($result == TRUE){
       echo "<div class = 'alert alert-success mt-3'>item added to cart</div>";
    }else{
        die('ERROR '.$connect->error);
    }

}

function get_user_cart_items($id){
    $connect = db_connect();
    $sql ="SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE cart.user_id = '$id' AND cart.status = 'NOT PAID'";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $array = array(); // this will hold all of the data inside the database
        while($row = $result->fetch_assoc()){
            $array[] = $row;

        }

        return $array;

    }else{
        return FALSE;
    }

}
function finalize_payment($cart_id,$user_id){
    $connect = db_connect();
    $sql = "UPDATE cart SET status='PAID' WHERE cart_id = '$cart_id' AND user_id = '$user_id'";
    $result = $connect->query($sql);

    if($result == TRUE){
        echo "<div class = 'alert alert-success'>PAYMENT HAS BEEN SETTLED. REDIRECTING TO PURCHASE HISTORY</div>";

        header( "refresh:5;url=purchase_history.php" );
    }else{
        die('ERROR: '.$connect->error);
    }

}
function get_paid_items($id){
    $connect = db_connect();
    $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE cart.user_id = '$id' AND cart.status = 'PAID'";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
        $array = array();
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        return $array;

    }else{
        return FALSE;
    }
}
