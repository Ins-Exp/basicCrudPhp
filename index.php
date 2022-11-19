<html>
<title>front page</title>
<link rel="stylesheet" href="style.css">
<head>
<body>
    <div class="container">
        <h2>List of Furniture</h2>
        <button><a href="add.php">New </a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Type</th>
                    <th><a href="www.google.com"></a>URL</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host="localhost";
                $username="root";
                $password="";
                $database="furniture";

                //create connection
                $connection=new mysqli($host,$username,$password,$database);

                //check connection
                if($connection->connect_error){
                    die("connection failed".$connection->connect_error);
                }

                //read all row from database table
                $sql="SELECT * FROM furniture";
                $result=$connection->query($sql);

                //read data of each row
                while($row=$result->fetch_assoc()){
                    echo "
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[quantity]</td>
                    <td>$row[type]</td>
                    <td>$row[url]</td>
                    <td>$row[description]</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</head>
</html>
