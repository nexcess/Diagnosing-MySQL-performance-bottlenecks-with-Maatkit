<?php
// DB CONNECTION
$dbhost = 'localhost';
$dbuser = 'some_dbuser';
$dbpass = 'some_dbpass';
$dbname = 'some_database';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname, $conn);

for( $i=1; $i<=100000; $i++ )
{
mysql_query("INSERT INTO some_table (number) VALUES ('$i')");
//printf("$i");
}
mysql_close($conn);

?>
