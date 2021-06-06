<?php 
@include('header.php')
?>
      
                <div class="card">
                  <div class="card-header">
                    <h5>Add Student Record</h5>
                  </div>
                  <form action="studentinsert.php" method="post">
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
                            <label for="fathername">Fatheer Name</label>
                            <input class="form-control" type="text" placeholder="Enter Father Name" name="fathername" id="fathername" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="mothername">Mother Name</label>
                            <input class="form-control" type="text" placeholder="Enter Mother Name" name="mothername" id="mothername" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="studentname">Student Name</label>
                            <input class="form-control" type="text" placeholder="Enter Student Name" name="studentname" id="studentname" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="mobile_no">Mobile Number</label>
                            <input class="form-control" type="text" placeholder="Enter Mobile No" name="mobile_no" id="mobile_no" required />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="prevschoolname">Previous School Name</label>
                            <input class="form-control" type="text" placeholder="Enter Previous School Name" name="prevschoolname" id="prevschoolname" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="year">Year</label>
                            <select class="form-control" name="year">
                             <option value="2021">2021</option>
                             <option value="2020">2020</option>
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
                            <input type="radio" name="gender" id="gender" required value="Male">Male
                            <input type="radio" name="gender" id="gender" required value="Female">Female 
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea type="text" placeholder="Repeat Address" name="address" id="address" required class="form-control" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                      
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