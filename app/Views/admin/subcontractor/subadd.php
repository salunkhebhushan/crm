<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Sub Contractor </h1>
                  <small>Sub Contractor list</small>
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
                              <i class="fa fa-list"></i>Sub Contractor List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Sub Contractor Details</b></h3>
                       </div>
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Subcontractor/sub_insert" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                              
                            <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Sub Contractor No</label>         
                                 <input type="text"  name="subcontractorno" id="subcontractorno" class="form-control"  placeholder="Enter Sub Contractor No" value="<?= set_value('subcontractorno'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['subcontractorno'])) {echo $error['subcontractor']; } ?></div>
                              </div>
                            

                              <div class="form-group col-sm-6">
                                 <label>Company Name</label>
                                 <select class="form-control" name="companyname" id="companyname"    >
                                 <?php if(isset($sub_details)) foreach($sub_details as $sub){?>
                                 <option value="<?= $sub->cnt_no; ?>" ><?= $sub->owner_company_name ?></option>
                            
                                 <?php }?>          
                               
                                 </select>

                                
                              </div>
                           </div>


                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Company Owner Name </label>
                                 <input type="text" name="ownername" id="ownername"class="form-control" placeholder="Enter Company Owner Name " value="<?= set_value('ownername'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['ownername'])) {echo $error['ownername']; } ?></div>

                              </div>
    
                              <div class="form-group col-sm-6">
                                 <label>Sub Contractor Cell No.</label>
                                 <input type="text" name="cellno" id="cellno"class="form-control" placeholder="Enter Sub Contactor Cell Number" value="<?= set_value('cellno'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['cellno'])) {echo $error['cellno']; } ?></div>
                                </div>
                              </div>
                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Sub Contractor Email</label>
                                 <input type="email" name="subemail" id="subemail" class="form-control" placeholder="exp:abc12@gmail.com"  value="<?= set_value('subemail'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['subemail'])) {echo $error['subemail']; } ?></div>
                            
                              </div>   
                              <div class="form-group col-sm-6">
                                 <label> Contact Person Name</label>
                                 <input type="text"  name="sub_con_per_name" id="sub_con_per_name" class="form-control" placeholder="Enter Sub Contractor Contact Person Name" value="<?= set_value('sub_con_per_name'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['sub_con_per_name'])) {echo $error['sub_con_per_name']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                              
                           <div class="form-group col-sm-6">
                                 <label>Contact Person Cell No.</label>
                                 <input type="text"  name="Sub_con_per_cellno" id="Sub_con_per_cellno" class="form-control" placeholder="Enter Sub Contractor Contact person Cell Number"  value="<?= set_value('con_per_cellno'); ?>">
                              </div>
                           <div class="form-group col-sm-6">
                                 <label>Contact Person Email</label>
                                 <input type="email" name="sub_con_per_email" id="sub_con_per_email" class="form-control" placeholder="exp:abc12@gmail.com" value="<?= set_value('sub_con_per_email'); ?>">
                                 <div class="text-danger"><?php if(isset($error['sub_con_per_email'])) {echo $error['con_per_email']; } ?></div>
                              </div>
                            </div>

                              
                                          
                           <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-success">
                    Save
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
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <script >
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

</script>

         <?= $this->endSection() ?>