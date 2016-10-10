<!doctype html>
<?php
include('dbconnect_records.php');


?>
<html>
<head>
    <title>json exempel 1</title>
<meta charset="UTF-8">
</head>
    <body>
        <a href="php_xml.php">PHP databas till XML</a>
        <br>
        <a href="php_json.php">PHP databas till json</a>
        <div id="benis">
        </div>
    </body>

<script>
// creates json format object
var benis = '{ "records" : [' +
  '{"title":"Tanssilaulu", "Artist":"Matti&Teppo", "Genre":"iskelmä", "Year":"1985", "company":"Oh bro AB", "producer":"That Bro"},' +
  '{"title":"Oispa kaljaa", "Artist":"Matti Nykänen", "Genre":"hyppylaulut", "Year":"1998", "company":"Kaljaa AB", "producer":"Mervi Tapola "},' +
  '{"title":"Ei ollu", "Artist":"Kaljamiehet", "Genre":"grindcore", "Year":"2005", "company":"Dat Beer Oy", "producer":"No hoe"},' +
  '{"title":"Benis", "Artist":"Rane ja kollit", "Genre":"humppa", "Year":"1999", "company":"Ei ollut kaljaa Oy", "producer":"Veli Bro"} ]}';

var benis = JSON.parse(benis);  // json.parse parses json object -> array


// funktion writes arr.records as <ul><li>    
function benisTulostus(arr) { 
    var out = ""; // declares variable out
    var i; // declares counter
    for(i = 0; i < arr.records.length; i++) {
        out += '<ul>';
        out += '<li>Title: ' + arr.records[i].title + '</li>';
        out += '<li>Artist: ' + arr.records[i].Artist + '</li>';
        out += '<li>Genre: ' + arr.records[i].Genre + '</li>';
        out += '<li>Year: ' + arr.records[i].Year + '</li>';
        out += '<li>Company: ' + arr.records[i].company + '</li>';
        out += '<li>Producer: ' + arr.records[i].producer + '</li>';
        out += '</ul>';
    }
    document.getElementById("benis").innerHTML = out;
}


benisTulostus(benis); // calls function

</script>
<?php

include('inputhandler.php'); // file contains data in json-format, handler that inputs data into 'records' sql-table if table is empty
    
include('output.php');

?>
</html>