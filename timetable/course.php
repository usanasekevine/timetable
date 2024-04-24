<?php
$conn=mysqli_connect('localhost','root','','l5sod');
if(isset($_POST['yes'])){
    $coursename=$_POST['course'];
    $detail=$_POST['detail'];
    $query=$conn->query("INSERT INTO `course`(`name`, `detail`) VALUES ('$coursename','$detail')");
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
>
<body>
    <div class="form">
    <form action="" method="post">
        <div class="input">
        <h1>course</h1>
        <label for="">coursename</label>
        <input type="text" name="course" id="" required>
        <label for="">detail</label>
        <input type="text" name="detail" id="" required>
        <button type='submit' name='yes'>enter</button>
        </div><div class="a">
        <button >select</button>
     
    </form>
</div>
<a href="classroom.php">classroom </a>
    
</body>
</div>
</html>