<?php


require 'controller.php';

$id = $_GET["id"];
if (deleteTgt($id)>0) {
    header("Location: index.php");
    exit;
} else {
    echo "
    <script>
        alert('error');
    </script>
    ";
}
?>