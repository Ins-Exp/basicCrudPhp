<?php 

if (isset($_GET['id'])) {
	require_once("./libs/utils.php");
    require_once("./config/db.php");
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM furniture WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }

}else if(isset($_POST['update'])){
        
    include "../db_conn.php";
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
       
	$name = validate($_POST['name']);
        $qunatity = validate($_POST['quantity']);
        $type = validate($_POST['type']);
        $url = validate($_POST['url']);
        $description = validate($_POST['description']);
	$email = validate($_POST['email']);
	$id = validate($_POST['id']);
       
	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($email)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else {
                

       $sql = "UPDATE furniture
               SET name='$name', quantity='$quantity',type='$type',url='$url', description='$description', email='$email'
               WHERE id=$id ";
            
       $result = mysqli_query($conn, $sql);
       
       if ($result) {
        
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}