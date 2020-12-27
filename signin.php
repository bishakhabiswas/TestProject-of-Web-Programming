<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Open Sans', sans-serif;
    }
    body{
      background: rgb(238,174,202);
      background: linear-gradient(231deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%) fixed;
    }
    .container{
      width: 300px;
      display: block;
      margin: 100px auto;
      border: 4px solid white;
      border-radius: 25px;
      padding: 40px 20px;
      background: rgba(0, 0, 0, 0.1);
    }
    h1{
      font-size: 2.75rem;
      text-align: center;
      padding: 5px 0;
      border: 1 solid rgba(0, 0, 0, 0);
      border-radius: 10px;
      margin-bottom: 20px;
      font-weight: bolder;
      color: white;
      letter-spacing: 5px;
      background: linear-gradient(65deg, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
    form{
    }
    form label{
      font-size: 1.75rem;
      letter-spacing: 1.5px;
      display: block;
      margin-top: 5px;
      color: white;
    }
    .input{
      display: block;
      width: 100%;
      font-size: 20px;
      margin: 5px 0;
      padding: 8px 5px;
      border: 2px solid rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      background-color: rgba(255, 255, 255, 0.9);
    }
    .submit-button{
      font-weight: bolder;
      display: block;
      margin: 20px auto;
      padding: 10px 25px;
      font-size: 1.5rem;
      color: white;
      border: 2px solid white;
      border-radius: 10px;
      /* cursor: pointer; */
      background: rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease-in ;
    }
    .submit-button:hover{
      background: rgb(238,174,202);
      background: linear-gradient(45deg, rgba(238,174,202,0.7) 0%, rgba(148,187,233,0.7) 100%);
      padding: 10px 30px;
      color: white;
      border: 2px solid white;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
</head>
<body>
  <div class="container">
    <h1>Sign up</h1>
    <form action="signincheck.php" method="post">
      <label for="userName">User Name</label>
      <input type="text" name="userName" id="userName" class="input" required>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="input" required>
      <input type="submit" value="Sign in" class="submit-button">
    </form>
  </div>
</body>
</html>