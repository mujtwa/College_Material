<?php
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
    <link rel="stylesheet" href="registration.css">
    <title>Register</title>
  </head>
  <body> 
<body> 
  <center>

    <div class="col-md-4">
  <div class="container">
    <div class="main-block">
      <form action="" method="POST" autocomplete="on">
        <div class="title">
          <i class="fas fa-pencil-alt"></i>
          <h2>Register here</h2>
          <a style="padding-left: 20px;" href="showall.php">Back</a>
        </div>
        <div class="info">
          <input  type="text" name="name" placeholder="Name">
          <input  type="number" name="roll" placeholder="Roll Number">
          <input  type="text" name="course" placeholder="Course">
          <input  type="text" name="email" placeholder="Email">
          <input  type="password" name="password" placeholder="Password">
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

<!-- PHP is started -->

<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$course=$_POST['course'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="insert into students (roll_no,name,course,email,password_student) VALUES($roll,'$name','$course','$email','$password')";
	$result=mysqli_query($conn,$query);
	if($result){
		?>
		<script type="text/javascript">
		alert("inserted successfully");
		</script>
		<?php
    header("Location:showall.php");
	}
	else
	{
		?>
		<script type="text/javascript">
		alert("Failed to Insert");
		</script>
		<?php
		
	}
}

?>