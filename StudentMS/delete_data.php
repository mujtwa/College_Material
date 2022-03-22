<?php
include 'connect.php';
$roll=$_GET['roll_no'];
$query="DELETE FROM students WHERE  roll_no=$roll";
$re=mysqli_query($conn,$query);
if($re)
{
    header('location:showall.php');
    
}
else
{
    echo "deleted not successfully1";

}



?>