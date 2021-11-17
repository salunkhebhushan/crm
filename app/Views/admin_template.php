<?php
$request = \Config\Services::request();

// $uri = $request->uri;
// $c = $uri->getSegment(1);
// if (!session('uid')) {
//     header("Location: " . url('auth') . "");
//     exit;
// } 
?>

<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from thememinister.com/crm/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 12:57:08 GMT -->

<!-- start head  -->

    <?= view('admin/include/head'); ?>
<!-- end head -->
<body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
        <!-- start header -->
        <?= view('admin/include/header'); ?>
        <!-- end header -->
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <div class="wrapper">
        <!-- start sidebar -->
        <?= view('admin/include/sidebar'); ?>
        <!-- end sidebar -->
        
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         
         <?= $this->renderSection('content') ?>

         <!-- /.content-wrapper -->
                      <!-- start footer -->
        <?= view('admin/include/footer'); ?>
        <!-- end footer -->   
      </div>
      <!-- /.wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
         <!-- <script>
            var PATH = '<= url('') ?>';
         </script> -->

      <!-- Select2 js-->
   
      <!-- <script src="<?= BASE; ?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script> -->
      <!-- C:\xampp\htdocs\crm\public\assets\plugins\select2\js\ -->
      <!-- <script src="<?= BASE; ?>assets/plugins/select2/js/select2.full.min.js" type="text/javascript"></script> -->

      
      <!--end Select2 js-->

      <script src="<?=BASE; ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="<?=BASE; ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="<?=BASE; ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="<?=BASE; ?>assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="<?=BASE; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="<?=BASE; ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="<?=BASE; ?>assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="<?=BASE; ?>assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->

      <!-- sweet alert -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- exra for j query -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>

    <script>
    <?php $session=session(); ?>
    $(document).ready(function (){
      
       <?php if($session->get('success')) {?>
        swal({
        title: "Great",
         text: "<?php echo $session->get('success'); ?>",
         icon: "success",
         timer:5000,
       });
              <?php } ?>
    });
    </script>
    <script>
        $(document).ready(function (){
      
      <?php if($session->get('error')) {?>
       swal({
       title: "wrong Password",
        text: "<?php echo $session->get('error'); ?>",
        icon: "error",
        timer:5000,
      });
             <?php } ?>
   });
    </script>   
    
    <script>
        $(document).ready(function (){
      
      <?php if($session->get('warning')) {?>
       swal({
         title: "Date Already Exists",
        text: "<?php echo $session->get('warning'); ?>",
        icon: "warning",
        timer:5000,
      });
             <?php } ?>
   });
    </script> 
    
       <!-- end alert -->

      <script src="<?=BASE; ?>assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="<?=BASE; ?>assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="<?=BASE; ?>assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="<?=BASE; ?>assets/plugins/monthly/monthly.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="<?=BASE; ?>assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });
         
         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
         label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
         label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();         
      </script>
   </body>

<!-- Mirrored from thememinister.com/crm/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Sep 2021 12:57:44 GMT -->
</html>

