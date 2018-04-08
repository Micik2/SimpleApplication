<?php
session_start();
if ($_SESSION["type"] != "User" and $_SESSION["type"] != "Admin") {
    header("Location: access_denied.php");
    exit();
}
/*else {
    header("Location: 359aa9b46330c85eef98a0353fcfefa8.php");
    exit();
}   */
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
           <h1>Witaj użytkowniku!</h1>
        </div>
        
        

 
    </div>
</body>
 
</html>