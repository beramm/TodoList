<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'controller.php';

$id = $_GET["id"];
if (deleteTgt($id)>0) {
    echo "
    <script>
        alert('succes');
        document.location.href='index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('error');
    </script>
    ";
}
?>
