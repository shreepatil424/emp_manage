
	
	<!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between"> 
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!--Validatiom--> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
 
  <!--Data table--> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/r-2.1.0/datatables.min.css" /> 
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/pdfmake-0.1.18/dt-1.10.12/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/r-2.1.0/datatables.min.js"></script> 
    <!--/.data table--> 

<script type="text/javascript"> 
    $(document).ready(function() { 
        $("#mytable").dataTable(); 
    }); 
</script> 


<script>
$.validator.addMethod("alphabetsnspace", function(value, element) {
        return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
    });
</script> 
 
<script>
$(document).ready(function(){
  $("#edit_emp").validate({
    // Specify validation rules
    rules: { 
      address: {
          required: true,
      },      
      city: {
          required: true,
          alphabetsnspace: true
      },
      country: {
          required: true,
          alphabetsnspace: true
      },
      zipcode: {
          required: true,
          // alphabetsnspace: true
      }
    },
    messages: {
     address: {
      required: "Please enter address",
     },
     city: {
      required: "Please enter city",
     },
     country: {
      required: "Please enter country",
     },
     zipcode: {
      required: "Please enter zipcode",
     }
    } 
  });
});
</script>

 

 </body>

</html>