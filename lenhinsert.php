<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoc lenh insert</title>
</head>
<body>
<?php 
include_once(__DIR__. '/../dbconnect.php');
$diachi = 'abcd';
$sql="INSERT INTO `khachhang`(kh_ten) VALUE('$diachi');";
var_dump($sql);
die;
mysqli_query($conn, $sql);
?>
</body>
</html>