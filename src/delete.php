<?php
session_start();
require_once("./libs/utils.php");
require_once("./config/db.php");

if (isset($_SESSION['role']) && $_SESSION['role'] == "admin") {
    if (isset($_GET['id'])) {

        $data = [
            'id' => validate($_GET['id'])
        ];
        try {
            echo "delete";
            $sql = "DELETE FROM furniture WHERE id= :id ";
            $stmt = $conn->prepare($sql);
            if ($stmt->execute($data)) {
                // echo "furnityre deleted successfully!";
                // header("Location: read.ui.php?success=successfully deleted");
                ?>
                <script type="text/javascript">
                window.location.href = 'read.ui.php?success=successfully deleted';
                </script>
                <?php
            }
            // $stmt->bindParam(":id", $id);
            // $stmt->execute();

        } catch (Exception $e) {
            echo $sql . "<br>" . $e->getMessage();
            // header("Location: read.ui.php?error=failed to  delete");
            ?>
            <script type="text/javascript">
            window.location.href = 'read.ui.php?error=failed to  delete';
            </script>
            <?php
        }

    } else {
        // header("Location: read.ui.php");
        ?>
<script type="text/javascript">
window.location.href = 'read.ui.php';
</script>
<?php
    }
} else {
    header("Location: index.php?error=unAuthorised");
}




?>