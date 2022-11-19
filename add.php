<?php 
include_once("./config/db.php");
include_once("./includes/header.php");

?>

<html>

<head>

    <title>Add Data</title>
</head>

<body>

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
					<form action="add.php" method="post" name="form1">
                        <div class="row g-0">
							
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://img.freepik.com/free-photo/mockup-poster-frame-modern-interior-background-with-gray-sofa-accessories-room_41470-4903.jpg?w=740&t=st=1668762293~exp=1668762893~hmac=ca87e99411ce058834f8a324c920521bd96dff7ce2c68309a0de2ffd40cfc365"
                                    alt="Sample photo" class=" img-fluid  " 
									style="max-width: 100%; height: auto;"
                                    />
                            </div>
                            
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">insert Furniture</h3>

                                          <div class="form-outline mb-4">
                                                    <input type="text" id="form3Example1m" name="name"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Name of product</label>
                                                </div>
                                            

                                       
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="form3Example1m1" name="quantity"
                                                        class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m1">Quantity</label>
                                                </div>
                                            

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
                     
                                            <button class="btn btn-warning btn-lg ms-2" type="submit" name="Submit" value="Add">Submit
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



    <body>
        <?php
//including the database connection file
// include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$quantity= $_POST['quantity'];
	$type = $_POST['type'];
	$url = $_POST['url'];
	$description = $_POST['description'];

	// checking empty fields
	if(empty($name) || empty($quantity) || empty($type) || empty($url)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($quantity)) {
			echo "<font color='red'>Quantity field is empty.</font><br/>";
		}
		
		if(empty($type)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}
		if(empty($url)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO furniture(name, quantity, type, url, description) VALUES('$name','$quantity','$type', '$url' ,'$description')");
		
		//display success message
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='form.php'>View Result</a>";
	}
}
?>
    </body>

</html>