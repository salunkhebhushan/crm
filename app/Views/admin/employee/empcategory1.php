<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Employees Category</h1>
                  <small>Employees list</small>
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
                              <a class="btn btn-add " href="<?=BASE; ?>Empcategory/category_insert"> 
                              <i class="fa fa-list"></i> Employees Category List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Employees Category Details</b></h3>
                       </div>
                       <!--  id="uploadForm"-->
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Employee/emp_insert"  id="img-upload-form" name="formUploadFile" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                              
                      
                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Employee Category</label>
                                 <select class="form-control" name="category" id="category"  onchange="empcategoryFunction(this.value)"  >
                                 <option value="Staff" >Staff</option>
                                 <option value="Trademan">Trademan</option>
                                 <option value="Helper">Helper</option>
                                 </select>

                                 </select>
                              </div>
                           
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