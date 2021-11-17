<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<!-- Main content -->
       <!-- Main content -->
       <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Employees</h1>
                  <small>Employees List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Employees</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group flex">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="<?= BASE; ?>Employee/emp_add"> <i class="fa fa-plus"></i> Add Employees
                                 </a>  
                              </div>
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                                 
                                 <li class="divider"></li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                    <img src="<?=BASE; ?>assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                 </li>
                                 
                              </ul>
                              <div class=" form-group col-md-6  pull-right">
                            
                           
                                 <span class="label label-pill label-danger m-r-15">Document Expire</span>
                            
                              </div>
                           </div>
                           <div class="panel-body">
                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs">
                              <li class="active"><a href="#tab1" data-toggle="tab" style="color:green;">Active</a></li>
                              <li><a href="#tab2" data-toggle="tab" style="color:red;">In-Active</a></li>
                           </ul>
                        <div align="right"><input id="myInput" type="text" placeholder="Search.."></div><br>                              

                           <!--Active Record -->
                           <div class="tab-content">
                              <div class="tab-pane fade in active" id="tab1">
                                 <div class="panel-body">
                                    <div class="table-responsive">
                                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>EMP No</th>
                                       <th>First Name</th>
                                       <th>Designation</th>
                                       <th>Category</th>
                                       <th>Mobile No</th>
                                       <th>Passport Expire</th>
                                       <th>Emirate Expire</th>
                                       <th>VISA Expire</th>
                                       <th>Driving Expire</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody id="myTable">
                                 <?php foreach($emp as $row) : ?>
                        <tr>
                         <td><?= $row['emp_no'] ?></td>
                          <td><a href="<?=BASE; ?>Employees/emp_profile/<?= $row['emp_id'] ?>" class="btn btn-"><?= $row['first_name'] ?></a></td>
                          <!-- <td><img  src="< "/uploads/".$row['pd_img'] ?>" height="100px" width="100px" alt="image"> </td> -->
                         
                        
                          <td><?= $row['designation'] ?></td>
                          <td><?= $row['category_name'] ?></td>
                          <td><?= $row['mobile'] ?></td>

                          <?php $now = date("Y-m-d"); if($row['pexpire_date']>$now) {?>
                           <td><?= $row['pexpire_date'] ?></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['eexpire_date']>$now) {?>
                              <td><?= $row['eexpire_date'] ?></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['vexpire_date']>$now) {?>
                              <td><?= $row['vexpire_date'] ?></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['dedate']>$now) {?>
                              <td><?= $row['dedate'] ?></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>
                         
                          <td>
                              <a href="<?=BASE; ?>Employees/delete/<?= $row['emp_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          <a href="<?=BASE; ?>Employees/edit/<?= $row['emp_id'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        </td>
                        </tr>
                        <?php endforeach; ?>

                                 </tbody>
                              </table>
                                    </div>
                                 </div>
                              </div>
                              <!--In active Record -->
                              <div class="tab-pane fade" id="tab2">
                                 <div class="panel-body">
                                    <div class="table-responsive">
                                    <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                          <th>EMP No</th>
                                       <th>First Name</th>
                                       <th>Designation</th>
                                       <th>Category</th>
                                       <th>Mobile No</th>
                                       <th>Passport Expire</th>
                                       <th>Emirate Expire</th>
                                       <th>VISA Expire</th>
                                       <th>Driving Expire</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach($inactive as $row) : ?>
                           <tr>
                                <td><?= "EMP-".$row['emp_no'] ?></td>
                          <td><a href="<?=BASE; ?>Employees/emp_profile/<?= $row['emp_id'] ?>" class="btn btn-"><?= $row['first_name'] ?></a></td>
                          <!-- <td><img  src="< "/uploads/".$row['pd_img'] ?>" height="100px" width="100px" alt="image"> </td> -->
                       
                         
                          <td><?= $row['designation'] ?></td>
                          <td><?= $row['category_name'] ?></td>
                          <td><?= $row['mobile'] ?></td>
                          
                          <?php $now = date("Y-m-d"); if($row['pexpire_date']>$now) {?>
                           <td><?= $row['pexpire_date'] ?></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['eexpire_date']>$now) {?>
                              <td><?= $row['eexpire_date'] ?></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['vexpire_date']>$now) {?>
                              <td><?= $row['vexpire_date'] ?></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>

                           <?php $now = date("Y-m-d"); if($row['dedate']>$now) {?>
                              <td><?= $row['dedate'] ?></td>
                          <?php }else {?>
                           <td><span class="label label-pill label-danger m-r-15">Expire</span></td>
                           <?php }?>
                         
                          <td>
                              <a href="<?=BASE; ?>Employees/delete/<?= $row['emp_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                          <a href="<?=BASE; ?>Employees/edit/<?= $row['emp_id'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
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
                     </div>
                  </div>
               </div>
               <!-- customer Modal1 -->
               <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Customer Name:</label>
                                          <input type="text" placeholder="Customer Name" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Email:</label>
                                          <input type="email" placeholder="Email" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Mobile</label>
                                          <input type="number" placeholder="Mobile" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Address</label><br>
                                          <textarea name="address" rows="3"></textarea>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">type</label>
                                          <input type="text" placeholder="type" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Delete Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete Customer</label>
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">NO</button>
                                             <button type="submit" class="btn btn-add btn-sm">YES</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
         
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
            <?= $this->endSection() ?>