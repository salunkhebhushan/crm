<?= $this->extend('admin_template') ?>

<?= $this->section('content') ?>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script> <!--script js for modal textbox value -->
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
                     <!-- CARD 1 -->
                     <div class="card">
                        <div class="card-content">
                           <div class="card-content-languages">
                           <div class="card-body text-center">
                           <h3 ><b style="color:#FFD700">Project No :</b> <b><?= "WA00".$row['project_no'] ?> </b></h3>
                           <p class="card-text mb-3"><span class="text-primary"></span><h4 style="color:#DAA520"><b>Client Company Name</b>  </h4><h5 style="color:#87CEFA"><?= $row['owner_company_name'] ?></h5> </p> 

                              <p class="card-text mb-3"><span class="text-primary"><h4 style="color:#DAA520"><b>Project Title Name </b></h4></span><h5 style="color:#87CEFA"> <?= $row['project_title'] ?></h5> </p>
                              
                              </div>
                           </div>
                        </div>
                        <div class="card-footer">
                           <div class="card-footer-stats">
                              
                           </div>
                           
                        </div>
                     </div>
               <!-- CARD 1 -->
                <!-- CARD 2 -->
                     <div class="card">
                        
                        
                        <div class="card-content">
                          <div class="panel-title text-center"><h4 >Activity List</h4></div>
                           <div class="card-content-languages">
                           <div class="panel-body">
                              <?php if (isset($listActivity)) foreach($listActivity as $activityList) {?>
                           <div class="runnigwork">
                              <span class="label-primary  label label-default pull-right"><?= @$activityList->order_status;?></span>
                              <i class="fa fa-dot-circle-o"></i>        
                              <a href="#addDailyActivity" data-toggle="modal" data-projectid="<?= @$activityList->project_id;?>"  data-activityname="<?= @$activityList->activity_name;?>" data-id="<?= @$activityList->pro_atv_id;?>"><?= @$activityList->activity_name;?></a><br>   
                              <?php if($activityList->order_status == 'Complited' || $activityList->order_status == 'On-hold' || $activityList->order_status == 'In-Complited' || $activityList->order_status == 'Assign' || $activityList->order_status == 'Canceled' || $activityList->order_status == 'Pending') {?>                       
                                 <?php 
                                $status = $activityList->order_status; 
                                switch ($status) {
                                 case "Complited":
                                    echo '<div class="progress progress-md">
                                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: 100%">
                                       100% Complited
                                    </div>
                                 </div>';
                                   break;
                                 case "On-hold":
                                    echo '<div class="progress progress-md">
                                   <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                      40% On-hold
                                   </div>
                                </div>';
                                   break;
                                 case "In-Complited":
                                   echo '<div class="progress progress-md">
                                   <div class="progress-bar progress-bar-warning  progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                      50% In-Complited
                                   </div>
                                </div>';
                                   break;
                                   case "Assign":
                                    echo '<div class="progress progress-md">
                                    <div class="progress-bar progress-bar-primary  progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                                       5% Assign
                                    </div>
                                 </div>';
                                    break;
                                    case "Canceled":
                                       echo '<div class="progress progress-md">
                                    <div class="progress-bar progress-bar-danger  progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                       30% Caneling
                                    </div>
                                 </div>';
                                       break;
                                       case "Pending":
                                          echo '<div class="progress progress-md">
                                          <div class="progress-bar progress-bar-danger  progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                             10% Pending
                                          </div>
                                       </div>';
                                          break;
                                 default:
                                 echo '<div class="progress progress-md">
                                          <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                             0% Not Started
                                          </div>
                                       </div>';
                               }
                               ?>
                                

                              <?php }?>
                           </div>
      
                           <?php }?>
                        </div>
                           </div>
                        </div>
                     </div>
                      <!-- CARD 2 -->
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
               <!-- Modal1 -->
               <div class="modal fade" id="addDailyActivity" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i>Add Daily Activity</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" id="dailyActivityForm">
                                    <fieldset>
                                       <!-- Text input-->
                                       
                                       <div class="col-md-5 form-group">
                                          <label class="control-label">Date</label>
                                          <input type="date" placeholder="Task Name" name="date" class="form-control"  >
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Activity Name</label>
                                          <input type="text" placeholder="Task Name" id="activity_name" name="activity_name" class="form-control"  readonly>
                                       </div>
                                       <div class="col-md-4 form-group" id="classDIV">
                                          <label class="control-label">Meter</label>
                                          <input type="text" placeholder="Meter" id="meter" name="meter" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                       <label class="control-label"></label>
                                          <input type="hidden"  id="project_id" name="project_id"  class="form-control" readonly>
                                       </div>
                                       <div class="col-md-4 form-group">
                                       <label class="control-label"></label>
                                          <input type="hidden"  id="act_id" name="act_id"  class="form-control" readonly>
                                       </div>
                                      
                                    </fieldset>
                                 </form>
                                 <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-add btn-sm" onclick="saveOnButtonClick()">Save</button>
                                          </div>
                                       </div>  
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" onclick="resetform()" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
            
         </div>
         <script>
$(function () {
  $('#addDailyActivity').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var projectid = button.data('projectid'); // Extract info from data-* attributes
    var activityname = button.data('activityname'); // Extract info from data-* attributes
    var actid = button.data('id'); // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this);
    modal.find('#project_id').val(projectid);
    modal.find('#activity_name').val(activityname);
    modal.find('#act_id').val(actid);
  });
});
</script>

<script src="<?=BASE;?>js/daily_ajax_activity.js"></script>  

         <?php endforeach; ?>
        
            <?= $this->endSection() ?>