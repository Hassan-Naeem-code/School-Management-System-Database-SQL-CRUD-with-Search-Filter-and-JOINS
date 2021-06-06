<?php
session_start(); 
@include('connect.php');

$id=$_GET['id'];

$query = "SELECT * FROM users where Id = '$id'  ";

$result = mysqli_query($db, $query);

$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

// echo "<pre>"; print_r($data); die;

?>

<button>
    <a href="all-employee.php">All Employee</a>
</button>
<br><br><br>

<form action="insert.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required value="<?php echo $data['Email'] ?>"> <br>

    <!-- <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required value="<?php echo $data[''] ?>"> <br> -->

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required value="<?php echo $data['username'] ?>"> <br>


    <label for="full_name"><b>Full Name</b></label>
    <input type="text" placeholder="Enter Full Name" name="full_name" id="full_name" required value="<?php echo $data['fullName'] ?>"> <br>

    <label for="mobile_no"><b>Mobile No</b></label>
    <input type="text" placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" required value="<?php echo $data['mobile'] ?>"> <br>

    <label for="gender"><b>Gender</b></label>
    <input type="radio" name="gender" id="gender" required value="Male" <?php if($data['gender'] == 'Male'){ echo 'checked';} ?>>Male
    <input type="radio" name="gender" id="gender" required value="Female" <?php if($data['gender'] == 'Female'){ echo 'checked';} ?>>Female <br>

    <label for="address"><b>Address</b></label>
    <textarea type="text" placeholder="Repeat Address" name="address" id="address" required><?php echo $data['address'] ?></textarea>
    <hr>

    <input type="hidden" name="id" value="<?php echo $data['Id']; ?>">

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" class="btn btn-primary" name="update" value="Submit">
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

