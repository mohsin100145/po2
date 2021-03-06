<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

include 'db_conn_mysql.php';

$divisionId = $_GET["division_id"];

$result = $conn->query("SELECT phones.id, phones.username, districts.name AS district, divisions.name AS division, phones.police_station, phones.incharge, phones.duty_officer, phones.oc, phones.address
FROM phones
INNER JOIN districts ON phones.district_id=districts.id
INNER JOIN divisions ON phones.division_id=divisions.id
where phones.division_id = '$divisionId'");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["id"] . '",';
    $outp .= '"username":"'   . $rs["username"]        . '",';
    $outp .= '"district":"'   . $rs["district"]        . '",';
    $outp .= '"division":"'   . $rs["division"]        . '",';
    $outp .= '"police_station":"'   . $rs["police_station"]        . '",';
    $outp .= '"incharge":"'   . $rs["incharge"]        . '",';
    $outp .= '"duty_officer":"'   . $rs["duty_officer"]        . '",';
    $outp .= '"oc":"'   . $rs["oc"]        . '",';
    $outp .= '"address":"'   . $rs["address"]        . '",';
    $outp .= '"remarks":"'. $rs["remarks"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>