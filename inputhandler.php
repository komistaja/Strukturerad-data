<?php
// variable with string data in json format
$recordsJson = '{ "records" :[
    {"title":"Tanssilaulu", "artist":"Matti&Teppo", "genre":"iskelmä", "year":"1985", "company":"Oh bro AB", "producer":"That Bro"},
    {"title":"Oispa kaljaa", "artist":"Matti Nykänen", "genre":"hyppylaulut", "year":"1998", "company":"Kaljaa AB", "producer":"Mervi Tapola"},
    {"title":"Ei ollu", "artist":"Kaljamiehet", "genre":"grindcore", "year":"2005", "company":"Dat Beer Oy", "producer":"No hoe"},
    {"title":"Benis", "artist":"Rane ja kollit", "genre":"humppa", "year":"1999", "company":"Ei ollut kaljaa Oy", "producer":"Veli Bro"} ]}';

$recordsarr = json_decode($recordsJson); // converts string format json data into php object


if(isset($recordsarr)) { //checks if records var is set
	
	if(mysqli_query($link, "SELECT * FROM records")) { //checks if database table is empty. dunno how, but it works
	for($i = 0; $i < count($recordsarr->records); $i++) {  //for loops through objects, prints properties 
	$q_insert = "INSERT INTO records (title, artist, genre, year, company, producer) 
	VALUES (
	'" . $recordsarr->records[$i]->title . "',
	'" . $recordsarr->records[$i]->artist . "',
	'" . $recordsarr->records[$i]->genre . "',
	'" . $recordsarr->records[$i]->year . "',
	'" . $recordsarr->records[$i]->company . "',
	'" . $recordsarr->records[$i]->producer . "')";
	
	
	if(!mysqli_query($link, $q_insert)) {
		$output = "Rivin lisäys ei onnistunut";
		$output .= mysqli_error($link);
		exit();
	} else {
		$output = "Rivi lisätty";
	}
        
	} // closes for
	} // closes tablecheck if
} // closes if isset($recordsarr)
?>