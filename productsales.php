<?php
//setting header to json
header('Content-Type: application/json');

include('function.php');
$query = sprintf("select sum(f.OrderQty) as total , p.ProductName as Nama from factsalesorder f join product p on f.ProductID = p.ProductID group by f.ProductID order by sum(f.OrderQty) desc limit 5 ");
$result2 = $conn->query($query);

$data2 = array();
foreach ($result2 as $row2) {
    $data2[] = $row2;
}

$result2->close();

print json_encode($data2);
