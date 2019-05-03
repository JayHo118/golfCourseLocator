<?php

include "connect.php";
$courseName = $_REQUEST['course'];
$command = "SELECT golfCourseID FROM golfCourse WHERE courseName = '$courseName'";
$stmt = $dbh->prepare($command);
$result = $stmt->execute();
$row = $stmt->fetch();
echo $row[0];