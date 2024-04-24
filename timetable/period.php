<?php
$conn=mysqli_connect('localhost','root','','l5sod');
if(isset($_POST['enter'])){
    $date=$_POST['date'];
    $detail=$_POST['pdetail'];
    $start=$_POST['startime'];
    $end=$_POST['endtime'];

    $query=$conn->query("INSERT INTO `period`(`date`, `detail`, `start_time`, `end_time`)  
    VALUES ('$date',' $detail','$start',' $end')");
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
        <h1>period</h1>
        <label for="">date</label>
        <input type="date" name="date" id="" required>
        <label for="">detail</label>
        <input type="" name="pdetail" id="" required>
        <label for="">startime</label>
        <input type="time" name="startime" id="" required>
        <label for="">endtime</label>
        <input type="time" name="endtime" id="" required>
        <button type="submit" name="enter">Save</button>
        </div><div class="a">
        <button>select</button>
       
    </form>
</div>
<a href="course.php">course </a>
    
</body>
</div>
</html>