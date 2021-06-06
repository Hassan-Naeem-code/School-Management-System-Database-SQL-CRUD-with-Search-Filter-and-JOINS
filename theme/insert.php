<?php

 session_start(); 
 @include('connect.php');
//  if (isset($_SESSION['email'])) {
//   echo $_SESSION['success'];
//   }else{
//     header('location: login.php');
//   }

if(isset($_POST['submit']))
{    
    
     $username = $_POST['username'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile_no'];

     $full_name = $_POST['full_name'];
     $psw = $_POST['psw'];
     $gender = $_POST['gender'];

     $address = $_POST['address'];

     $password = md5($psw);

    

     $sql = "INSERT INTO users (fullName,username,Email,Password,gender,mobile,address,type)

     VALUES ('$full_name','$username','$email', '$password','$gender','$mobile','$address', 'employee')";
     if (mysqli_query($db, $sql)) {
        $_SESSION['success'] = "New record has been added successfully ";
  	    header('location: datatable-basic-init.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}

if (isset($_POST['update'])) {

	$id = $_POST['id'];

	$username = $_POST['username'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile_no'];

     $full_name = $_POST['full_name'];
     $gender = $_POST['gender'];

     $address = $_POST['address'];

    $sql = "UPDATE users SET fullName='$full_name', username='$username', Email='$email', gender='$gender', mobile='$mobile', address='$address' WHERE Id=$id";

	if (mysqli_query($db, $sql)) {
        $_SESSION['success'] = "Record has been updated successfully ";
  	    header('location: datatable-basic-init.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sql = "DELETE FROM users WHERE Id=$id";
	
    if (mysqli_query($db, $sql)) {
        $_SESSION['success'] = "Record has been deleted successfully ";
  	    header('location: datatable-basic-init.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}


?>