<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angulardb";
$datatable = "main"; // MySQL table name
$results_per_page = 20; // number of results per page

$conn = mysql_connect("$servername", "$username", "$password")or die("cannot connect");
$connDB =  mysql_select_db("$dbname")or die("cannot select DB");

$sql = "SELECT * FROM ".$datatable." ORDER BY ID ASC ";
$rs_result = mysql_query($sql);
 
$jRows = array();
 while($row = mysql_fetch_assoc($rs_result)) {
     $jRows[] = $row;
}; 
mysql_close($conn);
print json_encode($jRows);
?> 
 