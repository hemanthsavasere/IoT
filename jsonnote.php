<?php 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$database = "travel"; 

$linkID = mysql_connect($host, $user, $pass) or die("Could not connect to host."); 
mysql_select_db($database, $linkID) or die("Could not find database."); 

$query = mysql_query("SELECT * FROM notes WHERE status='Active' ORDER BY timestamp DESC;");
$rows = array();
while($row = mysql_fetch_assoc($query)) {
    $rows[] = $row;
}
print json_encode($rows);
?>