<?php
$conn=mysqli_connect('localhost','root','','l5sod');
if(isset($_POST['enter'])){
    $level=$_POST['classroom'];
    $detail=$_POST['classd'];
    $query=$conn->query("INSERT INTO `classroom`(`name`, `detail`) VALUES ('$level','$detail')");
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

<body>
<div class="main">
    <div class="form">
        <form action="" method="post">
            <div class="input">
                <h1>classrooms</h1>
                <label for="">level</label>
            <input type="text" name="classroom" id="" required>
            <label for="">detail</label>
            <input type="text" name="classd" id="" required>
            <button>enter</button>
            </div><div class="a">
            <button type='submit' name='enter'>select</button>
            
        </form><a href="period.php">period </a>
    </div>


  
</div>
</body>
</div>
</html>