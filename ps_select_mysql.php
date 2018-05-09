<?php
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");

include 'db_conn_mysql.php';

$divisionId = $_GET["division_id"];
$districtId = $_GET["district_id"];

$result = $conn->query("SELECT id, thana, division_id, district_id FROM phones where division_id = '$divisionId' AND district_id = '$districtId'");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"division_id":"'   . $rs["division_id"]        . '",';
    $outp .= '"district_id":"'   . $rs["district_id"]        . '",';
    $outp .= '"thana":"'. $rs["thana"]     . '"}';
}
$outp ='{"ps_records":['.$outp.']}';
$conn->close();

echo($outp);
?>