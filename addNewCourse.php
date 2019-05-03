<?php

/**
 * Jason Ho - 000774370
 * This work is my own and it has not been copied or shared with anyone. 
 */
include "connect.php";

$courseName = $_POST["name"];
$address = $_POST['address'];
$phone = $_POST['number'];
$city = $_POST['city'];

    $sql = "INSERT INTO golfCourseApproval(courseName, address, city, phone, latitude, longitude) VALUES ('$courseName', '$address', '$city', '$phone',  '$latitude', '$longitude')";
    $stmt = $dbh->prepare($sql);
    $result = $stmt->execute();
    
if ($result){
    $message = "success";
} else {
    $message = "failure";
	echo $sql;
	echo "new id: {$dbh->lastInsertID()}";
}
echo $message;

?>