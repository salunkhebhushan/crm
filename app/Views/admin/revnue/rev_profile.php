<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<?php foreach($rev_profile as $row) : ?>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon"><i class="fa fa-user-circle-o"></i></div>
               <div class="header-title">
                  <h1>Revenue</h1>
                  <small>Show Revenue profile </small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12 col-md-4">
                     <div class="card">
                        <div class="card-header">
                           <div class="card-header-headshot"></div>
                           
                        </div>
                        
                        <div class="card-content">
                           
                     
                           <div class="card-content-languages">
                              

                           <div class="card-body text-center">
                           <b> </b>
                          
                           <p class="card-text mb-3"><span class="text-primary"></span> <?= $row->rev_voucher_no; ?> </p>

                              <p class="card-text mb-3"><span class="text-primary">Invoice No :</span><b> <?= $row->rev_invoice_no; ?>   </b></p>
                              
                             
                              <!-- <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#add_basicInformation"><i class="fa fa-plus" aria-hidden="true"></i></a>
                              <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_basicInformation"><i class="fa fa-pencil" aria-hidden="true"></i></a> -->
                              </div>



                           </div>
                           
                           
                        </div>
                        <div class="card-footer">
                           <div class="card-footer-stats">
                              
                           </div>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-8">
                     <div class="card">
                        
                        <div class="card-content">
                           
                        <div class="card-content-member text-center">
                           <h4 style="margin-top:2px;padding-top:6px;">Revnue Details</h4>
                             
                           </div>

                           <div class="card-content-languages">
                              
                           <div class="row">
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">project no :</span> <?= $row->project_no; ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">project title : </span><?= $row->project_title; ?></p>
                              </div>

                         
                           </div>

                           </div>
                        </div>

                     <!-- <div class="card-content-member text-center">
                           <h4 style="">Office Details</h4>
                              <p class="m-t-0"></p>
                           </div>

                           <div class="card-content-languages">
                           
                           <div class="row">
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Office No :</span> <= $row['office_no'] ?></p>
                              </div>
                            
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">office_email :</span> <= $row['office_email'] ?></p>
                              </div>
                           
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">office_address : </span><= $row['office_address'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">vat no : </span><= $row['vatno'] ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">company_address :</span> <= $row['company_address'] ?></p>
                              </div>
                              

                        </div>
                     </div> -->
                     
                    
                  
                  <!-- <div class="col-sm-12 col-md-4">
                     <div class="card">
                        
                        <div class="card-content">
                           <div class="card-content-member text-center">
                         
  
                           <h4 class="m-t-0">Basic Details</h4>
                              <p class="m-t-0"></p>
                        
                           </div>

                           <div class="card-content-languages">
                              

                           <div class="card-body text-center">
                              <p class="card-text mb-3"><span class="text-primary">Preferred Name :</span><b> Maria</b></p>
                              <p class="card-text mb-3"><span class="text-primary">First Name :</span> Maria</p>
                              <p class="card-text mb-3"><span class="text-primary">Last Name : </span>Cotton</p>
                              <p class="card-text mb-3"><span class="text-primary">Nationality :</span> American</p>
                              <p class="card-text mb-3"><span class="text-primary">Date of Birth :</span> 05 May 1990</p>
                              <p class="card-text mb-3"><span class="text-primary">Gender : </span>Female</p>
                              <p class="card-text mb-3"><span class="text-primary">Blood Group :</span> A+</p>
                              <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#add_basicInformation"><i class="fa fa-plus" aria-hidden="true"></i></a>
                              <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_basicInformation"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                              </div>



                           </div>
                           
                           <div class="card-content-summary">
                              <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="card-footer-stats">
                              <div>
                                 <p>PROJECTS:</p>
                                 <i class="fa fa-users"></i><span>241</span>
                              </div>
                              <div>
                                 <p>MESSAGES:</p>
                                 <i class="fa fa-coffee"></i><span>350</span>
                              </div>
                              <div>
                                 <p>Last online</p>
                                 <span class="stats-small">3 days ago</span>
                              </div>
                           </div>
                           <div class="card-footer-message">
                              <h4><i class="fa fa-comments"></i> Message me</h4>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  
                  
   
               </div>
            </section>
            <!-- /.content -->
         </div>



         <?php endforeach; ?>
            <?= $this->endSection() ?>