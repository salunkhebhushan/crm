<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Sub Contractor Activities</h1>
                  <small>Sub Contractor Activities list</small>
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
                              <a class="btn btn-add " href="<?= BASE; ?>/sub_form"> 
                              <i class="fa fa-list"></i>Sub Contractor Activities List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Sub Contractor Activities Details</b></h3>
                       </div>
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Subconractor/sub_insert" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                              
                            <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Roba</label>         
                                 <input type="text"  name="roba" id="roba" class="form-control"  placeholder="Enter Roba Details here.." value="<?= set_value('roba'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['roba'])) {echo $error['roba']; } ?></div>
                              </div>
                            
                              <!-- <div class="form-group col-sm-6">
                                 <label>Company Name</label>
                                 <select class="form-control" name="companyname" id="companyname"    >
                                 <php foreach($sub_details as $sub) : ?>
                                 <option value="<= $sub['cnt_no'] ?>" ><= $sub['owner_company_name'] ?></option>
                            
                                  <php endforeach; ?>     
                               

                                 </select> 
                              </div>-->
                              <div class="form-group col-sm-6">
                                 <label>Tile </label>
                                 <input type="text" name="tile" id="tile"class="form-control" placeholder="Enter Tile Details here.." value="<?= set_value('tile'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['tile'])) {echo $error['tile']; } ?></div>

                              </div>
    
                           </div>


                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Marble  </label>
                                 <input type="text" name="marble" id="marble"class="form-control" placeholder="Enter Marble Details here.." value="<?= set_value('marble'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['marble'])) {echo $error['marble']; } ?></div>

                              </div>
    
                              <div class="form-group col-sm-6">
                                 <label>Interlock</label>
                                 <input type="text" name="interlock" id="interlock"class="form-control" placeholder="Enter Interlock Details here.." value="<?= set_value('cellno'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['interlock'])) {echo $error['interlock']; } ?></div>
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