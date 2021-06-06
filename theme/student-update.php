<?php
@include('header.php');

$id=$_GET['id'];

$query = "SELECT * FROM student where id = '$id'  ";

$result = mysqli_query($db, $query);

$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

// echo "<pre>"; print_r($data); die;

?>      
                <div class="card">
                  <div class="card-header">
                    <h5>Update Student Record</h5>
                  </div>
                  <form action="studentinsert.php" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" class="form-control" value="<?php echo $data['EmailAddress'] ?>"required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="fathername">Fatheer Name</label>
                            <input class="form-control" type="text" placeholder="Enter Father Name" name="fathername" id="fathername" value="<?php echo $data['FatherName'] ?>" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="mothername">Mother Name</label>
                            <input class="form-control" type="text" placeholder="Enter Mother Name" name="mothername" id="mothername" value="<?php echo $data['MotherName'] ?>" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="studentname">Student Name</label>
                            <input class="form-control" type="text" placeholder="Enter Student Name" name="studentname" id="studentname" value="<?php echo $data['StudentName'] ?>" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="mobile_no">Mobile Number</label>
                            <input class="form-control" type="text" placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" required value="<?php echo $data['MobileNumber'] ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="prevschoolname">Previous School Name</label>
                            <input class="form-control" type="text" placeholder="Enter Previous School Name" name="prevschoolname" id="prevschoolname" value="<?php echo $data['PrevSchoolName'] ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="year">Year</label>
                            <select class="form-control" name="year">
                             <option value="2021" <?php if($data['Year'] == 2021){echo'selected';} ?>>2021</option>
                             <option value="2020"  <?php if($data['Year'] == 2020){echo'selected';} ?>>2020</option>
                             <option value="2019">2019</option>
                             <option value="2018">2018</option>
                             <option value="2017">2017</option>
                             <option value="2016">2016</option>
                             <option value="2015">2015</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="radio" name="gender" id="gender" required value="Male" <?php if($data['Gender'] == 'Male'){echo'checked';} ?>>Male
                            <input type="radio" name="gender" id="gender" required value="Female" <?php if($data['Gender'] == 'Female'){echo'checked';} ?>>Female 
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea type="text" placeholder="Repeat Address" name="address" id="address" required class="form-control" rows="3"><?php echo $data['Address'] ?></textarea>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                      
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="update" value="Submit">Submit</button>
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