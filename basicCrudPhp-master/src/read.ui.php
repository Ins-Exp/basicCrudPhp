<?php include "read.php";
// include "delete.php";
// include_once("./includes/header.php");
include("./includes/navbar.php");
if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    // header("Location:index.php");
?>
<script type="text/javascript">
window.location.href = 'login.php';
</script>
<?php
}
?>


<head>
    <title>view</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <h4 class="display-4 text-center">View</h4><br>
            <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success']; ?>
            </div>
            <?php } ?>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            <?php if ($row) { ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">image</th>
                        <th scope="col">Name</th>

                        <th scope="col">type</th>

                        <th scope="col">description</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $i = 1;
                foreach ($row as $rows) {
                    $i++;
                    ?>
                    <tr>
                        <th scope="row">
                            <?= $i ?>
                        </th>
                        <td>
                            <img src="<?= $rows['url'] ?>" class="rounded-circle shadow-4" style="width: 150px;"
                                alt="Avatar" />

                        </td>
                        <td>
                            <?= $rows['name'] ?>
                        </td>

                        <td>
                            <?= $rows['type'] ?>
                        </td>

                        <td>
                            <?= $rows['description'] ?>
                        </td>

                        <td><a href="update.ui.php?id=<?= $rows['id'] ?>" class="btn btn-success">Update</a>

                            <a href="delete.php?id=<?= $rows['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
            <div class="link-right">
                <a href="add.php" class="link-primary">Create</a>
            </div>
        </div>
    </div>
</body>

</html>