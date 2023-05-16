<?php
$Mahasiswa = [
    [
        "nrp" => "21531",
        "nama" => "Beramme",
        "email" => "Beramme@gmail.com",
        "gambar" => "kaela.jpeg"
    ],
    [
        "nrp" => "4049",
        "nama" => "Chandra",
        "email" => "chandra@gmail.com", "gambar" => "ollie.jpg"
    ],
    [
        "nrp" => "2149",
        "nama" => "ray",
        "email" => "ray@gmail.com",
        "gambar" => "moona.png"
    ]
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
</head>

<body>
    <h1>
        Daftar
    </h1>
    <ul>
        <?php foreach ($Mahasiswa as $mhs) : ?>
            <li>
                <a href="lat2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"];
                    ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
                    <?= $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>