<?php
error_reporting(0);
include 'connect.php';
$query="SELECT * FROM students ";
$re=mysqli_query($conn,$query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet"  href="registration.css">

    <title>update</title>
  </head>
  <body>
  <?php

while($arr=mysqli_fetch_array($re))
{
if($_GET['roll_no'] == $arr['roll_no'])
{
?>
    <center>
    <div class="col-md-4">
  <div class="container">
    <div class="main-block">
      <form action="" method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i>
          <h2>Update Here</h2>
          <a style="padding-left: 20px;" href="showall.php">Back</a>
        </div>
        <div class="info">
          <input  type="text" name="name" value="<?php echo $arr['name'];?>" placeholder="Name">
          <input  type="number" value="<?php echo $arr['roll_no'];?>"  name="roll1"  placeholder="Roll Number" readonly>
          <input  type="text" value="<?php echo $arr['course'];?>" name="course" placeholder="Course">
          <input  type="text" value="<?php echo $arr['email'];?>" name="email" placeholder="Email">
          <input  type="text" value="<?php echo $arr['password_student'];?>" name="password" placeholder="Password">
        </div>
        <button type="submit" name="submit">Update</button>
      </form>
    </div>
  </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
  </center>
  <?php
  }
    }
  ?>
  </body>
</html>

<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $roll=$_POST['roll1'];
  $course=$_POST['course'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="UPDATE `students` SET `roll_no`= $roll,`name`='$name',`course`='$course',`email`='$email',`password_student`='$password' where roll_no= $roll ";
  $result=mysqli_query($conn,$query);
  if($result){

  header("Location:showall.php");
  }
  else{
    ?>
    <script>
      alert("Failed to Update");
    </script>
    <?php
  }
}

  ?>