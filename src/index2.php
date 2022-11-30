
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form class="form" action="cmd.php" method="post" >
  <div class="form-group">
    <label for="cmd"> Terminal </label>
    <input  class="form-control"  type="text" name="cmd" id="cmd" placeholder="enter command" rows="3">
  </div>
  <button type="submit" name="submit" class="btn btn-info">Run</button>
  <br><br>
  <a href="index.php" class="btn btn-danger">Back</button></a>
</form>



</body>
</html>

 