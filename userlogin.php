<!DOCTYPE html>
<html>
<head>
	<title>USER LOGIN</title>
  <style>
  body {
background: #CCCFBD;
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
flex-direction: column;
}

*{
font-family: sans-serif;
box-sizing: border-box;
}

form {
width: 500px;
border: 2px solid #ccc;
padding: 30px;
background: #fff;
border-radius: 15px;
}

h2 {
text-align: center;
margin-bottom: 20px;
}

input {
	width: 100%;
	padding: 15px;
	margin: 5px 0 22px 0;
	display: inline-block;
	border: none;
	background: #f1f1f1;
}

label {
color: #888;
font-size: 18px;
padding: 10px;
}

.box{
	margin: 5px 5px;
	width:auto;
}

button {
float: right;
background-color: #AEAF96;
padding: 10px 15px;
color: #fff;
border-radius: 5px;
margin-right: 10px;
border: none;
opacity: 0.8;
}

button:hover {
	opacity: 1;
}

.cancelbtn{
	float: left;
}

.error {
 background: #F2DEDE;
 color: #A94442;
 padding: 10px;
 width: 95%;
 border-radius: 5px;
 margin: 20px auto;
}

hr {
	border: 1px solid #f1f1f1;
	margin-bottom: 25px;
}

h1 {
text-align: center;
color: #fff;
}

a {
float: right;
background: #555;
padding: 10px 15px;
color: #fff;
border-radius: 5px;
margin-right: 10px;
border: none;
text-decoration: none;
}
a:hover{
opacity: .7;
}
  </style>
</head>
<body>
     <form action="userlog.php" method="post">
     	<h2>LOGIN</h2>
		 <hr>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="username" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"id="myInput"><br>
			<input type="checkbox" onclick="myFunction()" class="box"<p> Show Password</p>

			<script>
       function myFunction() {
       var x = document.getElementById("myInput");
      if (x.type === "password") {
         x.type = "text";
      } else {
        x.type = "password";
			}}
      </script>

     	<button type="submit">Login</button>
			<button onclick="location.href='adminlogin.php'" type="button">Admin Login</button>
			<button onclick="location.href='signup.php'" type="button" class="cancelbtn">New User?</button>
</body>
</html>
