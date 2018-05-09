<?php
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");

include 'db_conn_mysql.php';

$divisionId = $_GET["division_id"];

$result = $conn->query("SELECT id, name FROM districts where division_id = '$divisionId'");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"name":"'. $rs["name"]     . '"}';
}
$outp ='{"district_records":['.$outp.']}';
$conn->close();

echo($outp);
?>