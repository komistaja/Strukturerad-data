<?php
include('dbconnect_records.php');
$json = '<?xml version="1.0" encoding="utf-8" ?>';

$q_students = 'SELECT * FROM students;';

$r_students = mysqli_query($link, $q_students);

$json = '{"students": [
    ';

while($row=mysqli_fetch_array($r_students)) {
    $json .= '{"id": ' . $row['id'] . ', ';
    $json .= '"firstname": "' . $row['fname'] . '", ';
    $json .= '"lastname": "' . $row['lname'] . '"},
    ';
}
$json .= ']}';
Header("Access-Control-Allow-Origin: *");
Header("Content-type: application/json charset=utf-8");
echo str_replace(',\n\t]', ']', $json);

?>