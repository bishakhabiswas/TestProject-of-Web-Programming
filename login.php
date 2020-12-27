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
	  font-family: 'Poppins', sans-serif;
    }
	body{
		
		background: #614385;  
		background: -webkit-linear-gradient(to left, #516395, #614385);  
		background: linear-gradient(to left, #516395, #614385); 

	}
    .container{
      width: 300px;
      display: block;
      margin: 100px auto;
      background: linear-gradient(30deg, rgba(77,79,129,0.5) 32%, rgba(83,69,124,0.5) 64%);
      border-radius: 25px;
      padding: 40px 20px;
	  color:#c499ff;
	  box-shadow: 5px 8px 12px 1px rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);
	  transition: 1s;
	  letter-spacing:2px;
    }
	.container:hover{
		
		 box-shadow: 0 8px 12px 0 rgba(199, 152, 255, 1), 0 12px 40px 0 rgba(199, 152, 255, 0.19);
		  
	}
    h1{
      font-size: 3rem;
      text-align: center;
      margin-bottom: 30px;
	  color:#cd90ff;
	  text-shadow: 1px 1px 2px rgba(199, 152, 255, 1), 0 0 25px rgba(199, 152, 255, 0.19);
    }
    form{

    }
    form label{
      display: block;
      font-size: 24px;
      margin-top: 5px;
    }
    .input{

      display: block;
      width: 260px;
      font-size: 20px;
      margin: 5px 0;
	  margin-bottom:15px;
      padding: 10px;
      border: 2px solid rgba(0, 0, 0, 0.5);
      background-color: rgba(0, 0, 0, 0.1);
      transition:0.5s;
    }
	.input:hover{
		
		 box-shadow: 0 8px 12px 0 rgba(199, 152, 255, 1), 0 12px 40px 0 rgba(199, 152, 255, 0.19);
	}
	
   

   .submit-button{
       background-color: rgba(0, 0, 0, 0.1);
		  font-weight: bolder;
      display: block;
	   color:#cd90ff;
      margin: 50px auto 20px auto;
      padding: 10px 25px;
	  width:250px;
      font-size: 1.5rem;
      border: 2px solid #f5b9ff;
		  border-radius: 10px;
		transition: 1s;  
}

    
	
	
    .submit-button:hover{
      box-shadow:
			inset 0 0 50px #fff,
			inset 20px 0 80px #f0f,
			inset -20px 0 80px #0ff,
			inset 20px 0 300px #f0f,
			inset -20px 0 300px #0ff,
			0 0 50px #fff,
			-10px 0 80px #f0f,
			10px 0 80px #0ff;
      color: #555c91;
	   
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
</head>
<body>
<div class="container">
  <h1>Login</h1>
  <form action="logincheck.php" method="post">
    <label for="userName">User Name</label>
    <input type="text" name="userName" id="userName" class="input" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="input" required>
    <input type="submit" value="Log in" class="submit-button">
  </form>

</div>
</body> 
</html>
