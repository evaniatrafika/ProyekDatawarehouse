<?php
//setting header to json
header('Content-Type: application/json');

include('function.php');
$query = sprintf("select 
            sum(f.OrderQty) as total, 
            t.tahun as year 
        from factsalesorder f 
        join time t
            on f.time_id = t.time_id 
        group by t.tahun 
        order by year asc 
        limit 5 ");
$result2 = $conn->query($query);
// echo json_encode($result2);
// return;
$data2 = array();
foreach ($result2 as $row2) {
    $data2[] = $row2;
}

$result2->close();

print json_encode($data2);
