<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Client </h1>
                  <small>Client list</small>
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
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Client List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Client Details</b></h3>
                       </div>
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Client/update/<?php {{ echo @$row['cnt_id']; }}  ?>" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                              
                            <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Client No.</label>   
                                 <input type="hidden"  name="clientno" id="clientno" class="form-control" required placeholder="Enter Client Number" value="<?= set_value('clientno', isset($row['cnt_no']) ? $row['cnt_no'] : ''); ?>"   >      
                                 <input type="text"   class="form-control" required placeholder="Enter Client Number" value="CA00<?= set_value('clientno', isset($row['cnt_no']) ? $row['cnt_no'] : ''); ?>"   readonly>
                                 <div class="text-danger"><?php if(isset($error['clientno'])) {echo $error['clientno']; } ?></div>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Company Name</label>
                                 <input type="text" name="companyname" id="companyname" class="form-control" required placeholder="Enter Company Name" value="<?= set_value('companyname', isset($row['clint_company_name']) ? $row['clint_company_name'] : ''); ?>" required>
                                 <div class="text-danger"><?php if(isset($error['companyname'])) {echo $error['companyname']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Company Owner Name </label>
                                 <input type="text" name="ownername" id="ownername"class="form-control" placeholder="Enter Company Owner Name " value="<?= set_value('ownername', isset($row['owner_name']) ? $row['owner_name'] : ''); ?>" required>
                                 <div class="text-danger"><?php if(isset($error['ownername'])) {echo $error['ownername']; } ?></div>

                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Owner Cell No.</label>
                                 <input type="text" name="ownercellno" id="ownercellno"class="form-control" placeholder="Enter Owner Cell Number" value="<?= set_value('ownercellno', isset($row['owner_cellno']) ? $row['owner_cellno'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
                                 <div class="text-danger"><?php if(isset($error['ownercellno'])) {echo $error['ownercellno']; } ?></div>
                                </div>
                              </div>
                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Owner Email</label>
                                 <input type="email" name="owneremail" id="owneremail" class="form-control" placeholder="exp:abc12@gmail.com"  value="<?= set_value('owneremail', isset($row['owner_email']) ? $row['owner_email'] : ''); ?>" required>
                                 <div class="text-danger"><?php if(isset($error['owneremail'])) {echo $error['owneremail']; } ?></div>
                            
                              </div>   
                              <div class="form-group col-sm-6">
                                 <label>Contact Person Name</label>
                                 <input type="text"  name="con_per_name" id="con_per_name" class="form-control" placeholder="Enter Contact Person Name" value="<?= set_value('con_per_name', isset($row['contact_person_name']) ? $row['contact_person_name'] : ''); ?>" required>
                                 <div class="text-danger"><?php if(isset($error['con_per_name'])) {echo $error['con_per_name']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                              
                           <div class="form-group col-sm-6">
                                 <label>Contact Person Cell No.</label>
                                 <input type="text"  name="con_per_cellno" id="con_per_cellno" class="form-control" placeholder="Enter Contact person Cell Number"  value="<?= set_value('con_per_cellno', isset($row['contact_person_cellno']) ? $row['contact_person_cellno'] : ''); ?>">
                                 <div class="text-danger"><?php if(isset($error['con_per_cellno'])) {echo $error['con_per_cellno']; } ?></div>
                              </div>
                           <div class="form-group col-sm-6">
                                 <label>Contact Person Email</label>
                                 <input type="email" name="con_per_email" id="con_per_email" class="form-control" placeholder="exp:abc12@gmail.com" value="<?= set_value('con_per_email', isset($row['contact_person_email']) ? $row['contact_person_email'] : ''); ?>" required>
                                 <div class="text-danger"><?php if(isset($error['con_per_email'])) {echo $error['con_per_email']; } ?></div>
                              </div>
                            </div>

                              <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Office No.</label>
                                 <input type="" name="officeno" id="officeno" class="form-control" placeholder="Enter Office Number" value="<?= set_value('officeno', isset($row['office_no']) ? $row['office_no'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                 <div class="text-danger"><?php if(isset($error['officeno'])) {echo $error['officeno']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Office Email</label>
                                 <input type="email" name="office_email" id="office_email" class="form-control" placeholder="exp:abc12@gmail.com" value="<?= set_value('office_email', isset($row['office_email']) ? $row['office_email'] : ''); ?>" required>
                                 <div class="text-danger"><?php if(isset($error['office_email'])) {echo $error['office_email']; } ?></div>
                              </div>
                              </div>

                    
                           <div class="row">  
                           <div class="form-group col-sm-6">
                                 <label>VAT No.</label>
                                 <input type="text" id="vatno"  name="vatno"  class="form-control" placeholder="Enter VAT Number" value="<?= set_value('vatno', isset($row['vatno']) ? $row['vatno'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                 <div class="text-danger"><?php if(isset($error['vatno'])) {echo $error['vatno']; } ?></div>
                              </div>
                           <div class="form-group col-sm-6">
                                 <label>Office Address</label>
                                 <textarea class="form-control" name="office_address" id="office_address" rows="3" placeholder="Office Address..." ><?= set_value('office_address', isset($row['office_address']) ? $row['office_address'] : ''); ?></textarea>
                                 <div class="text-danger"><?php if(isset($error['office_address'])) {echo $error['office_address']; } ?></div>
                              </div>
                           </div>
                         
                           <div class="row">
                             
                              <div class="form-group col-sm-6">
                                 <label>Company Address</label>
                                 <textarea class="form-control" name="company_address" id="company_address" rows="3" placeholder="Company Address" ><?= set_value('company_address', isset($row['company_address']) ? $row['company_address'] : ''); ?></textarea>
                                 <div class="text-danger"><?php if(isset($error['company_address'])) {echo $error['company_address']; } ?></div>
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
         
         <?= $this->endSection() ?>