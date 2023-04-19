<?php
//setting header to json
header('Content-Type: application/json');

include('function.php');
$query = sprintf("select sum(f.LineTotal) as total , v.VendorName as Nama from factpurchaseorder f join vendor v on f.VendorID = v.VendorID group by v.VendorID order by sum(f.LineTotal) desc limit 5 ");
$result2 = $conn->query($query);

$data2 = array();
foreach ($result2 as $row2) {
    $data2[] = $row2;
}

$result2->close();

print json_encode($data2);
