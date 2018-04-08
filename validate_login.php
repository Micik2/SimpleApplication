<?php
session_start();
//$servername = "";
//$username = "";
//$password = "";
//$dbname = "";

$connection = mysql_connect($servername, $username, $password) or die("Connection failed!");
//echo $connection;
mysql_select_db($dbname) or die("Unable to find the database!");

$login = $_POST["inputLogin"];
//echo $login;
$password = $_POST["inputPassword"];
$pass_hash = hash("md5", $password);
//echo $password;

$sql1 = "SELECT Login FROM Users WHERE Login = '$login'";
$result1 = mysql_query($sql1, $connection) or die("Error: " . mysql_error());
echo "Login result: " . $result1;

$sql2 = "SELECT Password FROM Users WHERE Login = '$login' AND Password = '$pass_hash'";
$result2 = mysql_query($sql2, $connection) or die("Error: " . mysql_error());
echo "Password result: " . $result2;

$sql3 = "SELECT Role FROM Users WHERE Login = '$login'";
echo "Login: " . $login;
$result3 = mysql_query($sql3, $connection) or die("Error: " . mysql_error());
echo "Role result: " . $result3;
$row = mysql_fetch_row($result3);
echo "Row: " . $row;
$role = $row[0];
echo "Role: " . $role;

$num_rows1 = mysql_num_rows($result1);
echo "<br>Users with the same login: " . $num_rows1;
$num_rows2 = mysql_num_rows($result2);
echo "<br>Users with the same login and password: " . $num_rows2 . "<br>";


if ($num_rows1 > 0) {
    if ($num_rows2 > 0) {
        $_SESSION["username"] = $login;
        echo "Login: " . $login;
        echo "<br>Session username: " . $_SESSION["username"];
        if ($role == "Admin") {
            $_SESSION["type"] = "Admin";
            echo "Admin!";
            header("Location: 02faca3085f1982a4dcf48fc6bd02df5.php");
            exit();
        }
        elseif ($role == "User") {
            $_SESSION["type"] = "User";
            echo "User!";
            header("Location: 359aa9b46330c85eef98a0353fcfefa8.php");
            exit();
        }
    }
    else {
        header("Location: wrong_password.php");
        exit();
    }
} 
else {
    header("Location: wrong_login.php");
    exit();
}


/*$_SESSION["username"] = $login;
header("Location: index.php");
*/
mysql_close($connection);
//$conn->close();
?>