<?php
session_start();


if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'controller.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body style="padding-top: 50px;">

    <h1>List Mahasiswa</h1>
    <a href="add.php">Add new Mahasiswa</a>
    <br><br>
    <a href="Regis.php">Sign up</a>
    <a href="logout.php">Logout</a>
    <table cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Act</th>
            <th>Pict</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php
        $counter = 1;
        ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td>
                    <?= $counter
                    ?>
                </td>
                <td>
                    <a href="edit.php?id=<?= $row["id"]; ?>">Change</a> |
                    <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')">Delete</a>
                </td>
                <td>
                    <img src="img/<?= $row["gambar"]; ?>" alt="" style="width: 100px;">
                </td>
                <td><?= $row["nim"];
                    ?></td>
                <td><?= $row["nama"];
                    ?></td>
                <td><?= $row["email"];
                    ?></td>
                <td><?= $row["jurusan"];
                    ?></td>
            </tr>
            <?php
            $counter++;
            ?>
        <?php endforeach;
        ?>
    </table>
</body>

</html>