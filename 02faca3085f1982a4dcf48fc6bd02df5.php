<?php
session_start();
if ($_SESSION["type"] != "Admin") {
    header("Location: access_denied.php");
    exit();
}
/*else {
    header("Location: 02faca3085f1982a4dcf48fc6bd02df5.php");
    exit();
}  */ 
?>
<!DOCTYPE html>
<!--<html lang="en">-->
<html lang="pl-PL">
 
<head>
    <meta charset="UTF-8">
    <title>PHP App</title>
 
 
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <link href="../static/css/signup.css" rel="stylesheet">
 
 
</head>
 
<body>
 
    <div class="container">
        <div class="header">
            <nav>
                <ul class="nav nav-pills pull-left">
                    <li role="presentation" class="active"><a href="logout.php">Wyloguj</a>
                    </li>
                </ul>
            </nav>
            <h3 class="text-muted"><center>PHP test app</center></h3>
        </div>
 
        <div class="jumbotron">
           <h1>Witaj administratorze!</h1>
        </div>

 
    </div>
</body>
 
</html>