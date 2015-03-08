<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=mines user=postgres password=msgis");
$qury1 = "SELECT ST_AsGeoJSON(geom) from mweb limit 1";
$result1 = pg_query($dbconn,$qury1);
if($result1){
echo "<p>".$result1."</p>";


}
?>