<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .container{
      display: block;
      margin: 100px auto;
      width: 300px;
      
    }
    .sign-up-alert-success{
      text-align: center;
      display: block;
      margin: 0 auto;
      font-size: 2rem;
      color: green;
    }
    .sign-up-alert-failed{
      text-align: center;
      display: block;
      margin: 0 auto;
      font-size: 2rem;
      color: red;
    }
    .jump-login-page{
      text-align: center;
      display: block;
      text-decoration: none;
      color: black;
      margin: 20px auto;
      padding: 10px 25px;
      font-size: 1.5rem;
      border: 2px solid black;
      border-radius: 10px;
      cursor: pointer;
    }
    .jump-login-page:hover{
      background-color: #444;
      color: white;
    }
    .para{
      text-align: center;
      margin-top: 20px;
      font-size: 1.5rem;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check</title>
</head>
<body>
<?php
//database-set up variables
    $sqlhost='localhost';
    $sqlusr='root';
    $sqldb='dbsignuplogin';
    $sqltbl= 'tbl1';

    $con= mysqli_connect($sqlhost,$sqlusr,'',$sqldb);
    
    $pageusrname= $_POST['userName'];
    $pagepass= $_POST['password'];

    $query= "INSERT INTO $sqltbl VALUES ('$pageusrname','$pagepass')";
    if(mysqli_query($con, $query)){
      echo 
      '<div class="container">
      <h3 class="sign-up-alert-success">Sign Up Successfull</h3>
      <a href="./login.php" class="jump-login-page">Login Page</a>
      </div>';
    }
    else{
      echo 
      "<div class=\"container\">
      <h3 class=\"sign-up-alert-failed\">Sign Up Failed</h3>
      <p class=\"para\">'$pageusrname' is taken, please choose another one!</p>
      </div>";
    }
?>
</body>
</html>