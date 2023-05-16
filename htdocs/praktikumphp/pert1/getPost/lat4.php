<?php
if (
    !isset($_POST["nama"])
) {
    header("Location: lat3.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
</head>

<body>
    <h1>Selamat datang,<?= $_POST["nama"]

                        ?></h1>
</body>

</html>