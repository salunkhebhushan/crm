<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<?php foreach($emp_profile as $row) : ?>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon"><i class="fa fa-user-circle-o"></i></div>
               <div class="header-title">
                  <h1>Profile</h1>
                  <small>Show Employees profile </small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12 col-md-4">
                     <div class="card">
                        <div class="card-header">
                           <div class="card-header">

                          <img  src="<?= "/uploads/".$row['passport_img'] ?>" height="100px" style="border-radius:50px" width="100px" alt="image"> 

                           </div>
                           
                        </div>
                        
                        <div class="card-content">
                           
                     
                           <div class="card-content-languages">
                              

                           <div class="card-body text-center">
                           <b><?= $row['first_name'] ?>  <?= $row['last_name'] ?></b>
                          
                           <p class="card-text mb-3"><span class="text-primary"></span> <?= $row['email'] ?> </p>

                              <p class="card-text mb-3"><span class="text-primary">Emoloyee No :</span><b> <?= $row['emp_no'] ?>   </b></p>
                              
                             
                              <!-- <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#add_basicInformation"><i class="fa fa-plus" aria-hidden="true"></i></a>
                              <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_basicInformation"><i class="fa fa-pencil" aria-hidden="true"></i></a> -->
                              </div>



                           </div>
                           
                           
                        </div>
                        <div class="card-footer">
                           <div class="card-footer-stats">
                              <!-- <div>
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
                              </div> -->
                           </div>
                           <!-- <div class="card-footer-message">
                              <h4><i class="fa fa-comments"></i> Message me</h4>
                           </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-8">
                     <div class="card">
                        
                        <div class="card-content">
                           
                        <div class="card-content-member text-center">
                           <h4 style="margin-top:2px;padding-top:6px;">Basic Details</h4>
                             
                           </div>

                           <div class="card-content-languages">
                              
                           <div class="row">
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Mobile No :</span> <?= $row['mobile'] ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Designation : </span><?= $row['designation'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Project :</span> <?= $row['project'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Employee Category : </span><?= $row['category'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Date of Joinig : </span><?= $row['doj'] ?></p>
                              </div>


                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Father Name :</span> <?= $row['father_name'] ?></p>

                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Nationality : </span> <?= $row['nationality'] ?></p>

                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Home No :</span> <?= $row['homeno'] ?></p>

                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Relative Name :</span> <?= $row['relative_name'] ?></p>

                              </div>


                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Relative Cell No : </span><?= $row['relative_no'] ?></p>

                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary"></span> </p>

                              </div>

                              <div class="col-md-12">
                              <p class="card-text mb-3"><span class="text-primary"> Home Address : </span><?= $row['home_address'] ?></p>

                              </div>

                         
                           </div>

                           </div>
                           
                           <!-- <div class="card-content-summary">
                              <p> Home Address :<?= $row['home_address'] ?></p>
                           </div> -->
                        </div>

                        <div class="card-content-member text-center">
                           <h4 style="">Salary Details</h4>
                              <p class="m-t-0"></p>
                           </div>

                           <div class="card-content-languages">
                           
                           <div class="row">
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Basic Salary :</span> <?= $row['basic_salary'] ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Accommodation : </span><?= $row['accommodation'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Transport :</span> <?= $row['transport'] ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Salary Per Day : </span><?= $row['salary_per_day'] ?></p>
                              </div>


                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Food :</span> <?= $row['food'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Allowances : </span><?= $row['allowances'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Total : </span><b><?= $row['total'] ?></b></p>
                              </div>

                        </div>
                     </div>



                     <div class="card-content-member text-center">
                           <h4 style="">Documents Details</h4>
                              <p class="m-t-0"></p>
                           </div>

                           <div class="card-content-languages">
                           
                           <div class="row">
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Passport No :</span> <?= $row['passport_no'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Issue Data : </span><?= $row['pissue_date'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Expire Date :</span> <?= $row['pexpire_date'] ?></p>
                              </div>

                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Emirate Id : </span><?= $row['emirate_id'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Issue Data :</span> <?= $row['eissue_date'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Expire Date : </span><?= $row['eexpire_date'] ?></p>
                              </div>

                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">VISA No : </span><?= $row['visa_no'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Issue Data :</span> <?= $row['vissue_date'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Expire Date : </span><?= $row['vexpire_date'] ?></p>
                              </div>

                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Liecence No : </span><?= $row['driving_licence'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Issue Data :</span> <?= $row['didate'] ?></p>
                              </div>
                              <div class="col-md-4">
                              <p class="card-text mb-3"><span class="text-primary">Expire Date : </span><?= $row['dedate'] ?></p>
                              </div>

                        </div>
                     </div>
                     
                     <div class="card-content-member text-center">
                           <h4 style="">Documents Uploads</h4>
                              <p class="m-t-0"></p>
                           </div>

                           <div class="card-content-languages">
                           
                           <div class="row">
                              <div class="col-md-3">
                              <p class="card-text mb-3"><span class="text-primary">Multi Image <br> </span> 

                                         <?php

                                                // foreach($_FILES as $file){
                                                // //echo $file['name']; 
                                                // echo $file['tmp_name'].'</br>'; 
                                                // move_uploaded_file($file['tmp_name'], "./imguploads/".$file["name"]);
                                                // }

                                                // ?>                                             
                              <img  src="<?= "/imguploads/".$row['img_name'] ?>" multiple="" height="100px" width="100px" alt="image"> 


                           </p>
                              </div>
                              
                              <!-- <div class="col-md-3">
                              <p class="card-text mb-3"><span class="text-primary">Emirate Image <br> </span> 
                          <img  src="<?= "/uploads/".$row['passport_img'] ?>" height="100px" width="100px" alt="image"> 
                           </p>
                              </div>
                              <div class="col-md-3">
                              <p class="card-text mb-3"><span class="text-primary">VISA Image <br> </span> 
                          <img  src="<?= "/uploads/".$row['passport_img'] ?>" height="100px" width="100px" alt="image"> 
                           </p>
                              </div>
                              <div class="col-md-3">
                              <p class="card-text mb-3"><span class="text-primary">Licence Image <br> </span> 
                          <img  src="<?= "/uploads/".$row['passport_img'] ?>" height="100px" width="100px" alt="image"> 
                           </p>
                              </div> -->
                             
                             
                        </div>
                     </div>
                        <div class="card-footer">
                          
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