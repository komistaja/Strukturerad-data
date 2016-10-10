<?php
include('dbconnect_records.php');
$xml = '<?xml version="1.0" encoding="utf-8" ?>';

$q_students = 'SELECT * FROM students;';

$r_students = mysqli_query($link, $q_students);

$xml .= '<students>'; //behållare

while($row=mysqli_fetch_array($r_students)) {
    $xml .= '<student id="' . $row['id'] . '">
                
                <fname>' . $row['fname'] . '</fname>
                <lname>' . $row['lname'] . '</lname>
            </student>';
}

$xml .= '</students>';
Header('Content-type: text/xml');

echo $xml;

?>