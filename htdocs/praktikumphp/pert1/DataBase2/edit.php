<?php
require 'controller.php';
//$rows=query("SELECT * FROM mahasiswa");
$id = $_GET["id"];
$row = query("SELECT * FROM mahasiswa WHERE id='$id'")[0];




if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
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
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
</head>

<body>
    <h1>edit Mahasiswa</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $row["id"] ?>"> 
        <ul>
            <li>
                <label for="nim">Nim : </label>
                <input type="text" name="nim" id="nim" required value="<?= $row["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $row["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $row["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $row["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $row["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Submit!</button>
            </li>
        </ul>
    </form>
</body>

</html>