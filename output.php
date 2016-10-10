<?php
$base_q = "SELECT * FROM records";

$r_output = mysqli_query($link, $base_q); 
$output = mysqli_fetch_object($r_output);

var_dump($output);
?>