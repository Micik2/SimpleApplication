<?php
session_start();
//$servername = "";
//$username = "";
//$password = "";
//$dbname = "";

// Create connection
$connection = mysql_connect($servername, $username, $password) or die("Connection failed!");
// Check connection
mysql_select_db($dbname) or die("Unable to find the database!");

$login = $_SESSION["username"];

$sql = "DELETE FROM Session WHERE Login = '$login'";
$result = mysql_query($sql, $connection) or die("Error: " . mysql_error());

$num_rows = mysql_num_rows($result);
echo "Czy był ktoś w sesji: " . $num_rows;
if ($num_rows > 0) {
    unset($_SESSION["username"]);
    unset($_SESSION["type"]);
    mysql_close($connection);
    header("Location: index.php"); 
    exit();
}
else {
    unset($_SESSION["username"]);
    unset($_SESSION["type"]);
    mysql_close($connection);
    header("Location: index.php"); 
    exit();
}
?>
