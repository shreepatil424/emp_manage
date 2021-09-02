    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-md-4">
              <!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-1">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumb;?></li>
                </ol>
              </nav>
            </div>
            
            <div class="col-md-4">
              <?php if($responce = $this->session->flashdata('success_msg')): ?> 
                    <div class="alert alert-dismissible alert-success"><?php echo $responce;
                     $this->session->unset_userdata('success_msg'); ?>
                     </div> 
              <?php endif;?>
              <?php if($responce = $this->session->flashdata('error_msg')): ?> 
                 <div class="alert alert-dismissible alert-danger">
                  <?php echo $responce;
                  $this->session->unset_userdata('error_msg'); ?> 
                 </div>  
               <?php endif;?> 
            </div> 

           <!--  <div class="col-md-4 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> -->
          </div>
          <!-- Card stats -->
          <div class="row"> 
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
       
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Page visits</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <!-- <table class="table align-items-center table-flush"> -->
                <table id="mytable" class="table align-items-center table-flush small">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" style="text-align:center">Emp ID</th>
                    <th scope="col" style="text-align:center">First name</th>
                    <th scope="col" style="text-align:center">Last name</th>
                    <th scope="col" style="text-align:center">Email</th>
                    <th scope="col" style="text-align:center">Mobile</th>
                    <th scope="col" >Designation</th>
                    <th scope="col" style="text-align:center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(count($emp_data)): ?>
                   
                  <?php foreach ($emp_data as $emp): ?>
                   <tr>
                      <td><?php echo $emp->emp_id;?></td>
                      <td><?php echo $emp->fname;?></td>
                      <td><?php echo $emp->lname; ?></td>
                      <td><?php echo $emp->email;?></td>
                      <td><?php echo $emp->mobile;?></td>
                      <td><?php echo $emp->designation; ?></td>
                      <td style="text-align:center" width="200px"> 
                        <?php  
                          echo 'Read';  
                          echo ' | ';  
                          echo 'Update';  
                          echo ' | ';  
                          echo 'Delete';  
                        ?> 
                    </td>                            
                    </tr>
                  <?php endforeach;?>
                  <?php else: ?>
                  <tr>
                    <td>No Records Found.</td>
                  </tr>
                  <?php endif; ?> 
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
      </div>
