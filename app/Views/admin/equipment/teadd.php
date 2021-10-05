<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-usd"></i>
               </div>
               <div class="header-title">
                  <h1>Plant and Equipments</h1>
                  <small>Plant and Equipments Details</small>
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
                                 <h4>Add </h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport"> 
                                 <a href="#" class="btn btn-add" data-toggle="modal" data-target="#addsal"><i class="fa fa-plus"></i> Add </a>  
                              </div>
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export  Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                               
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="<?=BASE; ?>assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>
                               
                              </ul>
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                      
                                       <th>PE ID</th>
                                       <th>PE Type</th>
                                       <th>PE Model</th>
                                       <th>Status</th>
                                       <th>Charge</th>
                                       <th>Maintinace</th>
                                       <th>Registration Expiry</th>

                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                             <?php foreach($pe as $row) : ?>
                         <tr>
                        <td><?= @$row['pe_id'] ?></td>
                          <td><?= @$row['pe_type'] ?></td>
                          <!-- <td><img  src="< "/uploads/".$row['pd_img'] ?>" height="100px" width="100px" alt="image"> </td> -->
                          <td><?= @$row['pe_model'] ?></td>
                          <td><?= @$row['status'] ?></td>
                          <td><?= @$row['per_day_charge'] ?></td>
                          <td><?= @$row['maintanence'] ?></td>
                          <td><?= @$row['registration_expiry'] ?></td>
                            
                          <td>
                          <button type="button" class="btn btn-add btn-xs" data-toggle="modal" data-target="#update"><i class="fa fa-pencil"></i></button>
                          <a href="<?=BASE; ?>Equipment/edit/<?= @$row['id'] ?>" class="btn btn-success" data-toggle="modal" data-target="#update"><i class="fa fa-edit"></i></a>
                          <a href="<?=BASE; ?>Equipment/delete/<?= @$row['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
               <!-- update Modal1 -->
               <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i>Edit Data </h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                              <form action="<?=BASE; ?>Equipment/update/<?php {{ echo @$row['id']; }}  ?>" method="POST" class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">PE ID</label>
                                          <input type="text" name="peid" id="peid" placeholder="Enter PE ID" class="form-control" value="<?= isset($row['pe_id']) ? $row['pe_id'] : ''; ?>">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">PE Type</label>
                                          <input type="text" name="petype" id="petype" placeholder="Enter PE Type" class="form-control" value="<?=  isset($row['pe_type']) ? $row['pe_type'] : ''; ?>">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">PE Model</label>
                                          <input type="text" name="pemodel" id="pemodel" placeholder="Enter PE Model" class="form-control" value="<?=  isset($row['pe_model']) ? $row['pe_model'] : ''; ?>">
                                       </div>

                                       <div class="col-md-6 form-group">
                                       <label class="control-label">Status</label>
                                        <select class="form-control" name="status" value="<?=  isset($row['status']) ? $row['status'] : ''; ?>" >
                                            <option value="Working">Working</option>
                                            <option value="Break Down">Break Down</option>
                                            <option value="Expired">Expired</option>
                                            <option value="Not in Use">Not in Use</option>
                                        </select>
                                       </div>

                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Per Day Charges</label>
                                          <input type="text" name="charge" id="charge" placeholder="Enter Per Day Charges" class="form-control" value="<?=  isset($row['per_day_charge']) ? $row['per_day_charge'] : ''; ?>">
                                       </div>
                          
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Maintinace</label>
                                          <input type="text" name="maintinace" id="maintinace" placeholder="Enter Maintinace" class="form-control" value="<?=  isset($row['maintanence']) ? $row['maintanence'] : ''; ?>">
                                       </div>
                                        
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Registration Expiry</label>
                                          <input type="text" name="expiry" id="expiry" placeholder="Enter Registration Expiry" class="form-control" value="<?=  isset($row['registration_expiry']) ? $row['registration_expiry'] : ''; ?>">
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Update</button>
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
               <!-- User Modal1 -->
               <div class="modal fade" id="addsal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Add Plant and Equipments</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form action="<?=BASE; ?>Equipment/te_insert" method="POST" class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">PE ID</label>
                                          <input type="text" name="peid" id="peid" placeholder="Enter PE ID" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">PE Type</label>
                                          <input type="text" name="petype" id="petype" placeholder="Enter PE Type" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">PE Model</label>
                                          <input type="text" name="pemodel" id="pemodel" placeholder="Enter PE Model" class="form-control">
                                       </div>

                                       <div class="col-md-6 form-group">
                                       <label class="control-label">Status</label>
                                        <select class="form-control" name="status" >
                                            <option>Working</option>
                                            <option>Break Down</option>
                                            <option>Expired</option>
                                            <option>Not in Use</option>
                                        </select>
                                       </div>

                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Per Day Charges</label>
                                          <input type="text" name="charge" id="charge" placeholder="Enter Per Day Charges" class="form-control">
                                       </div>
                          
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Maintinace</label>
                                          <input type="text" name="maintinace" id="maintinace" placeholder="Enter Maintinace" class="form-control">
                                       </div>
                                        
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Registration Expiry</label>
                                          <input type="text" name="expiry" id="expiry" placeholder="Enter Registration Expiry" class="form-control">
                                       </div>

                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Submit</button>
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
               <!-- delete salary Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Delete salary table</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete salary table</label>
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

         <?= $this->endSection() ?>