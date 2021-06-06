<?php

session_start(); 
@include('connect.php');


$query = "SELECT * FROM users where type = 'employee'  ";
$result = mysqli_query($db, $query);

$json = mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo json_encode($json );


if (isset($_GET['search'])) {
	$search = $_GET['search_text'];
    $sql = "SELECT * FROM users where type = 'employee' AND username = '$search'";
    $result = mysqli_query($db, $sql);
    
    $json = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // echo "<pre>"; print_r($json); die;
}

?>

<h4>Search</h4>
<form action="all-employee.php" method="get">
    
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Search..." name="search_text" id="search" required>
    <hr>
    <input type="submit" class="btn btn-primary" name="search" value="Submit">

</form>

<button>
    <a href="employee-create.php">Add New</a>
</button>
<br><br><br>

<table border="1">
  <tr>
    <th>Username</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Action</th>
  </tr>

  
  <?php foreach ($json as $data): ?>
    <tr>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['fullName']; ?></td>
        <td><?php echo $data['Email']; ?></td>
        <td><?php echo $data['mobile']; ?></td>
        <td><?php echo $data['gender']; ?></td>
        <td><?php echo $data['address']; ?></td>
        <td>
            <a href="employee-update.php<?php echo '?id='.$data['Id']; ?>">Update</a>
            <a href="insert.php?del=<?php echo $data['Id']; ?>">Delete</a>
        </td>
    </tr>
  <?php endforeach; ?>
 
  
</table>