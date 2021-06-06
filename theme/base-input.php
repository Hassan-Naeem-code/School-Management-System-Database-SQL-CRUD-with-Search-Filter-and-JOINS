<?php @include('header.php'); 

$id=$_GET['id'];

$query = "SELECT * FROM users where Id = '$id'  ";

$result = mysqli_query($db, $query);

$data = mysqli_fetch_array($result, MYSQLI_ASSOC);


if (isset($_GET['search'])) {
	$search = $_GET['search_text'];
    $sql = "SELECT * FROM users where type = 'employee' AND username = '$search'";
    $result = mysqli_query($db, $sql);
    
    $json = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // echo "<pre>"; print_r($json); die;
}

?>
      
                <div class="card">
                  <div class="card-header">
                    <h5>Update Employee Record</h5>
                  </div>
                  <form action="insert.php" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input class="form-control" type="text" name="email" id="email" required value="<?php echo $data['Email'] ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputPassword2">UserName</label>
                            <input class="form-control" type="text" placeholder="Enter Username" name="username" id="username" required value="<?php echo $data['username'] ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputPassword2">Full Name</label>
                            <input class="form-control" type="text" placeholder="Enter Full Name" name="full_name" id="full_name" required value="<?php echo $data['fullName'] ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputPassword2">Mobile Number</label>
                            <input class="form-control" type="text" placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" required value="<?php echo $data['mobile'] ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputPassword2">Gender</label>
                            <input type="radio" name="gender" id="gender" required value="Male" <?php if($data['gender'] == 'Male'){ echo 'checked';} ?>>Male
                            <input type="radio" name="gender" id="gender" required value="Female" <?php if($data['gender'] == 'Female'){ echo 'checked';} ?>>Female 
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputPassword2">Address</label>
                            <textarea type="text" placeholder="Repeat Address" name="address" class="form-control" id="address" rows="3" required><?php echo $data['address'] ?></textarea>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $data['Id']; ?>">
                      
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="update" value="Submit">Submit</button>
                      <button class="btn btn-light"><a href="datatable-basic-init.php">Cancel</a></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
            <!-- footer start-->
       <?php @include('footer.php'); ?>