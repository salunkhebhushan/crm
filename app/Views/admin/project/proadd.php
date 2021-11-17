<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
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
                              <a class="btn btn-add " href="<?=BASE; ?>Project/pro_form"> 
                              <i class="fa fa-list"></i>  Project List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                      
                       </div>
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Project/pro_insert" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                            
                           <div class="row">
                               <!-- <div class="form-group col-sm-6">
                                 <label>Project No.</label>         
                                 <input type="text"  name="projectno" id="projectno" class="form-control"  placeholder="Enter project Number" value="<?= set_value('projectno'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['projectno'])) {echo $error['projectno']; } ?></div>
                              </div>
                             <div class="form-group col-sm-6">
                                 <label>Client No.</label>         
                                 <input type="text"  name="clientno" id="clientno" class="form-control"  placeholder="Enter Client Number" value="<?= set_value('clientno'); ?>"  >
                                 <div class="text-danger"><php if(isset($error['clientno'])) {echo $error['clientno']; } ?></div>
                              </div> -->
                              <div class="form-group col-sm-6">
                                 <label>Client Name</label>
                                 <select id="clientno" class="form-control"  name="clientno" >
                                    <option value="0">Please Select Name</option>
                                    <?php if(isset($getListOfClintDetails))foreach($getListOfClintDetails as $clintList):?>
                                 <option value="<?= $clintList->cnt_no; ?>"><?= $clintList->owner_name; ?></option>
                                 <?php endforeach;?>                       
                                 </select>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Company Name</label>
                                 <input type="text" name="companyname" id="companyname" class="form-control" placeholder="Enter Company Name" value="<?= set_value('companyname'); ?>" readonly>
                                 <div class="text-danger"><?php if(isset($error['companyname'])) {echo $error['companyname']; } ?></div>
                              </div>
                           </div>
                            
                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Project Title</label>
                                 <input type="text" name="projecttitle" id="projecttitl"class="form-control" placeholder="Enter Project Title" value="<?= set_value('projecttitle'); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['projecttitle'])) {echo $error['projecttitle']; } ?></div>
                                </div>
                                <div class="form-group col-sm-6">
                                 <label>Days complated</label>
                                 <input type="number" min="0" name="daycomplate" id="daycomplate" class="form-control" placeholder="Enter Days Complated" value="<?= set_value('daycomplate'); ?>" onchange="render()" >
                                 <div class="text-danger"><?php if(isset($error['daycomplate'])) {echo $error['daycomplate']; } ?></div>
                              </div>
                              </div>

                                 <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Starting Date</label>
                                 <input type="date" name="sdate" id="sdate" class="form-control" placeholder="Enter Date of Starting" value="<?= set_value('sdate'); ?>" onchange="render()" readonly>
                                 <div class="text-danger"><?php if(isset($error['sdate'])) {echo $error['sdate']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Complation Date</label>
                                 <input type="date" name="cdate" id="cdate" class="form-control" placeholder="Enter Date of Complation" value="<?= set_value('cdate'); ?>" readonly>
                                 <div class="text-danger"><?php if(isset($error['cdate'])) {echo $error['sdate']; } ?></div>
                              </div>
                           </div>

                           <div class="row">
                           <div class="form-group col-sm-6">
                                 <label>Workd Order Satus</label>
                                 <select class="form-control" name="workstatus" >
                                     
                                    <option>Complited</option>
                                    <option>On-hold</option>
                                    <option>Assign</option>
                                    <option>In-Complited</option>
                                    <option>Canceled</option>
                                    <option>Pending</option>
                                 </select>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Project Status</label>
                                 <input type="text" name="projectstatus" id="projectstatus" class="form-control" placeholder="Project Status" value="<?= set_value('office_email'); ?>" required>
                                 <div class="text-danger"><?php if(isset($error['projectstatus'])) {echo $error['projectstatus']; } ?></div>
                              </div>
                            </div>
                           <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Sub-Contactor Code</label>
                                  <select id="code" class="form-control"  name="code" >
                                    <option value="0">Please Sub Contractor</option>
                                    <?php if(isset($getListOfSubContractor))foreach($getListOfSubContractor as $subcontractorList):?>
                                 <option value="<?= $subcontractorList->sub_no; ?>"><?= "SA-".$subcontractorList->sub_no; ?></option>
                                 <?php endforeach;?>                       
                                 </select>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Owner Name</label>
                                 <input type="text" name="name" id="name" class="form-control" placeholder="Enter Sub-Contactor Name" value="<?= set_value('name'); ?>" readonly>
                                 <div class="text-danger"><?php if(isset($error['name'])) {echo $error['name']; } ?></div>
                              </div>
                           </div>


                           <div class="row"> 

                           <div class="form-group col-sm-6">
                                 <label>Total Revenue</label>
                                 <input type="number" name="projectrevenue" id="projectrevenue" class="form-control" placeholder="Enter Total Revenue" value="<?= set_value('projectrevenue'); ?>" onkeyup="sum()" required>
                                 <div class="text-danger"><?php if(isset($error['projectrevenue'])) {echo $error['projectrevenue']; } ?></div>
                              </div>

                              <div class="form-group col-sm-6">
                                 <label>Project Expenses</label>
                                 <input type="number" name="projectexpens" id="projectexpens" class="form-control" placeholder="Enter Project Expenses" value="<?= set_value('projectexpens'); ?>" onkeyup="sum()" required>
                                 <div class="text-danger"><?php if(isset($error['projectexpens'])) {echo $error['projectexpens']; } ?></div>
                              </div>
                            
                           
                           </div>

                    
                           <div class="row">  
                           <div class="form-group col-sm-6">
                                 <label>Profit/Loss</label>
                                 <input type="text" id="profitloss"  name="profitloss"  class="form-control" placeholder="Enter Profit/Loss" value="<?= set_value('profitloss'); ?>" readonly>
                                 <div class="text-danger"><?php if(isset($error['profitloss'])) {echo $error['profitloss']; } ?></div>
                              </div>
                         
                           </div>
                           
                      <!--      <div class="row">-->
                      <!--<div class="form-group col-sm-12">-->
                      <!--   <h3>Add Activities </h3>     -->
                      <!--     <div class="btn-group" id="buttonlist"> -->

                      <!--               <INPUT type="button" class="btn btn-add " value="Add Row" onclick="addRow('dataTable')" />-->
                        
                      <!--  <INPUT type="button" value="Delete Row" class="btn btn-danger " onclick="deleteRow('dataTable')" />-->
                      <!--  </div> -->
            
                      <!--  <br>-->
                                    
                      <!--              <table  class="table table-bordered table-hover">-->
                      <!--                     <tr class="info">-->
                      <!--                         <th style="width:16px;color:red;">Dlt</th>-->
                      <!--                          <th style="width:232px;">M1</th>-->
                      <!--                          <th style="width:234px;">Rate</th>-->
                      <!--                          <th style="width:234px;">Complate </th>-->
                      <!--                              <th style="width:234px;">Inprogress</th>-->
                      <!--                       </tr>-->
                      <!--             </table>-->
                      <!--               <table id="dataTable" class="table table-bordered table-hover">-->
                      <!--                    <thead>-->
                                              
                      <!--                    </thead>-->
                      <!--                    <tbody>-->
                                              
                      <!--                       <tr>-->
                                               
                      <!--                            <TD><INPUT type="checkbox"   name="chk"  /></TD>-->
                      <!--                          <td> <input type="text"  name="activity1[]" id="activity1" class="form-control" placeholder="Enter activity 1..."  value="<?= set_value('activity1'); ?>" ></td>-->
                      <!--                          <td> <input type="text"  name="activity2[]" id="activity2" class="form-control" placeholder="Enter activity 2..."  value="<?= set_value('activity2'); ?>" ></td>-->
                      <!--                          <td>-->
                      <!--                              <input type="text"  name="activity3[]" id="activity3" class="form-control" placeholder="Enter activity 3..."  value="<?= set_value('activity2'); ?>" >-->
                      <!--                          </td>-->
                      <!--                          <td>-->
                      <!--                              <input type="text"  name="activity4[]" id="activity4" class="form-control" placeholder="Enter activity 4..."  value="<?= set_value('activity4'); ?>" >-->
                      <!--                          </td>-->
                      <!--                       </tr>-->
                                            
                                            
                                            
                      <!--                    </tbody>-->
                      <!--                 </table>-->
                                   

                      <!--        </div>-->
                      <!--     </div>-->
                         
                                          
                           <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-success">
                    Save
                    </button> 
                      </form>
                    <br><br><br>
                       <!--<div class="panel-group " role="tablist" aria-multiselectable="true">-->
                       <!--       <div class="panel panel-default">-->
                       <!--          <div class="panel-heading" role="tab">-->
                                    
                       <!--             <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
                       <!--             <i class="more-less glyphicon glyphicon-plus"></i>-->
                                    
                       <!--            Add activities-->
                       <!--             </a>-->
                       <!--          </div>-->
                       <!--          <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">-->
                       <!--             <div class="table-responsive">-->
                       <!--                <table class="table table-bordered table-hover">-->
                       <!--                   <thead>-->
                       <!--                      <tr class="info">-->
                       <!--                         <th>Activity 1</th>-->
                       <!--                         <th>Activity 2</th>-->
                       <!--                         <th> Activity 3</th>-->
                       <!--                             <th>Activity 4</th>-->
                       <!--                      </tr>-->
                       <!--                   </thead>-->
                       <!--                   <tbody>-->
                       <!--                      <tr>-->
                       <!--                         <td> <input type="text"  name="activity1" id="activity1" class="form-control" placeholder="Enter activity 1..."  value="<?= set_value('activity1'); ?>" ></td>-->
                       <!--                         <td> <input type="text"  name="activity2" id="activity2" class="form-control" placeholder="Enter activity 2..."  value="<?= set_value('activity2'); ?>" ></td>-->
                       <!--                         <td>-->
                       <!--                             <input type="text"  name="activity3" id="activity3" class="form-control" placeholder="Enter activity 3..."  value="<?= set_value('activity2'); ?>" >-->
                       <!--                         </td>-->
                       <!--                         <td>-->
                       <!--                             <input type="text"  name="activity4" id="activity4" class="form-control" placeholder="Enter activity 4..."  value="<?= set_value('activity4'); ?>" >-->
                       <!--                         </td>-->
                       <!--                      </tr>-->
                                            
                                            
                                            
                       <!--                   </tbody>-->
                       <!--                </table>-->
                       <!--             </div>-->
                       <!--          </div>-->
                       <!--       </div>-->
                       <!--    </div>-->
                     
                      
                  </div>
            </div>         
                          
           
             
             
             
             
             
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
               <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
      <!-- <script src="<= BASE; ?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script> -->
      <!-- C:\xampp\htdocs\crm\public\assets\plugins\select2\js\ -->
      <!-- <link href="<= BASE; ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"  /> -->
   

      <!--end Select2 js-->

<script>
    $(document).ready(function () {
        $("#submit").click(function () {
            var selectedDropdown = $('#clientno');
            var selectedDropdown2 = $('#code');
            if (selectedDropdown.val() === '0') {
                alert("Please Select Clint");
                $('#clientno').focus();
             

                return false;
            }
            
             if (selectedDropdown2.val() === '0') {
                alert("Please Select Sub Contractor");
                $('#code').focus();
             

                return false;
            }
            else return;
        });
    });
</script>



<script >
   $(document).ready(function(){
      $('#clientno').change(function(){
         var reg_number = $(this).val();
    $.ajax
   ({
   type: "POST",
   url: "<?=BASE; ?>Project/ajaxcallGetClintID",
   data: {post_id:reg_number},
    dataType: "json",
   cache: false,
         success:function(response)
            { 
               
              $('#companyname').val(response[0].clint_company_name);
            //   $('#projecttitle').val(response[0].project_title);
            
       
         }
   });

   });
    });

</script>



<script >
   $(document).ready(function(){
      $('#code').change(function(){
         var reg_number = $(this).val();
    $.ajax
   ({
   type: "POST",
   url: "<?=BASE; ?>Project/ajaxGetSubContractCode",
   data: {post_id:reg_number},
    dataType: "json",
   cache: false,
         success:function(response)
            { 
               
              $('#name').val(response.sub_contractor_code[0].sub_owner_name);
             
            
       
         }
   });

   });
    });

</script>

<script>
   $(document).ready( function() {
    var now = new Date();
    var today = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate();
    $('#sdate').val(today);
    $('#cdate').val(today);
});
function render() {
   
  const estimate = parseInt(document.getElementById("daycomplate").value);
  
  const startDateStr = document.getElementById("sdate").value;
  if(startDateStr) {
      const startDate = moment(startDateStr);
      let endDate = startDate.add(estimate, 'day').format('YYYY-MM-DD');
      document.getElementById("cdate").value = endDate;
  }

}

function sum() {
            var txtSecondNo = document.getElementById('projectrevenue').value;
            var txtFirstNo = document.getElementById('projectexpens').value;
            var result = parseInt(txtSecondNo) - parseInt(txtFirstNo);
            if (!isNaN(result)) {
                document.getElementById('profitloss').value = result;
            }
        }
</script>

<!--script for multi colom add-->
<SCRIPT language="javascript">
		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[0].cells.length;

			for(var i=0; i<colCount; i++) {

				var newcell	= row.insertCell(i);

				newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				//alert(newcell.childNodes);
				switch(newcell.childNodes[0].type) {
					case "text":
							newcell.childNodes[0].value = "";
							break;
					case "checkbox":
							newcell.childNodes[0].checked = false;
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
				}
			}
		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					if(rowCount <= 1) {
						alert("Cannot delete all the rows.");
						break;
					}
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}

	</SCRIPT> 
         <?= $this->endSection() ?>
      

    