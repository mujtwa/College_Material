<?php
error_reporting(0);
include 'connect.php';
$query="SELECT * FROM students ";
$re=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <style type="text/css">
    html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      /*color: #eee;*/

      }

      body {
      /*background: url("pexels-bich-tran-1714341.jpg") no-repeat center;*/
       /*background-size: cover; */
      }
     </style>

    <title>show</title>
</head>
<div class="container">
<body style="background-image: url('pexels-bich-tran-1714341.jpg');">
<!-- <body style="background:green;"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- <a style="padding-left:1400px; color:red; "href="sms.php">BACK</a> -->
<a class="btn btn-primary" style="margin-top: 10px;" href="registration.php">Add New</a> &nbsp; &nbsp;
<a class="btn btn-danger" style="margin-top: 10px;" href="logout.php">Logout</a>


    <h2 align="center">DETAILS OF ALL STUDENTS </h2>
    <table border="2" style="width:100%">
        <tr style="text" face="Courier New">
        <th>Name</th>
        <th>Roll No.</th>
        <th>Course</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="2" style="text-align:center;">Actions</th>
        </tr>
        <?php
        while($arr=mysqli_fetch_array($re))
        {
        ?>
        <tr style="color: floralwhite;">
            <td><?php echo $arr['name'];?></td>
            <td><?php echo $arr['roll_no'];?></td>
            <td><?php echo $arr['course'];?></td>
            <td><?php echo $arr['email'];?></td>
            <td><?php echo $arr['password_student'];?></td>
            <td style="text-align: center;"><a  class="btn btn-primary " href="update_data.php?roll_no=<?php echo $arr['roll_no'];?>">Edit</a> &nbsp; &nbsp;
            <a  class="btn btn-danger" href="delete_data.php?roll_no=<?php echo $arr['roll_no']; ?>">Delete</a></td>
            
        </tr>
         <?php   
        }
        ?> 


    </table>

    
</body>
</div>
</html>