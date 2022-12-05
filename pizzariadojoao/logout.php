<?php
session_start();
include "config.php";
if(isset($_SESSION)){
    session_destroy();
    header("Location:index.php");
}else{
    header("Location:index.php");
}

?>