<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Sub Contractor </h1>
                  <small>Edit Sub Contractor </small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="<?= BASE; ?>Subcontractor/sub_form"> 
                              <i class="fa fa-list"></i>Edit Sub Contractor List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Edit Sub Contractor Details</b></h3>
                       </div>
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Subcontractor/update/<?php {{ echo @$row['sub_id']; }}  ?>" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                              
                            <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Sub Contractor No</label>         
                                 <input type="hidden"  name="subcontractorno" id="subcontractorno" class="form-control"  placeholder="Enter Sub Contractor No" value="<?= set_value('subcontractorno', isset($row['sub_no']) ? $row['sub_no'] : ''); ?>" readonly >
                                 <input type="text"   class="form-control"  placeholder="Enter Sub Contractor No" value="<?="SC-".set_value('subcontractorno', isset($row['sub_no']) ? $row['sub_no'] : ''); ?>" readonly >

                              </div>
                            

                              <div class="form-group col-sm-6">
                                 <label>Company Name</label>
                                 <input type="text" name="companyname" id="companyname"class="form-control" placeholder="Enter Sub Contractor Company Name " value="<?= set_value('companyname', isset($row['sub_company_name']) ? $row['sub_company_name'] : ''); ?>" required>
                              </div>
                           </div>


                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Company Owner Name </label>
                                 <input type="text" name="ownername" id="ownername"class="form-control" placeholder="Enter Company Owner Name " value="<?= set_value('ownername', isset($row['sub_owner_name']) ? $row['sub_owner_name'] : ''); ?>" required>
                                 

                              </div>
    
                              <div class="form-group col-sm-6">
                                 <label>Sub Contractor Cell No.</label>
                                 <input type="text" name="cellno" id="cellno"class="form-control" placeholder="Enter Sub Contactor Cell Number" value="<?= set_value('cellno', isset($row['sub_cell_no']) ? $row['sub_cell_no'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required >
                                 <div class="text-danger"><?php if(isset($error['cellno'])) {echo $error['cellno']; } ?></div>
                                </div>
                              </div>
                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Sub Contractor Email</label>
                                 <input type="email" name="subemail" id="subemail" class="form-control" placeholder="exp:abc12@gmail.com"  value="<?= set_value('subemail', isset($row['sub_email']) ? $row['sub_email'] : ''); ?>" >
                                 <div class="text-danger"><?php if(isset($error['subemail'])) {echo $error['subemail']; } ?></div>
                            
                              </div>   
                              <div class="form-group col-sm-6">
                                 <label> Contact Person Name</label>
                                 <input type="text"  name="sub_con_per_name" id="sub_con_per_name" class="form-control" placeholder="Enter Sub Contractor Contact Person Name" value="<?= set_value('sub_con_per_name', isset($row['sub_contact_person']) ? $row['sub_contact_person'] : ''); ?>" >
                                 <div class="text-danger"><?php if(isset($error['sub_con_per_name'])) {echo $error['sub_con_per_name']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                              
                           <div class="form-group col-sm-6">
                                 <label>Contact Person Cell No.</label>
                                 <input type="text"  name="Sub_con_per_cellno" id="Sub_con_per_cellno" class="form-control" placeholder="Enter Sub Contractor Contact person Cell Number"  value="<?= set_value('Sub_con_per_cellno', isset($row['sub_contact_cell_no']) ? $row['sub_contact_cell_no'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                              </div>
                           <div class="form-group col-sm-6">
                                 <label>Contact Person Email</label>
                                 <input type="email" name="sub_con_per_email" id="sub_con_per_email" class="form-control" placeholder="exp:abc12@gmail.com" value="<?= set_value('sub_con_per_email', isset($row['sub_contact_email']) ? $row['sub_contact_email'] : ''); ?>">
                                 <div class="text-danger"><?php if(isset($error['sub_con_per_email'])) {echo $error['con_per_email']; } ?></div>
                              </div>
                            </div>

                              
                                 <div class="panel-group " role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                 <div class="panel-heading" role="tab">
                                    
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    
                                   Edit activities
                                    </a>
                                 </div>
                                 <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="table-responsive">
                                       <table class="table table-bordered table-hover">
                                          <thead>
                                             <tr class="info">
                                                <th>Activity 1</th>
                                                <th>Activity 2</th>
                                                <th> Activity 3</th>
                                                    <th>Activity 4</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td> <input type="text"  name="activity1" id="activity1" class="form-control" placeholder="Enter activity 1..."  value="<?= set_value('activity1', isset($row['activity1']) ? $row['activity1'] : ''); ?>" ></td>
                                                <td> <input type="text"  name="activity2" id="activity2" class="form-control" placeholder="Enter activity 2..."  value="<?= set_value('activity2', isset($row['activity2']) ? $row['activity2'] : ''); ?>" ></td>
                                                <td>
                                                    <input type="text"  name="activity3" id="activity3" class="form-control" placeholder="Enter activity 3..."  value="<?= set_value('activity3', isset($row['activity3']) ? $row['activity3'] : ''); ?>" >
                                                </td>
                                                <td>
                                                    <input type="text"  name="activity4" id="activity4" class="form-control" placeholder="Enter activity 4..."  value="<?= set_value('activity4', isset($row['activity4']) ? $row['activity4'] : ''); ?>" >
                                                </td>
                                             </tr>
                                            
                                            
                                            
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                                          
                           <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-success">
                    Update
                    </button> 
                  </div>
            </div>         
                          
             </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
            
         </div>
         <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
               <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>-->
       <!-- <script >
   $(document).ready(function(){
     
      $('#companyname').change(function(){
         var reg_number = $(this).val();
    $.ajax
   ({
   type: "POST",
   url: "<?=BASE; ?>Subcontractor/selectedClient",
   data: {post_id:reg_number},
    dataType: "json",
   cache: false,
         success:function(response)
            { 
               
              $('#ownername').val(response.ajaxClientDetails[0].owner_name);
       
         }
   });

   });
    });

</script>-->

         <?= $this->endSection() ?>