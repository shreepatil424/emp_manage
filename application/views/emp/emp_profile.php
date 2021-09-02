<style>
  .error{
    color: red;
  }
  label,
  input,
  button {
    border: 0;
    margin-bottom: 3px;
    display: block;
    width: 100%;
  }
 .common_box_body {
    padding: 15px;
    border: 12px solid #28BAA2;
    border-color: #28BAA2;
    border-radius: 15px;
    margin-top: 10px;
    background: #d4edda;
}
</style>

    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $emp_data->fname;?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
           <!--  <?php $emp_id = $this->session->userdata('emp_id');?>
            <a href="<?php echo base_url('get_emp_profile/'.$emp_id);?>" class="btn btn-neutral">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col"> 
                </div>
              </div>
              <div class="text-center">
                <h3 class="h3"><b>
                  <?php echo $emp_data->fname;?>&nbsp;<?php echo $emp_data->lname;?><span class="font-weight-light"> , <?php echo $emp_data->age;?></span></b>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni business_briefcase-24 mr-2"></i>
                   <h3><?php echo $emp_data->designation;?></h3>
                </div>
                <div class="h5 mt-4">
                  <i class="ni location_pin mr-2"></i>
                  <!-- <?php echo $emp_data->country;?>, <?php echo $emp_data->city;?> -->
                  <!-- <h3><?php echo $emp_data->designation;?></h3> -->
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>
                  <!-- University of Computer Science -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <!-- <a href="#!" class="btn btn-sm btn-primary">Settings</a> -->
                </div>
              </div>
            </div>
            <div class="card-body">
          <form  action="<?php echo base_url('update_emp_profile/'.$emp_id);?>" method="post" name="edit_emp" id="edit_emp">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                   <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="First name" value="<?php echo $emp_data->fname;?>">
                        <input type="hidden" name="emp_id" value="<?php echo $emp_data->emp_id;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name" value="<?php echo $emp_data->lname;?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="<?php echo $emp_data->email;?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-mobile">Phone Number</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Phone Number" value="<?php echo $emp_data->mobile;?>">
                      </div>
                    </div>
                  </div>
                 
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input name="address" id="address" class="form-control" placeholder="Home Address" value="<?php echo $emp_data->address;?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="City" value="<?php echo $emp_data->city;?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" name="country" id="country" class="form-control" placeholder="Country" value="<?php echo $emp_data->country;?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" name="zipcode" id="zipcode" class="form-control" placeholder=" Postal Code" value="<?php echo $emp_data->zipcode;?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" /> 

                <div class="text-center">
                  <!-- <button type="submit" class="btn btn-primary mt-4">Create account</button> -->
                  <input type="submit" id="submit" class="btn btn-primary mt-4" style="width: 35%;" value="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  

  <!-- Core JS -->
 
 
 
  