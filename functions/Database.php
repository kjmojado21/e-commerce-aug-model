<?php 
session_start();

function db_connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = ''; // if youre using mac, password is root. if youre using windows no passsword 
    $db_name = 'aug-crud';

    // $servername = 'us-cdbr-east-04.cleardb.com';
    // $username = 'bfc3862864e74d';
    // $password = '224302c4'; // if youre using mac, password is root. if youre using windows no passsword 
    // $db_name = 'heroku_b922f80f5178bc0';


    $conn =  new mysqli($servername,$username,$password,$db_name);

    if($conn == TRUE){
        return $conn;

    }else{
        die('ERROR: '.$conn->connect_error);
    }


}



?>