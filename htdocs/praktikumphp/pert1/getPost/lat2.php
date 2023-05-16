<?php
if (
    !isset($_GET["nama"]) || !isset($_GET["nrp"])
    || !isset($_GET["gambar"]) || !isset($_GET["email"])
) {
    header("Location: lat1.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
</head>

<body>
    <ul>
        <li>
            <img src="<?= $_GET["gambar"] ?>" alt="" style="width: 200px;">
        </li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["nrp"] ?></li>
        <li><?= $_GET["email"] ?></li>
    </ul>
</body>

</html>