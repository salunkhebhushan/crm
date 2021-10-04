<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Project </h1>
                  <small>Project list</small>
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
                              <i class="fa fa-list"></i>  Project List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Project Details</b></h3>
                       </div>
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Client/cnt_insert" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                            
                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Project No.</label>         
                                 <input type="text"  name="projectno" id="projectno" class="form-control"  placeholder="Enter project Number" value="<?= set_value('projectno'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['projectno'])) {echo $error['projectno']; } ?></div>
                              </div>
                              <!-- <div class="form-group col-sm-6">
                                 <label>Client No.</label>         
                                 <input type="text"  name="clientno" id="clientno" class="form-control"  placeholder="Enter Client Number" value="<?= set_value('clientno'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['clientno'])) {echo $error['clientno']; } ?></div>
                              </div> -->
                              <div class="form-group col-sm-6">
                                 <label>Workd Order Satus</label>
                                 <select class="form-control" name="clientno" >
                                 <?php foreach($project as $row) : ?>
                                 
                                 <option>Complated</option>
                                <?php endforeach; ?>
                                 
                                 </select>
                              </div>
                           </div>
                            
                           <div class="row">
                           <div class="form-group col-sm-6">
                                 <label>Company Name</label>
                                 <input type="text" name="companyname" id="companyname" class="form-control" placeholder="Enter Company Name" value="<?= set_value('companyname'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['companyname'])) {echo $error['companyname']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Project Title</label>
                                 <input type="text" name="projecttitle" id="projecttitle"class="form-control" placeholder="Enter Owner Cell Number" value="<?= set_value('projecttitle'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['projecttitle'])) {echo $error['projecttitle']; } ?></div>
                                </div>
                              </div>
                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Workd Order Satus</label>
                                 <select class="form-control" name="workstatus" >
                                    <option>Complated</option>
                                    <option>In-compalte</option>
                                    <option>Postpond</option>
                                    <option>Assign</option>
                                    <option>In-Compalte</option>
                                    <option>Canceled</option>
                                    <option>Pending</option>
                                 </select>
                              </div>   
                              <div class="form-group col-sm-6">
                                 <label>Starting Date</label>
                                 <input type="date" name="sdate" id="sdate" class="form-control" placeholder="Enter Date of Starting" value="<?= set_value('sdate'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['sdate'])) {echo $error['sdate']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                              
                           <div class="form-group col-sm-6">
                                 <label>Complation Date</label>
                                 <input type="date" name="cdate" id="cdate" class="form-control" placeholder="Enter Date of Complation" value="<?= set_value('cdate'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['cdate'])) {echo $error['sdate']; } ?></div>
                              </div>
                           <div class="form-group col-sm-6">
                                 <label>Days complated</label>
                                 <input type="number" name="daycomplate" id="daycomplate" class="form-control" placeholder="Enter Days Complated" value="<?= set_value('daycomplate'); ?>">
                                 <div class="text-danger"><?php if(isset($error['daycomplate'])) {echo $error['daycomplate']; } ?></div>
                              </div>
                            </div>

                              <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Days Remaining</label>
                                 <input type="number" name="dayremaining" id="dayremaining" class="form-control" placeholder="Enter Days Remaining" value="<?= set_value('dayremaining'); ?>">
                                 <div class="text-danger"><?php if(isset($error['dayremaining'])) {echo $error['dayremaining']; } ?></div>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Project Status</label>
                                 <input type="email" name="projectstatus" id="projectstatus" class="form-control" placeholder="Project Status" value="<?= set_value('office_email'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['projectstatus'])) {echo $error['projectstatus']; } ?></div>
                              </div>
                           </div>

                           <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Code</label>
                                 <input type="text" name="code" id="code" class="form-control" placeholder="Enter Sub-Contactor Code" value="<?= set_value('code'); ?>">
                                 <div class="text-danger"><?php if(isset($error['code'])) {echo $error['code']; } ?></div>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Name</label>
                                 <input type="text" name="name" id="name" class="form-control" placeholder="Enter Sub-Contactor Name" value="<?= set_value('name'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['name'])) {echo $error['name']; } ?></div>
                              </div>
                           </div>


                           <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Project Expenses</label>
                                 <input type="text" name="projectexpens" id="projectexpens" class="form-control" placeholder="Enter Project Expenses" value="<?= set_value('projectexpens'); ?>">
                                 <div class="text-danger"><?php if(isset($error['projectexpens'])) {echo $error['projectexpens']; } ?></div>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Total Revenue</label>
                                 <input type="text" name="projectrevenue" id="projectrevenue" class="form-control" placeholder="Enter Total Revenue" value="<?= set_value('projectrevenue'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['projectrevenue'])) {echo $error['projectrevenue']; } ?></div>
                              </div>
                           </div>

                    
                           <div class="row">  
                           <div class="form-group col-sm-6">
                                 <label>Profit/Loss</label>
                                 <input type="text" id="profitloss"  name="profitloss"  class="form-control" placeholder="Enter Profit/Loss" value="<?= set_value('profitloss'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['profitloss'])) {echo $error['profitloss']; } ?></div>
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
         
         <?= $this->endSection() ?>