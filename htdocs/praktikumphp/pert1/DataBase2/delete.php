<?php
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
