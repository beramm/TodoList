
<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $name = $_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "
        <script>
        alert('upload pict !!!');
        </script>
        ";
        return false;
    }
    $validityType = ['jpg', 'jpeg', 'png'];
    $extensi = explode('.', $name);
    $extensi = strtolower(end($extensi));
    if (!in_array($extensi, $validityType)) {
        echo "
        <script>
        alert('invalid type!!!');
        </script>
        ";
        return false;
    }
    if ($size > 1000000) {
        echo "
        <script>
        alert('sugooo okiii!!!');
        </script>
        ";
        return false;
    }
    //valid
    $newName = uniqid();
    $newName .= '.';
    $newName .= $extensi;
    move_uploaded_file($tmp, 'img/' . $newName);
    return $newName;
}
function add($data)
{
    global $conn;


    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa 
    values('','$nama','$nim','$email','$gambar','$jurusan')";
    mysqli_query($conn, $query);

    return (mysqli_affected_rows($conn) > 0);


    //$gambar = htmlspecialchars($data["gambar"]);

}
function deleteTgt($id)
{
    global $conn;

    $query = "DELETE FROM mahasiswa WHERE id='$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function edit($data)
{

    global $conn;

    $id = $data["id"];
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $oldPict = htmlspecialchars($data["oldPict"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $oldPict;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET
    nim='$nim',
    nama='$nama',
    email='$email',
    jurusan='$jurusan',
    gambar='$gambar' 
    WHERE id='$id'
     ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function registration($data)
{
    global $conn;

    $username = strtolower($data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirmation = mysqli_real_escape_string($conn, $data["confirm"]);

    $cekUsername = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");

    if (mysqli_fetch_assoc($cekUsername)) {
        echo "
        <script>
        alert('username taken');
        </script>
        ";
        return false;
    }
    if ($password !== $confirmation) {
        echo "
        <script>
        alert('confirmation password error');
        </script>
        ";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user VALUES('','$username','$password')";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}