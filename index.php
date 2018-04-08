<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="pl-PL">
<!--html lang="en">-->
  <head>
    <meta charset="UTF-8">
    <title>PHP App</title>
 
    
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <link href="../static/css/signup.css" rel="stylesheet">
    <script src="../static/js/jquery-1.12.3.js"></script>
    
  </head>
 
  <body>
 
    <div class="container">
 
      <div class="jumbotron">
        <h1>Pierwsza aplikacja PHP</h1>
        <form class="form-signin" action="validate_login.php" method="post">
            <label for="inputLogin" class="sr-only">Login</label>
            <input type="text" maxlength="11" name="inputLogin" class="form-control" placeholder="Login" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="inputPassword" class="form-control" placeholder="Password" required >
         
            <h2><button id="btnSignIn" class="btn btn-lg btn-primary btn-block" type="submit">Potwierdź logowanie</button></h2>
        </form>
      </div>
 
 
    </div>
  </body>
</html>



<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php //echo "<p>Hello World</p>"; 
        //echo 'Current PHP version: ' . phpversion();
        
        //$servername = "";
        //$username = "";
        //$password = "";
        //$dbname = "";
  
        // Create connection
        $connection = mysql_connect($servername, $username, $password) or die("Connection failed!");
        mysql_select_db($dbname) or die("Unable to find the database!");
        ?> 
    </body>
</html>