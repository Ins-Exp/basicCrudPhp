<?php
require_once("./libs/utils.php");
require_once("./config/db.php");




if (isset($_GET['id'])) {
        $id = validate($_GET['id']);

        $sql = "SELECT * FROM furniture WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $count = $stmt->rowCount();
        //     $result = mysqli_query($conn, $sql);

        if ($count > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
                header("Location: read.ui.php?id=$id&error=no furniture with this id");
        }

} else if (isset($_POST['update'])) {

        $name = validate($_POST['name']);
        // $qunatity = validate($_POST['quantity']);
        $type = validate($_POST['type']);
        $url = validate($_POST['url']);
        $description = validate($_POST['description']);

        $id = validate($_POST['id']);

        if (empty($name) || empty($type) || empty($description)) {
                header("Location: update.ui.php?id=$id&error=Name is required");

        } else {
                try {
                        // echo 'here';
                        // write_to_console("here");
                        $sql = "UPDATE furniture SET   name = :name,  type= :type,  url= :url, description=:description WHERE id= :id ";

                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(":id", $id);
                        $stmt->bindParam(":name", $name);
                        // $stmt->bindParam(":quantity", $quantity);
                        $stmt->bindParam(":type", $type);
                        $stmt->bindParam(":url", $url);
                        $stmt->bindParam(":description", $description);
                        $stmt->execute();
                        header("Location: read.ui.php?success=successfully updated");
                } catch (Exception $e) {
                        write_to_console($e);
                        echo $e;
                        header("Location: update.ui.php?id=$id&error=erorr can not update");
                }

        }
} else {
        header("Location: read.ui.php?error=unknown request ");
}