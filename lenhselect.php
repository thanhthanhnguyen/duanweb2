<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thực thi lệnh select</title>
</head>
<body>
    <?php 
    include_once(__DIR__. '/../dbconnect.php');
    $sql= <<<EOT
SELECT httt_ma as MaThanhToan ,httt_ten as TenThanhToan FROM `hinhthucthanhtoan`
EOT;
$result = mysqli_query($conn, $sql);
$data=[];
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $data = array(
        'ma' => $row('MaThanhToan');
    )
}

    ?>
</body>
</html>