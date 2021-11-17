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
                        <!--<div class="card-header">-->
                        <!--   <div class="card-header-"></div>-->
                          
                           
                        <!--</div>-->
                        
                        <div class="card-content">
                           
                     
                           <div class="card-content-languages">
                              

                           <div class="card-body text-center">
                           <h3 ><b style="color:#FFD700">Project No :</b> <b><?= "WA00".$row['project_no'] ?> </b></h3>
                           <p class="card-text mb-3"><span class="text-primary"></span><h4 style="color:#DAA520"><b>Client Company Name</b>  </h4><h5 style="color:#87CEFA"><?= $row['owner_company_name'] ?></h5> </p> 

                              <p class="card-text mb-3"><span class="text-primary"><h4 style="color:#DAA520"><b>Project Title Name </b></h4></span><h5 style="color:#87CEFA"> <?= $row['project_title'] ?></h5> </p>
                              
                             
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
                           <h4 style="margin-top:2px;padding-top:6px;"><a href="<?= BASE; ?>Project/pro_form">Project  Details</a></h4>
                             
                           </div>

                           <div class="card-content-languages">
                              
                           <div class="row">
                            
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Work Order Satus : </span><?= $row['work_order_satus'] ?></p>
                              </div>


                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Starting Date :</span> <?= $row['starting_date'] ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Complation Date : </span><?= $row['complation_date'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Days Completed :</span> <?= $dayCompleted; ?></p>
                           
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Days Remaining :</span> <?= $dayRemaining;?></p>
                              </div>
                              
                               <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Project Status :</span> <?= $row['pro_status']  ?></p>
                              </div>
                         
                         
                           </div>

                           </div>
                        </div>

                     <div class="card-content-member text-center">
                           <h4 style=""><a href="<?= BASE; ?>Subcontractor/sub_form">Sub-Contractor & Project Evaluation</a></h4>
                              <p class="m-t-0"></p>
                           </div>

                           <div class="card-content-languages">
                           
                           <div class="row">
                             
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">sub_ctr_code :</span> <?= $row['sub_ctr_code'] ?></p>
                              </div>
                           



                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">sub_ctr_name : </span><?= $row['sub_ctr_name'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">project_expens : </span><?= $row['project_expens'] ?></p>
                              </div>
                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">total_revenue :</span> <?= $row['total_revenue'] ?></p>
                              </div>

                              <div class="col-md-6">
                              <p class="card-text mb-3"><span class="text-primary">Profit/Loss :</span> <b> <?= $row['profit_loss'] ?></b></p>
                              </div>
                  


                        </div>
                     </div>
                       
                       
                        
                     <div class="card-content-member text-center">
                           <h4 style="margin-top:2px;padding-top:6px;">Project  Current Work Status</h4>
                             
                           </div>


                           <div class="card-content-languages">
                             <?php if($noOfWorkerCount == '-'){?>
                              <div class="col-sm-8">
                                       <div class="alert alert-sm alert-danger alert-dismissible" role="alert">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <i class="fa fa-exclamation-circle"></i><strong>Alert!</strong> Please Enter Attendance For this Project Number...
                                       </div>
                                    </div>
                              <?php }else{?>
                              <a href="<?=BASE; ?>Project/activity_form/<?php {{ echo @$row['project_no']; }} ?>"  class="btn btn-success">Add Activity</a>
                                <a href="<?=BASE; ?>Project/atv_form/<?php {{ echo @$row['project_no']; }} ?>"  class="btn btn-success">Activity Report</a>
                                  <?php }?>
                           <div class="row">
                                 <div class="form-group col-sm-12">
                           
                                   <table id="dataTable" class="table table-bordered table-hover">
                                          <thead>
                                              
                                          </thead>
                                    
                                             <tbody>
                                                 <tr class="info">
                                                <th style="width:232px;">No.of Employee</th>
                                                <th style="width:234px;">Days Completed</th>
                                                <th style="width:234px;">Days Remaining </th>
                                                  
                                             </tr>
                                            
                                             <tr>
                                                
                                                <td><?= $noOfWorkerCount;?></td>
                                                <td><?=$dayCompleted;?></td>
                                                <td><?=$dayRemaining;?></td>
                                              
                                             </tr>
                                            
                                             
                                            
                                          </tbody>
                                       </table>
                                  
                                       
                                         </div>
                             
                           </div>

                           </div>
                        </div>
 
                    
                  
                 
                  
                  
   
               </div>
            </section>
            <!-- /.content -->
         </div>



         <?php endforeach; ?>
            <?= $this->endSection() ?>