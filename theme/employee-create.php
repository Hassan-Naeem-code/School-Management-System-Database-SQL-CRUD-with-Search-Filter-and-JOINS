<?php 
@include('header.php')
?>
      
                <div class="card">
                  <div class="card-header">
                    <h5>Add Employee Record</h5>
                  </div>
                  <form action="insert.php" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="psw">Password</label>
                            <input class="form-control" type="password" placeholder="Enter Password" name="psw" id="psw" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="username">UserName</label>
                            <input class="form-control" type="text" placeholder="Enter Username" name="username" id="username" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputPassword2">Full Name</label>
                            <input class="form-control" type="text" placeholder="Enter Full Name" name="full_name" id="full_name" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputPassword2">Mobile Number</label>
                            <input class="form-control" type="text" placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="radio" name="gender" id="gender" required value="Male">Male
                            <input type="radio" name="gender" id="gender" required value="Female">Female 
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="exampleInputPassword2">Address</label>
                            <textarea type="text" placeholder="Repeat Address" name="address" id="address" required class="form-control" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $data['Id']; ?>">
                      
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                      <input class="btn btn-light" type="reset" value="Cancel">
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