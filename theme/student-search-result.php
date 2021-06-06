<?php @include('header.php'); 

$query = "SELECT * FROM student  ";
$result = mysqli_query($db, $query);

$json = mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo json_encode($json );


if (isset($_GET['search'])) {
	$search = $_GET['search_text'];
    $sql = "SELECT * FROM student where StudentName = '$search'";
    $result = mysqli_query($db, $sql);
    
    $json = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // echo "<pre>"; print_r($json); die;
}

?>
                <div class="card">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <h2>Record Of School Teaching Staff & Employees</h2>
                          <div class="row">
                            <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-8"></div>
                            <div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-4">
                              <form action="datatable-basic-init.php" method="get">
                                <div class="row">
                                  <div class="col-9 col-xs-9 col-sm-9 col-md-9 col-lg-9 p-0">
                                    <input type="text" class="form-control" placeholder="Search..." name="search_text" id="search" required />
                                  </div>
                                  <div class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3 p-0">
                                    <input type="submit" class="btn btn-primary w-100" name="search" value="Submit">
                                    <div class="row">
                                      <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                                        <button class="btn btn-secondary w-100">
                                          <a href="employee-create.php" style="color:white;">
                                            Add New
                                          </a>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>S.Id</th>
                            <th>Student Name</th>
                            <th>Email Address</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Mobile Number</th>
                            <th>Prev School Name</th>
                            <th>Year</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($json as $data): ?>
                            <tr>
                                <td>12<?php echo $data['id']; ?>00</td>
                                <td><?php echo $data['StudentName']; ?></td>
                                <td><?php echo $data['EmailAddress']; ?></td>
                                <td><?php echo $data['FatherName']; ?></td>
                                <td><?php echo $data['MotherName']; ?></td>
                                <td><?php echo $data['MobileNumber']; ?></td>
                                <td><?php echo $data['PrevSchoolName']; ?></td>
                                <td><?php echo $data['Year']; ?></td>
                                <td><?php echo $data['Gender']; ?></td>
                                <td><?php echo $data['Address']; ?></td>
                                <td>
                                    <button class="btn btn-primary"><a href="student-update.php<?php echo '?id='.$data['id']; ?>" style="color:white;">Update</a></button>
                                    <button class="btn btn-secondary"><a href="studentinsert.php?del=<?php echo $data['id']; ?>" style="color:white;">Delete</a></button>
                                </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
       <?php @include('footer.php'); ?>