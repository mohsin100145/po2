<?php
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");

include 'db_conn_mysql.php';

$result = $conn->query("SELECT id, name FROM districts");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"name":"'. $rs["name"]     . '"}';
}
$outp ='['.$outp.']';
$conn->close();

echo($outp);
?>