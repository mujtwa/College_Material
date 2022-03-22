<?php
error_reporting(0);
  include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <title>index_page</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <style>

    .test{
    height:50px;
    width:200px;
    text-align: center;

      }

    body{
      background: url("pexels-bich-tran-1714341.jpg");
       /*background-size: cover; */
      }
      </style>
  </head>
  <body>
    <center>
    <div class="container">

       <h2 style="margin-top:100px;">STUDENT MANAGEMENT SYSTEM </h2>
       <br>
       <br>

        <!-- <a style="padding-left:1400px; color:red; "href="sms.php">BACK</a> -->
        <!-- <a class="btn btn-primary" style="margin-top: 10px;" href="">ADMIN LOGIN</a> &nbsp; &nbsp; -->
        <!-- <a class="btn btn-danger" style="margin-top: 10px;" href="registration.php">Logout</a> -->   



    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary test" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADMIN LOGIN 
</button>
</center>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <!--  <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
      <div class="modal-body">
      <form action="" method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i>
          <h2>Login Here</h2>
        </div>
        <div class="info">
          <input  type="text" name="user_id" placeholder="User Id" autocomplete="off"> 
          <input  type="password" name="password1" placeholder="Password" autocomplete="off">
        </div>
        <button type="submit" name="login">Login</button>
      </form>
    </div>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </div>
  </body>
</html>

<?php


if(isset($_POST['login']))
{
    $uusername=$_POST['user_id'];
    $ppassword=$_POST['password1'];

    $query="SELECT * FROM  `login`  WHERE user_id='{$uusername}' AND admin_password='{$ppassword}' ";

    $re=mysqli_query($conn,$query);

    if(mysqli_num_rows($re))
    {
      // session_start();
      // $_SESSION['is_login']=true;
      header('location:showall.php');
    }
    else{
      ?>
      <script>
        alert("User Id or Password is Wrong!!");
      </script>
      <?php

    }
}


?>