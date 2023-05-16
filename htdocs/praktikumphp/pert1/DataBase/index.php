<?php
require 'controller.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="StylesLogin.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>LOGIN</title>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        #ContainerHeader h1 {
            font-size: 40px;
            text-align: center;
        }

        #ContainerHeader {
            margin-bottom: 0px;
        }

        #ContainerSign {
            margin-top: 0px;
            padding-top: 0px;
            padding: 20px 35px;
            border-radius: 25px;
            padding-bottom: 40px;
        }

        /*for chrome & safari*/
        input[type="number"]::-webkit-inner-spin-button {
            display: none;
        }

        /*firefox*/
        input[type="number"] {
            -moz-appearance: textfield;
            appearance: textfield;
        }

        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body style="padding-top: 50px;">

    <h1>List Mahsiswa</h1>
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
                    <a href="">Change</a> |
                    <a href="">Delete</a>
                </td>
                <td>
                    <img src="<?= $row["gambar"]; ?>" alt="" style="width: 100px;">
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











    <section class="vh-100" style="height: 100%
    ;">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 " id="ContainerSign">
                    <form>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Sign In</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="number" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid NIM" inputmode="numeric" />
                            <label class="form-label" for="form3Example3">NIM</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>
                        <!--Login Button Part-->
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-primary btn-lg" id="loginBtn" href="/kapu/kapu/beranda/BerandaPage.html" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-center py-1 px-4 px-xl-5 bg-light bottom-0 fixed-bottom">
            <!-- Copyright -->
            <div class="text-dark mb-3 mb-md-0" style="text-align: center;">
                KPU Sanata Dharma 2023
                <br>
                Copyright © 2023
            </div>
            <!-- Copyright -->

            <!-- 
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            Right -->
        </div>
    </section>
    <script>
        document.getElementById("form3Example3").addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("form3Example4").focus();
            }
        });

        document.getElementById("form3Example4").addEventListener("keypress", function(event) {
            if (event.keyCode === 13) {
                document.getElementById("loginBtn").click();
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>