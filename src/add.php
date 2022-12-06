<?php
include_once("./config/db.php");
include("./includes/navbar.php");
include_once("./includes/header.php");
include_once("./libs/utils.php");

// session_start();

if (!isset($_SESSION['role'])) {
    header('Location:login.php');
}

?>

<?php

//including the database connection file
// include_once("connection.php");

$errors = [];

if (isset($_POST['Submit'])) {

    $name = validate($_POST['name']);
    $quantity = 10;
    $type = validate($_POST['type']);
    $url = validate($_POST['url']);
    $description = validate($_POST['description']);

    // checking empty fields
    if (count($errors) > 0) {
        echo '<p class="text-red-600 font-bold">Error with adding:</p> <br/>';
        foreach ($errors as $error) {
            echo '<p class="text-red-600">' . $error . "</p>" . '<br/>';
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // echo "here";
        // if all the fields are filled (not empty) 
        try {
            $sql = "INSERT INTO furniture(name, quantity, type, url, description) VALUES(:name , :quantity, :type, :url, :description)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":type", $type, PDO::PARAM_STR);
            $stmt->bindParam(":url", $url, PDO::PARAM_STR);
            $stmt->bindParam(":description", $description, PDO::PARAM_STR);
            $stmt->bindParam(":quantity", $quantity, PDO::PARAM_INT);
            $stmt->execute();
            // header("Location: add.php?success=successfully added");
            ?>
            <script type="text/javascript">
            window.location.href = 'add.php?success=successfully added';
            </script>
            <?php
            // echo "<font color='green'>Data added successfully.";

        } catch (Exception $e) {
            echo "error is" . $e;
            // header("Location: add.php?error=failed to  delet");
            ?>
            <script type="text/javascript">
            window.location.href = 'add.php?error=failed to  delet';
            </script>
            <?php
            
        }
        //insert data to database	


        //display success message


    }
}
?>


<head>

    <title>Add Data</title>
</head>

<body>

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
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
                    <div class="card card-registration my-4">
                        <form action="add.php" method="post" name="form1">
                            <div class="row g-0">

                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://img.freepik.com/free-photo/mockup-poster-frame-modern-interior-background-with-gray-sofa-accessories-room_41470-4903.jpg?w=740&t=st=1668762293~exp=1668762893~hmac=ca87e99411ce058834f8a324c920521bd96dff7ce2c68309a0de2ffd40cfc365"
                                        alt="Sample photo" class=" img-fluid  "
                                        style="max-width: 100%; height: auto;" />
                                </div>

                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">insert Furniture</h3>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example1m" name="name"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m">Name of product</label>
                                        </div>



                                        <!-- <div class="form-outline mb-4">
                                            <input type="text" id="form3Example1m1" name="quantity"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m1">Quantity</label>
                                        </div> -->


                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="type"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Type</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="url"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">url</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example8" name="description"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">description</label>
                                        </div>




                                        <div class="d-flex justify-content-end pt-3">

                                            <button class="btn btn-warning  " type="submit" name="Submit"
                                                value="Add">Submit
                                                form</button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>