<?php

/**
 * Jason Ho - 000774370
 * This work is my own and it has not been copied or shared with anyone. 
 */
include "connect.php";

$courseName = $_REQUEST['course'];
$coords = Array();
$latitude = [];
$longitude = [];

$command = "SELECT latitude, longitude FROM golfCourse WHERE courseName = '$courseName'";
$stmt = $dbh->prepare($command);
$result = $stmt->execute();

while ($row = $stmt->fetch()) {
    array_push($latitude, $row['latitude']);
    array_push($longitude, $row['longitude']);
}

$coords[0] = $latitude;
$coords[1] = $longitude;

if ($result) {
    echo json_encode(array('coords' => $coords));
} else {
    // return error notification back to html file
    echo "new id: {$dbh->lastInsertID()}";
}
