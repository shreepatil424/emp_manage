<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title> <?php echo $title ?> </title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
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
     <!--  <a class="navbar-brand" href="dashboard.html">
        <img src="<?php echo base_url(); ?>assets/img/brand/white.png">
      </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="<?php echo base_url(); ?>assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            
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
                <h3>Sign in </h3>
              </div> 
              <form  action="<?php echo base_url();?>emp_login" method="post" name="login" id="login">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" name="email" id="email" type="email">
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
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <!-- <button type="button" class="btn btn-primary my-4" style="width: 38%;">Sign in</button> -->
                  <input type="submit" id="loginSubmit" name="loginSubmit" class="btn btn-primary my-4" style="width: 35%;" value="Sign in">
                  <a href="<?php echo base_url();?>register" class="btn btn-primary my-4" style="color: white">Register</a>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   
<!-- Core JS -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- JS -->
   

 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  
<script>
$(document).ready(function(){
  $("#login").validate({
    // Specify validation rules
    rules: { 
      email: {
        required: true,
        email: true
      }, 
      password: {
        required: true,
        minlength: 5,
        maxlength: 20,
      }
    },
    messages: {  
     email: {
      required: "Please enter email address",
      email: "Please enter a valid email address.",
     },  
     password: {
      required: "Please enter password",
      email: "Please enter a valid password.",
     } 
    },
  
  });
});
</script>







</body>

</html>