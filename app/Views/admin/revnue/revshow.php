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
                  <h1>Revnue  </h1>
                  <small> Revnue List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <h4> Revnue </h4>
                              <a href="#">
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group" style= >
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="<?= BASE; ?>Revenue/rven_add"> <i class="fa fa-plus"></i> Add Revnue
                                 </a>  
                              </div>
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                             
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="<?=BASE; ?>assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>
                            
                              </ul>
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive w-100">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Rev id </th>
                                       <th>Revenue Payment Date</th>
                                       <th>Payment Voucher No.</th>
                                       <th>Inovice No.</th>
                                       <th>Project Code</th>
                                       <th>Company/client name</th>
                                       <th>Project Name</th>
                                       
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php foreach($emp as $row) : ?>
                        <tr>

                        <td><?= $row->rev_id; ?> </td>                 						
                        <td><?= $row->rev_payment_date; ?></a> </td>
                        <td><?= $row->rev_voucher_no; ?></td>
                          <td><?= $row->rev_invoice_no; ?></td>
                          <!-- <td><img  src="< "/uploads/".$row['pd_img'] ?>" height="100px" width="100px" alt="image"> </td> -->
                          <td><?= "WA00".$row->project_no; ?></td>
                          <td><?= $row->owner_company_name; ?></td>
                          <td><?= $row->project_title; ?></td>
                          
                          <!-- <td><= $row->sub_contact_email; ?></td> -->
                          
                          <td>
                              
                          <a href="<?=BASE; ?>Revenue/edit/<?= $row->rev_id; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                          <a href="<?=BASE; ?>Revenue/delete/<?= $row->rev_id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
               <!-- customer Modal1 -->
               <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
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
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
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
            <?= $this->endSection() ?>