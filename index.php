<?php
// DB CONNECTION
$dbhost = 'localhost';
$dbuser = 'some_dbuser';
$dbpass = 'some_dbpass';
$dbname = 'some_database';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);

// Start the timer
$time = microtime();
$time = explode(" ", $time);
$time = $time[1] + $time[0];
$start = $time;

// Query the DB
$myArr = array();
$someNumbers =  implode(',', array(rand(1, 100000), rand(1, 100000), rand(1, 100000), rand(1, 100000), rand(1, 100000)));
$sql = "SELECT * FROM `some_table` WHERE `number` IN ($someNumbers)";
$resource = mysql_query($sql, $conn);
while($records = mysql_fetch_assoc($resource)){
  $myArr[] = $records;
}

var_dump($myArr);

// Stop the timer and show how long it took
$time = microtime();
$time = explode(" ", $time);
$time = $time[1] + $time[0];
$finish = $time;
$totaltime = ($finish - $start);
printf ("Page generated in %f seconds.", $totaltime);
?>

