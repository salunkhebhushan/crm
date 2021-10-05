<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

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
                                            <option>Working</option>
                                            <option>Break Down</option>
                                            <option>Expired</option>
                                            <option>Not in Use</option>
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
         <?= $this->endSection() ?>
