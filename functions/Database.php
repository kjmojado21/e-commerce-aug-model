<?php 
session_start();

function db_connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = ''; // if youre using mac, password is root. if youre using windows no passsword 
    $db_name = 'aug-crud';

    $conn =  new mysqli($servername,$username,$password,$db_name);

    if($conn == TRUE){
        return $conn;

    }else{
        die('ERROR: '.$conn->connect_error);
    }


}



?>