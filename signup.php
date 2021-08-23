<?php
require "cnct.php";

if (isset($_POST['save'])){
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO user (email,firstname,lastname,gender,age,username,password) VALUES ('$email', '$firstname', '$lastname', '$gender', '$age', '$username', '$password')";
  $execute = mysqli_query($cnct,$sql);

  if ($execute) {
    echo "sign up success";
    header('Location:userlogin.php');
  }
  else{
    echo "Fail to add data";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Page</title>
</head>
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
  width: 800px;
  border: 2px solid #ccc;
  padding: 30px;
  background: #fff;
  border-radius: 15px;
  }

  input[type="text"],
  input[type="password"],
  input[type="number"] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type="text"]:focus,
  input[type="password"]:focus,
  input[type="number"] {
    background-color: #ddd;
    outline: none;
  }

  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  button {
    float: right;
    background-color: #AEAF96;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
    cursor: pointer;
    opacity: 0.9;
  }

  button:hover {
    opacity: 1;
  }

  .cancelbtn,
  .signupbtn {
    float: left;
  }

  .container {
    padding: 16px;
  }

  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  @media screen and (max-width: 300px) {
    .signupbtn {
      width: 100%;
    }
  }
</style>
  <body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required >

        <label for="firstname"><b>First Name</b></label>
        <input
          type="text"
          placeholder="Enter First Name"
          name="firstname"
          required
        >

        <label for="lastname"><b>Last Name</b></label>
        <input
          type="text"
          placeholder="Enter Last Name"
          name="lastname"
          required
        >

        <label for="gender"><b>Gender</b></label>
        <input type="text" placeholder="Enter Gender" name="gender" required >

        <label for="age"><b>Age</b></label>
        <input type="number" placeholder="Enter Age" name="age" required >

        <label for="username"><b>Username</b></label>
        <input
          type="text"
          placeholder="Enter Username"
          name="username"
          required
        >

        <label for="password"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="password"
          required
        >

        <td align="center"> <button type="submit" name="save" value="Submit">Sign Up</button> </td>
        <td align="center"> <button onclick="location.href='userlogin.php'" type="button" >Log In</button></td>
        <td align="center"> <button onclick="location.href='site.php'" type="button" class="cancelbtn">back</button></td>
      </div>
    </form>
  </body>
</html>
