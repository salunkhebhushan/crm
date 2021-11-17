<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Revenue </h1>
                  <small>Edit Revenue list</small>
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
                              <a class="btn btn-add " href="<?=BASE; ?>Revenue/rev_form"> 
                              <i class="fa fa-list"></i>Edit Revenue List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Revenue Details</b></h3>
                       </div>
                     
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Revenue/update/<?php {{ echo @$row['rev_id']; }}  ?>" method="POST"  class="col-sm-12">
                            
                           
                           <input type="hidden" name="hiddenId" id="hiddenId" class="form-control" >                                 
                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Payment Date</label>         
                                 <input type="date" name="pdate" id="pdate" class="form-control" placeholder="Enter Date of Payment" value="<?= set_value('companyname', isset($row['rev_payment_date']) ? $row['rev_payment_date'] : ''); ?>" required >                                 
                              <div class='text-danger'><?php if(isset($error['pdate'])) {echo $error['pdate']; } ?></div>
                              </div>
                             
                              <div class="form-group col-sm-6">
                                 <label>Payment Voucher No</label>
                                 <input type="text"  name="paymentvoucherno" id="paymentvoucherno" class="form-control"  placeholder="Enter Payment Voucher Number" value="<?= set_value('paymentvoucherno', isset($row['rev_voucher_no']) ? $row['rev_voucher_no'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required  >
                                 <div class='text-danger'><?php if(isset($error['paymentvoucherno'])) {echo $error['paymentvoucherno']; } ?></div>
                              </div>
                           </div>


                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Invoice No.</label>         
                                 <input type="text"  name="invoceno" id="invoceno" class="form-control"  placeholder="Enter Invoice Number" value="<?= set_value('invoceno', isset($row['rev_invoice_no']) ? $row['rev_invoice_no'] : ''); ?>" >
                                 <div class="text-danger"></div>
                              </div>
                              <!-- <div class="form-group col-sm-6">    
                                 <label>Client No.</label>         
                                 <input type="text"  name="clientno" id="clientno" class="form-control"  placeholder="Enter Client Number" value="<?= set_value('clientno'); ?>"  >
                                 <div class="text-danger"><php if(isset($error['clientno'])) {echo $error['clientno']; } ?></div>
                              </div> -->
                              <div class="form-group col-sm-6">
                                 <label>Project Code</label>
                                 <select id="projectCode" class="form-control"  name="projectCode" value="<?= set_value('companyname', isset($row['owner_company_name']) ? $row['owner_company_name'] : ''); ?>" >
                                    <option value="0">Select Project Code</option>
                              <?php if(isset($projectCode)) foreach($projectCode as $codeList){?>
                                 <option value="<?php echo $codeList->project_no;?>"<?php if($codeList->project_no == $row['rev_project_code']) echo "selected"; ?>><?php echo "WA00".$codeList->project_no;?></option>
                                    <?php }?>                              
                                 </select>
                                 <div class='text-danger'><?php if(isset($error['projectCode'])) {echo $error['projectCode']; } ?></div>
                              </div>
                           </div>
                            
                           <div class="row">
                           <div class="form-group col-sm-6">
                                 <label>Company Name</label>
                                 
                                 <input type="text" name="companyname" id="companyname" class="form-control" placeholder="Enter Company Name" value="<?= set_value('companyname', isset($row['owner_company_name']) ? $row['owner_company_name'] : ''); ?>" readonly>
                                 
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Project Title</label>
                                 <input type="text" name="projecttitle" id="projecttitle"class="form-control" placeholder="Enter Project Title" value="<?= set_value('projecttitle', isset($row['project_title']) ? $row['project_title'] : ''); ?>"  readonly>
                                </div>
                              </div>
                             
                           <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Cash Amount </label>
                                 <input type="text" name="cashamt" id="cashamt" class="form-control" placeholder="Enter Cash Amount" value="<?= set_value('cashamt', isset($row['rev_cash_amt']) ? $row['rev_cash_amt'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required >
                                 <div class='text-danger'><?php if(isset($error['cashamt'])) {echo $error['cashamt']; } ?></div>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Cheque Amount</label>
                                 <input type="text" name="chequeamt" id="chequeamt" class="form-control" placeholder="Enter Cheque Amount" value="<?= set_value('chequeamt', isset($row['rev_cash_amt']) ? $row['rev_cash_amt'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                 <div class='text-danger'><?php if(isset($error['chequeamt'])) {echo $error['chequeamt']; } ?></div>
                              </div>
                           </div>



                                 <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Cheque status</label>
                                 <select class="form-control" name="chequestatus" value="<?= set_value('chequestatus', isset($row['rev_cheque_statu']) ? $row['rev_cheque_statu'] : ''); ?>" >
                                 <option>Selected</option>
                                    <option>Paid</option>
                                    <option>In-Compalite</option>
                                    <option>Canceled</option>
                                    <option>Pending</option>
                                 </select>
                              </div>   
                              <div class="form-group col-sm-6">
                                 <label>Cheque Due Date</label>
                                 <input type="date" name="cheqDueDate" id="cheqDueDate" class="form-control" placeholder="Enter Cheque Due Date" value="<?= set_value('cheqDueDate', isset($row['rev_cheque_due_date']) ? $row['rev_cheque_due_date'] : ''); ?>" >
                                 <div class="text-danger"></div>
                              </div>
                           </div>
                           <div class="row">
                              
                           <div class="form-group col-sm-6">
                                 <label>Invoice Amount</label>
                                 <input type="text" name="invamt" id="invamt" class="form-control" placeholder="Enter Invoice Amount" value="<?= set_value('invamt', isset($row['rev_invoice_amount']) ? $row['rev_invoice_amount'] : ''); ?>"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required >
                                 <div class='text-danger'><?php if(isset($error['invamt'])) {echo $error['invamt']; } ?></div>
                              </div>
                              


                           <div class="form-group col-sm-6">
                                 <label>Bank Name</label>
                                 <input type="text" name="bankName" id="bankName" class="form-control" placeholder="Enter Days Complated" value="<?= set_value('bankName', isset($row['rev_bank_name']) ? $row['rev_bank_name'] : ''); ?>" required >
                                 <div class='text-danger'><?php if(isset($error['bankName'])) {echo $error['bankName']; } ?></div>
                              </div>
                            </div>

                              <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Total  Paid</label>
                                 <input type="text" name="totalpaid" id="totalpaid" class="form-control" placeholder="Total Paid Amount" value="<?= set_value('totalpaid', isset($row['rev_total_paid']) ? $row['rev_total_paid'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                 <div class='text-danger'><?php if(isset($error['totalpaid'])) {echo $error['totalpaid']; } ?></div>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Balance Amount</label>
                                 <input type="text" name="balanceAmt" id="balanceAmt" class="form-control" placeholder="Enter Balance Amount" value="<?= set_value('balanceAmt', isset($row['rev_balance_amount']) ? $row['rev_balance_amount'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
                                 <div class='text-danger'><?php if(isset($error['balanceAmt'])) {echo $error['balanceAmt']; } ?></div>
                           </div>

                           <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Sadqa</label>
                                 <input type="text" name="sadqa" id="sadqa" class="form-control" placeholder="Enter sadqa" value="<?= set_value('sadqa', isset($row['rev_sadqa']) ? $row['rev_sadqa'] : ''); ?>">
                                 <div class="text-danger"></div>
                              </div>
                              	



                              <div class="form-group col-sm-6">
                                 <label>Cheque Status</label>
                                 <input type="text" name="chequeStatus" id="chequeStatus" class="form-control" placeholder="Enter Cheque Status" value="<?= set_value('chequeStatus', isset($row['rev_cheque_status']) ? $row['rev_cheque_status'] : ''); ?>" required >
                                 <div class="text-danger"></div>
                              </div>
                           </div>



                           <div class="row"> 
                          
                           <div class="form-group col-sm-6">
                                 <label>Cheque No</label>
                                 <input type="text" name="chequnumb" id="chequnumb" class="form-control" placeholder="Enter Cheque No" value="<?= set_value('sadqa', isset($row['rev_cheque_no']) ? $row['rev_cheque_no'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                 <div class="text-danger"></div>
                              </div>

                              <div class="form-group col-sm-6">
                                 <label>Remarks</label>
                                 <input type="text" name="remark" id="remark" class="form-control" placeholder="Enter Remark Expenses" value="<?= set_value('remark', isset($row['rev_remarks']) ? $row['rev_remarks'] : ''); ?>" >
                                 <div class="text-danger"></div>
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

               <!-- Select2 js-->
               <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <!-- <script src="<= BASE; ?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script> -->
      <!-- C:\xampp\htdocs\crm\public\assets\plugins\select2\js\ -->
      <!-- <link href="<= BASE; ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"  /> -->
   

      <!--end Select2 js-->

      <script >
   $(document).ready(function(){
      $('#projectCode').change(function(){
        
         var reg_number = $(this).val();
    
    $.ajax
   ({
   type: "POST",
   url: "<?=BASE; ?>Revenue/selectedProjectCode",
   data: {post_id:reg_number},
    dataType: "json",
   cache: false,
         success:function(response)
            { 
               
              $('#companyname').val(response.ajaxClientDetails[0].owner_company_name);
              $('#projecttitle').val(response.ajaxClientDetails[0].project_title);  
              $('#hiddenId').val(response.ajaxClientDetails[0].cnt_id);    
       
         }
   });

   });
    });

</script>
      <script>


   var li=["c1","c2","c5","c3","c4"];

  $('#clientno').select2({ 
      data:li
 
   }); 
</script>




<!-- <script>

  $('#clientno').select2({
 width: 'resolve',
//  placeholder: 'Type Mill Ac Name',
 ajax: {
     url:"<?=BASE; ?>Project/search_client",
     type:"post",
     allowClear: true,
     dataType:'json',
     delay: 250,
     
     data: function(params) {
         return {
             searchTerm: params.term // search term
         };
     },
     
     processResults: function(response) {
         return {
             results: response.data
         };
     },
     cache: true
 }
});

</script> -->

         <?= $this->endSection() ?>
      

    