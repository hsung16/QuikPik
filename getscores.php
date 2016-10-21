<?php
header('Access-Control-Allow-Origin: *');

$host="mysql6.000webhost.com"; // Host name 
$username="a5586995_admin"; // Mysql username 
$password="the18team"; // Mysql password 
$db_name="a5586995_quikpik"; // Database name 
$tbl_name="Highscore"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Retrieve data from database 
$sql="SELECT * FROM Highscore ORDER BY Score DESC LIMIT 10";
$result=mysql_query($sql);

// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
echo $rows['Name'] . "|" . $rows['Score'] . "|";

// close while loop 
}

// close MySQL connection 
mysql_close();
?>