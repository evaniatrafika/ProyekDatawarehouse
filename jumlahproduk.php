<?php
//setting header to json
header('Content-Type: application/json');

include('function.php');
$query = sprintf("select count(*) as total , ProductCategory as Nama from product where ProductCategory IS NOT NULL Group by ProductCategory order by count(*) desc limit 5 ");
$result2 = $conn->query($query);

$data2 = array();
foreach ($result2 as $row2) {
    $data2[] = $row2;
}

$result2->close();

print json_encode($data2);
