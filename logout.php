<?php 
session_start(); //or you can use include 'functions/functions.php';

session_destroy();
header('location:login.php');




?>