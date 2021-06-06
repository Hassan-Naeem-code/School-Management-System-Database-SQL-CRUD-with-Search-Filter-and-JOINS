<?php

 session_start(); 
 @include('connect.php');

if(isset($_POST['submit']))
{    
    
    $email = $_POST['email'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $studentname = $_POST['studentname'];
    $mobile = $_POST['mobile_no'];
     $prevschoolname = $_POST['prevschoolname'];
     $year = $_POST['year'];
     $gender = $_POST['gender'];

     $address = $_POST['address'];
    

     $sql = "INSERT INTO student (EmailAddress,FatherName,MotherName,StudentName,MobileNumber,PrevSchoolName,Year,Gender,Address)

     VALUES ('$email','$fathername','$mothername', '$studentname','$mobile','$prevschoolname','$year', '$gender','$address')";
     if (mysqli_query($db, $sql)) {
        $_SESSION['success'] = "New record has been added successfully ";
  	    header('location: student.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
     $email = $_POST['email'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $studentname = $_POST['studentname'];
    $mobile = $_POST['mobile_no'];
     $prevschoolname = $_POST['prevschoolname'];
     $year = $_POST['year'];
     $gender = $_POST['gender'];
     $address = $_POST['address'];

    $sql = "UPDATE student SET EmailAddress='$email', FatherName='$fathername', MotherName='$mothername', StudentName='$studentname', MobileNumber='$mobile', PrevSchoolName='$prevschoolname', Year='$year',Gender='$gender',Address='$address' WHERE id=$id";

	if (mysqli_query($db, $sql)) {
        $_SESSION['success'] = "Record has been updated successfully ";
  	    header('location: student.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sql = "DELETE FROM student WHERE id=$id";
	
    if (mysqli_query($db, $sql)) {
        $_SESSION['success'] = "Record has been deleted successfully ";
  	    header('location: student.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
     }
     mysqli_close($db);
}


?>