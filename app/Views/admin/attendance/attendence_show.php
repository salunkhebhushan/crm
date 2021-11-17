<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-suitcase"></i>
               </div>
               <div class="header-title">
                  <h1>Employees Daily Attendance </h1>
         <small>Employees Daily Attendance</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                              <i class="fa fa-list"></i>  Employees Daily Attendance Show  </a>  
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                     <form  id="ajxform">
					 <div class="row">
                        <div class="form-group col-sm-6">
                           <label>Attendance Date </label>
                           <input type="date"  name="attendence_date" id="attendence_date" class="form-control"   required >
                        </div>
                     </div>
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                   <thead>
									<tr class="info">
									<th>Sr.No</th>
									<th>First Name</th>
									<!--<th>Last Name</th>-->
									<th>Designation</th>
									<th>EMPNo</th>
									<th>Project Code</th>
									<th>Hours</th>
									<th>O.T</th>
									</tr>
									</thead>
                                 <tbody id="tbody">
                                   
                                 </tbody>
                              </table>
                           </div>
						   </form>
                        </div>
                     </div>
                  </div>
				   
               </div>
			   <div class="form-group">
               <button   class="btn btn-success" onclick="ajaxsearchByDate()">
               Submit
               </button> 
            </div>
               <!-- items Modal1 -->
               <div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Add new Item</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->    
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

<!-- /.content -->

<!-- dispaly -->
<script>
   function ajaxsearchByDate() {
    // $(".loader").show();
   $.ajax({
   type: "POST",
   url: "<?=BASE; ?>Attendence/ajaxgetDateWiseAttendance",
   data: $("#ajxform").serialize(),
   success: function(response){
         $('#tbody').html(response);
   //     $(".loader").hide();
   }
   });
   }
</script>
<?= $this->endSection() ?>