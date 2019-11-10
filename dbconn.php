<?php
$con = mysqli_connect("localhost","root","","registration");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
  {
	echo "Database Connection Successfull";

  }
if (isset($_POST['register_btn'])){
		$username    = $_POST['username'];
		$email       = $_POST['email'];
		$password  = $_POST[           'password'];
		$query = "INSERT into `student_table` (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "You are registered successfully.";
        }
    }else{
		echo "Faild.";
	}

?>