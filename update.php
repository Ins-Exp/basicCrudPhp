<?php include 'php/update.php'; ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Name</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?=$row['name'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="quantity">quantity</label>
		     <input type="name" 
		           class="form-control" 
		           id="quantity" 
		           name="quantity" 
		           value="<?=$row['quantity'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="type">type</label>
		     <input type="name" 
		           class="form-control" 
		           id="type" 
		           name="type" 
		           value="<?=$row['type'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="url">url</label>
		     <input type="name" 
		           class="form-control" 
		           id="url" 
		           name="url" 
		           value="<?=$row['url'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="description">description</label>
		     <input type="name" 
		           class="form-control" 
		           id="description" 
		           name="description" 
		           value="<?=$row['description'] ?>" >
		   </div>
		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>