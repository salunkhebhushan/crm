<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Employees Category </h1>
                  <small>Employees Category</small>
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
                              <i class="fa fa-list"></i>  Category  </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Employees Category</b></h3>
                       </div>
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Empcategory1/category_insert" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                              
                            <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Add Category </label>         
                                 <input type="text"  name="category" id="category" class="form-control"  placeholder="Enter Employees Category"   >
                              </div>
                            
                            
                           </div>
        
                         

                           <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-success">
                    Save
                    </button> 
                  </div>
            </div>         
                          
             </form>


<br> <br>
<br>
<br>

             <div class="table-responsive w-100">
             <div class="col-md-6">

             <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Category Id </th>
                                       <th>Category Name</th>
                                    
                                       
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach($empcategory as $row) : ?>
                        <tr>
                        <td><?= @$row['ctg_id'] ?></td>
                          <td><?= @$row['category_name'] ?></td>
                          <!-- <td><img  src="< "/uploads/".$row['pd_img'] ?>" height="100px" width="100px" alt="image"> </td> -->
                            
                          <td>
                          <a href="<?=BASE; ?>Empcategory1/delete/<?= @$row['ctg_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                        </tr>
                        <?php endforeach; ?>

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

<!-- dispaly -->



         
         <?= $this->endSection() ?>