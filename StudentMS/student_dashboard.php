<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="student_dashboard.css">
    <title>Student_dashboard</title>
    <style>
       .btn-item, input {
      padding: 50px 5px;
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
      input {
      width: 100%;
      }
      input:hover, .btn-item:hover {
      background: #85d6de;
      }

    </style>

  </head>
  <body>

    <div id="header"><br>
    <center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
    <a href="logout.php">Logout</a>
    </center>
  </div>
  <span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span>
  <div id="left_side">
    <br><br><br>
    <form action="" method="post">
    
      <table>
        <tr>
          <td>
            <input type="submit" name="edit_detail" value="Edit Detail">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="show_detail" value="Show Detail">
          </td>
        </tr>
      </table>
    </form>
  </div>
  <div id="right_side"><br><br>
    <div id="demo">
      <?php
      if(isset($_POST['show_detail']))
      {
        $query = "select * from students where email = '$_SESSION[email]'";
        $query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)) 
        {
      ?>
        <table>
          <tr>
            <td>
              <b>Roll No:</b>
            </td> 
            <td>
              <input type="text" value="<?php echo $row['roll_no']?>" disabled>
            </td>
          </tr>
          <tr>
            <td>
              <b>Name:</b>
            </td> 
            <td>
              <input type="text" value="<?php echo $row['name']?>" disabled>
            </td>
          </tr>
          <tr>
            <td>
              <b>Father's Name:</b>
            </td> 
            <td>
              <input type="text" value="<?php echo $row['father_name']?>" disabled>
            </td>
          </tr>
          <tr>
            <td>
              <b>Class:</b>
            </td> 
            <td>
              <input type="text" value="<?php echo $row['class']?>" disabled>
            </td>
          </tr>
          <tr>
            <td>
              <b>Mobile:</b>
            </td> 
            <td>
              <input type="text" value="<?php echo $row['mobile']?>" disabled>
            </td>
          </tr>
          <tr>
            <td>
              <b>Email:</b>
            </td> 
            <td>
              <input type="text" value="<?php echo $row['email']?>" disabled>
            </td>
          </tr>
          <tr>
            <td>
              <b>Password:</b>
            </td> 
            <td>
              <input type="password" value="<?php echo $row['password']?>" disabled>
            </td>
          </tr>
          <tr>
            <td>
              <b>Remark:</b>
            </td> 
            <td>
              <textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
            </td>
          </tr>
        </table>
        <?php
        } 
      }
      ?>

      <?php
      if(isset($_POST['edit_detail']))
      {
        $query = "select * from students where email = '$_SESSION[email]'";
        $query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)) 
        {
          ?>
          <form action="edit_student.php" method="post">
            <table>
            <tr>
              <td>
                <b>Roll No:</b>
              </td> 
              <td>
                <input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
              </td>
            </tr>
            <tr>
              <td>
                <b>Name:</b>
              </td> 
              <td>
                <input type="text" name="name" value="<?php echo $row['name']?>">
              </td>
            </tr>
            <tr>
              <td>
                <b>Father's Name:</b>
              </td> 
              <td>
                <input type="text" name="father_name" value="<?php echo $row['father_name']?>">
              </td>
            </tr>
            <tr>
              <td>
                <b>Class:</b>
              </td> 
              <td>
                <input type="text" name="class" value="<?php echo $row['class']?>">
              </td>
            </tr>
            <tr>
              <td>
                <b>Mobile:</b>
              </td> 
              <td>
                <input type="text" name="mobile" value="<?php echo $row['mobile']?>">
              </td>
            </tr>
            <tr>
              <td>
                <b>Email:</b>
              </td> 
              <td>
                <input type="text" name="email" value="<?php echo $row['email']?>">
              </td>
            </tr>
            <tr>
              <td>
                <b>Password:</b>
              </td> 
              <td>
                <input type="password" name="password" value="<?php echo $row['password']?>">
              </td>
            </tr>
            <tr>
              <td>
                <b>Remark:</b>
              </td> 
              <td>
                <textarea rows="3" cols="40" name="remark"><?php echo $row['remark']?></textarea>
              </td>
            </tr><br>
            <tr>
              <td></td>
              <td>
                <input type="submit" value="Save">
              </td>
            </tr>
          </table>
          </form>
          <?php
        }
      }
      ?>
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
  </body>
</html>