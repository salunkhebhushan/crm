<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>


<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-dashboard"></i>
               </div>
               <div class="header-title">
                  <?php $session= session(); ?>
                  <h1>CRM <?php echo $session->get('admin'); ?> Dashboard </h1>
                  <small>Very detailed & featured admin.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <a href="<?=BASE; ?>Employee/emp_form"> <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $activeEmp; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Active Employees</h3>
                        </div>
                     </div></a>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                  <a href="<?=BASE; ?>Client/cnt_form">   <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $allClient;  ?>
                             </span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Active Client</h3>
                        </div>
                     </div></a>
                  </div>
                  
                  
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <a href="<?= BASE; ?>Project/pro_form"><div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-files-o fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo $allproject; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Running Projects</h3>
                        </div>
                     </div></a>
                  </div>
                  
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                   <a href="<?= BASE; ?>Subcontractor/sub_form">  <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-user fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php  echo $allsub_contractor; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Sub Contractors</h3>
                        </div>
                     </div></a>
                  </div>
               </div>
               <div class="row">
                  
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Document Expire Reminder</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="Workslist">
                              <div class="worklistdate">
                                 <table class="table table-hover">
                                    <thead>
                                       <tr>
                                          <th>Name</th>
                                          <th>EMP No</th>
                                          <th>Passport Expire</th>
                                          <th>Emirate Expire</th>
                                          <th>VISA Expire</th>
                                          <th>Driving Expire</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($emp)) foreach($emp as $row) {?>
                                       <tr >
                                          <td><?= $row['first_name']?></td>
                                          <td><?= $row['emp_no'] ?></td>

                                          <?php $now = date("Y-m-d"); if($row['pexpire_date']>$now) {?>
                           <td><span class="label label-pill label-success  m-r-15"><?= $row['pexpire_date'] ?></span></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['eexpire_date']>$now) {?>
                              <td><span class="label label-pill label-success  m-r-15"><?= $row['eexpire_date'] ?></span></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['vexpire_date']>$now) {?>
                              <td><span class="label label-pill label-success  m-r-15"><?= $row['vexpire_date'] ?></span></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['dedate']>$now) {?>
                              <td><span class="label label-pill label-success  m-r-15"><?= $row['dedate'] ?></span></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>
                                       </tr>
                                       <?php }?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
                  
               </div>
               
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

         <?= $this->endSection() ?>
