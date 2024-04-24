<?php
 
$conn=mysqli_connect("localhost","root","","l5sod");
$data=mysqli_query($conn,"SELECT * FROM users");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>YOUR LOGGGED IN</h1>
    <br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>course</th>
        </tr>
        <?php
        while($dat=mysqli_fetch_array($data)){?>
            <tr>
                <th><?php echo $dat['id'];  ?></th>
                <th><?php echo $dat['name'];  ?></th>
                <th><?php echo $dat['address'];  ?></th>
                <th><?php echo $dat['password'];    ?></th>
            </tr>

        <?php
            
        }




?>

    </table>
    <a href="logout.php">LOG OUT</a>
</body>
</html>