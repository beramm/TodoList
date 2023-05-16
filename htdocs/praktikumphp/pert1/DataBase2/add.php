<?php
require 'controller.php';
if (isset($_POST["submit"])) {
    if (add($_POST) > 0) {
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
    <h1>Add New Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                img
                <label for="nim">Nim : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Submit!</button>
            </li>
        </ul>
    </form>
</body>

</html>