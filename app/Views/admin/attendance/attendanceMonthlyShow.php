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
                 <h1>Employees Monthly Attendance </h1>
                  <small>Employees Monthly Attendance</small>
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
                            <i class="fa fa-list"></i>  Employees Montly Attendance Show  </a>  
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                     <form  id="ajxform">
					  <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Start Date</label>
                                 <input type="date"  name="frmDate" id="frmDate" class="form-control"   required >
                                
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>End Date</label>
                                
                                 <input type="date"  name="toDate" id="toDate" class="form-control"   required >
                              </div>
                              <div class=" form-group col-md-6  pull-right">
                            
                             
                                 <span class="label label-pill label-primary m-r-15">Project Code</span>
                                 <span class="label label-pill label-success m-r-15">Present</span>
                                 <span class="label label-pill label-info m-r-15">No Overtime</span>
                                 <span class="label label-pill label-warning m-r-15">Overtime</span>
                                 <span class="label label-pill label-danger m-r-15">Absent</span>
                               </div>

                            
                           </div>
                           <div class="table-responsive">
                                  <div id=tablediv>
           
                            </div>
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
        url: "<?=BASE; ?>Attendence/ajaxGetAttendanceMonthWiseData",
        data: $("#ajxform").serialize(),
        success: function(response){
                    $('#tablediv').html(response);
             //     $(".loader").hide();
        }
    });
}
             </script>
<?= $this->endSection() ?>