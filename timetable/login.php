<?php
$conn=mysqli_connect('localhost','root','','l5sod');
if(isset($_POST['enter'])){
    $username=$_POST['username'];
    $detail=$_POST['email'];
    $query=$conn->query("INSERT INTO `users`(`name`, `email`) VALUES ('$username','$detail')");
    print_r($query);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body><div class="form">
    <form action="" method="post">
        <div class="input">
        <h1>user</h1>
        <label for="">username</label>
        <input type="text" name="username" id="" required>
        <label for="">email</label>
        <input type="text" name="email" id="" required>
        <button type='submit'name='enter'>enter</button>
        </div><div class="a">
        <button>select</button>
     
    </form>
</div>
<a href="course.php">course </a>
    
</body>
</div>
</html>