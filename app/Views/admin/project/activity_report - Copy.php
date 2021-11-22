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
         <h1>Project Activity Report</h1>
         <small>Activity Report</small>
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
                        <h4> Activity Report </h4>
                     </a>
                  </div>
               </div>
               <div class="panel-body">
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="table-responsive w-100">
                     <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                        <thead>
                           <tr class="info">
                              <th>Project No </th>
                              <th>Employee Id</th>
                              <th>Activity</th>
                              <?php foreach ($getDailyActivity as $getDailyActivityData) :  ?>
                                 <th><?= @date('M:d', strtotime($getDailyActivityData[0]['daily_activity_date'])); ?></th>
                              <?php endforeach; ?>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $j = 0;
                           foreach ($getActivity as $getActivityData) : ?>
                              <tr>
                                 <td><?= 'W000' . $projectCode ?></td>
                                 <td><?= 'WA00' . $getActivityData['act_emp_no'] ?></td>
                                 <td><?= @$getActivityData['activity_name'] ?></td>
                                 <?php   $length = count($getDailyActivity);  for ($i = 0; $i < $length; $i++) {
                                    
                                   if($getActivityData['pro_atv_id'] == $getDailyActivity[$j][0]['daily_activity_id']){ 
                                    //echo '<pre>'; print_r($getDailyActivity[$j][0]['daily_activity_name']);
                                   // $input = array_map("unserialize", array_unique(array_map("serialize", $getDailyActivity[$j][0]['daily_activity_name'])));
                                 //   echo '<pre>';print_r($input);
                                  ?>
                                    <td>
                                    <table>
                                       <tr><th><td><?=@$getDailyActivity[$j][0]['daily_activity_meter'];?></td><th></tr>
                                    </table>
                                 </td>
                                 <?php }}?>
                              </tr>
                           <?php $j++;
                           endforeach; ?>
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
<?= $this->endSection() ?>