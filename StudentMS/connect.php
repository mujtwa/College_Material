<?php 
$host="localhost";
$user="root";
$password="";
$databse="student_ms";
$conn=mysqli_connect($host,$user,$password,$databse);
if($conn){
	// echo "Connected Successfully";
}
else{
	echo "Failed to Connect";
}

// $query="select * from students";
// $result=mysqli_query($conn,$query);
// $re=mysqli_fetch_array($result);
// echo $re['name'];


 ?>