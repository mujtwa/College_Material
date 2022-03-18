
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration form</title>
	
	 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("pexels-bich-tran-1714341.jpg") no-repeat center;
      /* background-size: cover; */
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5);
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7);
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      width:60%;
      }
      option:focus {
      border: none;
      }
      option {
      background: black;
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px;
      border: none;
      background: #26a9e0;
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
        form{
     width: 100vw;
     height: 70vh;
     justify-content: center;
     align-items: center;
  }

    </style>
	
  </head>
  <body>
  
  <center>
    <div class="col-md-4">
  <div class="container">
    <div class="main-block">
      <form action="practice.php" method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i>
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="fname" placeholder="First Name">
		  <input class="fname" type="text" name="lname" placeholder="Last Name">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="password" placeholder="Password">
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
	
  </center>
  
  </body>
</html>

<!-- connection with database-->

<?php

$host="localhost";
$user="root";
$password="";
$database="registration";
$conn=mysqli_connect($host,$user,$password,$database);
if($conn)
	echo "connected successfully";

else
	echo "Not connected Failed to connect";



if(isset($_POST['submit']))
{    
     $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 
     $sql = "INSERT INTO student_info(fname,lname,email,password)
     VALUES ('$fname','$lname','$email','$password')";
     if (mysqli_query($conn, $sql)) 
        echo "New record has been added successfully !";
    else 
        echo "Error: Occurred ";
     
}

?>



