<?PHP

$user_name = "root";
$password = "root";
$database = "peopledata";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

$SQL = "SELECT * FROM histogram1";
$result = mysql_query($SQL);

while ( $db_field = mysql_fetch_assoc($result) ) {

print $db_field['TweetCategory'] . "<BR>";
print $db_field['NumberOfTweets'] . "<BR>";

}

mysql_close($db_handle);

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}

?>