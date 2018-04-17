<?php
include 'connect.php';



$sql = "select * from shows";
$result = $conn->query($sql);

$list = array();


while($row = $result->fetch_assoc()) {
    $list[] = array('title' => $row["title"], 'genre' => $row["genre"], 'votes' => $row["votes"]);
}

echo json_encode($list);



?>
