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
      width: 400px;
      margin: 100px auto;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }
    .button{
      text-decoration: none;
      color: black;
      padding: 10px 40px;
      border: 2px solid black;
      border-radius: 10px;
      text-align: center;
      font-size: 1.75rem;
    }
    .button:hover{
      color: white;
      background-color: #444;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <div class="container">
    <a class="button" href="signin.php">Sign Up</a>
    <a class="button" href="login.php">Log In</a>
  </div>
</body>
</html>