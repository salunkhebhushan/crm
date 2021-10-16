<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<?php foreach($pro_profile as $row) : ?>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon"><i class="fa fa-user-circle-o"></i></div>
               <div class="header-title">
                  <h1>Projects</h1>
                  <small>Show Projects Details </small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12 col-md-4">
                     <div class="card">
                        <div class="card-header">
                           <div class="card-header-"></div>
                           <h3 ><b style="color:#FFD700">Project No :</b> <b><?= $row['project_no'] ?> </b></h3>
                           
                        </div>
                        
                        <div class="card-content">
                           
                     
                           <div class="card-content-languages">
                              

                           <div class="card-body text-center">
                          
                           <p class="card-text mb-3"><span class="text-primary"></span><h4 style="color:#DAA520">Client Company Name : </h4><h5 style="color:#87CEFA"><?= $row['owner_company_name'] ?></h5> </p> 

                              <p class="card-text mb-3"><span class="text-primary"><h4 style="color:#DAA520">Project Title Name :</h4></span><h5 style="color:#87CEFA"> <?= $row['project_title'] ?></h5> </p>
                              
                             
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
                           <h4 style="margin-top:2px;padding-top:6px;">Project  Details</h4>
                             
                           </div>

                           <div class="card-content-languages">
                              
                           <div class="row">
                            
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Work Order Satus : </span><?= $row['work_order_satus'] ?></p>
                              </div>

<!-- pro_id
project_no
cnt_id
owner_company_name
project_title
work_order_satus -->


                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Starting Date :</span> <?= $row['starting_date'] ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Complation Date : </span><?= $row['complation_date'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Days Compated :</span> <?= $row['days_compated'] ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Days Remaining :</span> <?= $row['days_remaining'] ?></p>
                              </div>
                         
                         
                           </div>

                           </div>
                        </div>

                     <div class="card-content-member text-center">
                           <h4 style="">Sub-Contractor & Project Evaluation</h4>
                              <p class="m-t-0"></p>
                           </div>

                           <div class="card-content-languages">
                           
                           <div class="row">
                             
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">sub_ctr_code :</span> <?= $row['sub_ctr_code'] ?></p>
                              </div>
                           



                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">sub_ctr_name : </span><?= $row['sub_ctr_name'] ?></p>
                              </div>

                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">project_expens : </span><?= $row['project_expens'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">total_revenue :</span> <?= $row['total_revenue'] ?></p>
                              </div>

                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Profit/Loss :</span> <b> <?= $row['profit_loss'] ?></b></p>
                              </div>
                              <!-- profit_loss
created_at
updated_by -->


                        </div>
                     </div>
                     
                    
                  
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