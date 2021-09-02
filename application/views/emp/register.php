<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim"> 
  <title><?php echo $title; ?></title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/argon.css?v=1.2.0" type="text/css">


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

</head>



<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container"> 
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
       
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0"> 
            <div class="card-body px-lg-5 py-lg-5">
               <?php if($responce = $this->session->flashdata('success_msg')): ?> 
                 <div class="alert alert-dismissible alert-success">
                  <?php echo $responce;
                  $this->session->unset_userdata('success_msg'); ?> 
                 </div>  
               <?php endif;?>
               <?php if($responce = $this->session->flashdata('error_msg')): ?> 
                 <div class="alert alert-dismissible alert-danger">
                  <?php echo $responce;
                  $this->session->unset_userdata('error_msg'); ?> 
                 </div>  
               <?php endif;?> 
              <div class="text-center text-muted mb-4">
                <h3>Register </h3>
              </div>
              <form  action="<?php echo base_url();?>registration" method="post" enctype="multipart/form-data" name="registration" id="registration">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" name="fname" id="fname" placeholder="First Name" required="" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" name="lname" id="lname" required="" placeholder="Last Name" type="text">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
                    </div>
                    <input class="form-control" name="designation" id="designation" required="" placeholder="Designation" type="text">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input class="form-control datepicker" name="birthdate" id="birthdate" required="" placeholder="Select date" type="text">
                        <!-- <input type="hidden" id = "age" readonly/> -->
                        <input type="hidden" name="age" id="age">
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="email" id="email" required="" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input class="form-control" name="mobile" id="mobile" required="" placeholder="Mobile Number" type="texr">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="cpassword" id="cpassword" required=""  placeholder="Confirm Password" type="password">
                  </div>
                </div> 

                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="avatar" id="avatar" required="" lang="en">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                </div> 

                <div class="text-center">
                  <!-- <button type="submit" class="btn btn-primary mt-4">Create account</button> -->
                  <input type="submit" id="submit" class="btn btn-primary mt-4" style="width: 35%;" value="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
   
  <!-- Core JS -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>


<script>
$.validator.addMethod("alphabetsnspace", function(value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    });
</script> 

<script>
 $(function() {
    $("#birthdate").datepicker({
    onSelect: function(value, ui) {
        var today = new Date(),
            age = today.getFullYear() - ui.selectedYear;
        $('#age').val(age);
    }, 
    dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
    });   
});
  </script>
 
<script>
$(document).ready(function(){
  $("#registration").validate({
    // Specify validation rules
    rules: { 
      fname: {
          required: true,
          alphabetsnspace: true
      },
      lname: {
          required: true,
          alphabetsnspace: true
      },
      designation: {
          required: true,
          alphabetsnspace: true
      }, 
      dob:{
          required: true,
          // minDate: -50,
          // maxDate: today,
      }, 
      email: {
        required: true,
        email: true
      }, 
      mobile: {
        required: true,
        digits: true,
        // matches: '^(\\d|\\s)+$',  // <-- no such method called "matches"!
        minlength: 10,
        maxlength: 12,
      },
      password: {
        required: true,
        // digits: true,
        minlength: 5,
        maxlength: 20,
      },
      cpassword: {
        required: true,
        // digits: true,
        minlength: 5,
        maxlength: 20,
      },
      avatar: {
            required: true,
            extension: "jpg|png",
         }
    },
    messages: {
      fname: {
      required: "Please enter first name in alphabet",
     },      
     lname: {
      required: "Please enter last name in alphabet",
     },
     designation: {
      required: "Please enter your designation in alphabet",
     },  
     dob:{
        required: 'Enter date of birth',
        maxDate: 'Must be older date',
     },    
     email: {
      required: "Please enter email address",
      email: "Please enter a valid email address.",
     },
     mobile: {
      required: "Please enter phone number",
      digits: "Please enter valid phone number",
      minlength: "Phone number field accept only 10 digits",
      maxlength: "Phone number field accept only 12 digits",
     },     
     password: {
      required: "Please enter password",
      email: "Please enter a valid password.",
     },
     cpassword: {
      required: "Please enter Confirm password",
      email: "Please enter a valid password.",
     },
     avatar: {
            required: "Please upload file.",
            extension: "Please upload file in these format only (jpg,png).",
            filesize:" file size must be less than 2 mb.",
        },
    },
  
  });
});
</script> 
 </body> 
</html>


