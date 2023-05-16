<?php
require 'controller.php';
$todoList = query("SELECT * FROM list");
if (isset($_POST["submit"])) {
    if (add($_POST) > 0) {
        header("Location: index.php");
        exit;
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
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        a {
            padding: 0px 5px;
        }
    </style>
</head>

<body>
    <div class="wrapper" style="position: fixed;
    top: 0;
    left: 0;
    filter: blur(64px);">
        <div class="content" style="aspect-ratio: 1/1;
        width: 100vw;
        background-image: linear-gradient(to right, #e57bc0, #7d7be5);
        opacity: 0.5;
        clip-path: polygon(51% 18%, 89% 6%, 80% 35%, 100% 70%, 85% 68%, 23% 91%, 36% 52%, 0% 70%, 10% 39%, 7% 5%);
    ">

        </div>
    </div>
    <section class="vh-100" id="content">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-8 col-xl-6">
                    <div class="card rounded-3" style="border: none;
                        box-shadow: inset 0px 0px 10px 5px rgba(0,0,0,0.3);">
                        <div class="card-body p-4">

                            <p class="mb-2"><span class="h2 me-2">Todo List</span> <span class="badge bg-danger">checklist</span></p>
                            <form action="" method="post">
                                <div class="d-flex flex-row align-items-center">
                                    <input type="text" class="form-control form-control-lg" id="task" name="task" placeholder="Add new..." autocomplete="off" required autofocus>
                                    <a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i class="fas fa-calendar-alt fa-lg me-3"></i></a>

                                    <div>
                                        <button type="submit" class="btn btn-primary" name="submit">Add</button>
                                    </div>
                                </div>
                            </form>

                            <ul class="list-group rounded-0">
                                <?php foreach ($todoList as $todo) : ?>

                                    <?php
                                    if ($todo["status"] == 0) : ?>

                                        <input type="hidden" name="id" value="<?= $todo["id"] ?>">
                                        <div>
                                            <a href="ChangeStatus.php?id=<?= $todo["id"]; ?>" type="change" name="change"><i class="fa fa-check"></i></a>
                                            <div style=" width: 85%; display: inline-block;">
                                                <?=
                                                $todo["task"];
                                                ?>
                                            </div>
                                            <a href="delete.php?id=<?= $todo["id"]; ?>"><i class="fa fa-trash" type="delete" name="delete" onclick="return confirm('yakin ? ')"></i></a>
                                            <a href="edit.php?id=<?= $todo["id"]; ?>"><i class="fa fa-pencil" type="edit" name="edit"></i></a>
                                        </div>
                                    <?php endif ?>
                                    <?php if ($todo["status"] == 1) : ?>

                                        <input type="hidden" name="id" value="<?= $todo["id"] ?>">
                                        <div>
                                            <a href="ChangeStatus.php?id=<?= $todo["id"]; ?> " style="padding-right: 7px;" type="change" name="change"><i class="fa fa-undo"></i></a>
                                            <div style=" width: 85%; display: inline-block;" checked>
                                                <s>
                                                    <?= $todo["task"];
                                                    ?>
                                                </s>
                                            </div>
                                            <a href="delete.php?id=<?= $todo["id"]; ?>"><i class="fa fa-trash" type="delete" name="delete" onclick="return confirm('yakin?')"></i></a>
                                            <a href="edit.php?id=<?= $todo["id"]; ?>"><i class="fa fa-pencil" type="edit" name="edit"></i></a>
                                        </div>

                                    <?php endif ?>
                                <?php endforeach ?>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>