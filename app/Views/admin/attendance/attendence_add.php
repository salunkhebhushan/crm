<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-suitcase"></i>
               </div>
               <div class="header-title">
                   <h1>Employees Attendance </h1>
                  <small>Employees Attendance</small>
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
                               <i class="fa fa-list"></i>  Employees Attendance  </a>  
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                   <form action="<?=BASE; ?>Attendence/attendence_insert" method="POST"  enctype="multipart/form-data" class="col-sm-12">
					 <div class="row">
                        <div class="form-group col-sm-6">
                          <label>Attendance Date </label>
                                 <input type="date"  name="attendence_date" id="attendence_date" class="form-control"   required >
                        </div>
                     </div>
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                   <thead>
									<tr class="info">
									<th>Sr.No</th>
									<th>First Name</th>
									<!--<th>Last Name</th>-->
									<th>Designation</th>
									<th>EMPNo</th>
									<th>Project Code</th>
									<th>Hours</th>
									<th>O.T</th>
									</tr>
									</thead>
                                <tbody>
                                 <?php $i=1; foreach($att as $row) { ?>
                        <tr>
                        <input type="hidden"  name="att_emp_id[]" id="att_emp_id[]" class=""  value="<?= $row->emp_no ?>"  readonly >
						 <td><?= @$i; ?></td>
                          <td><?= @$row->first_name; ?></td>
                          <!-- <td><img  src="< "/uploads/".$row['pd_img'] ?>" height="100px" width="100px" alt="image"> </td> -->
                            
                          <!--<td><= @$row->last_name; ?></td>-->
                          <td><?= @$row->designation; ?></td>
                          <td><?= "EMP-".@$row->emp_no; ?></td>
                          <td>  
                                 <select id="att_projectCode" class=""  name="att_projectCode[]" required >
                                    <option value="0">Project Code</option>
                              <?php if(isset($att1)) foreach($att1 as $row){?>
                                 <option value="<?php echo $row->project_no;?>"><?php echo "WA00".$row->project_no;?></option>
                                    <?php }?>                              
                                 </select>
                        </td>          
                          <td> 
                                        <select  name="hours[]" id="hours<?= @$i;?>" onchange="showfield(this.value,<?= @$i;?>)" required>
                                            <option value="8">8</option>
                                            <option value="4">4</option>
                                            <option value="AB">AB</option>
                                            <option value="Fri">Fri</option>
                                            <option value="S.L">S.L</option>
                                            <option value="A.L"> A.L</option>
                                        </select>
                                     
                                    </td>
                             <td> <input type="text" name="ot[]" id="ot<?= @$i;?>" class=""   size="2" value="0" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  > </td>   

                        </tr>
                           <?php $i++; } ?>


                                 </tbody>
                              </table>
                           </div>
						     <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-success">
                    Save
                    </button> 
                  </div>
						   </form>
                        </div>
                     </div>
                  </div>
				   
               </div>
			      
               <!-- items Modal1 -->
               <div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-plus m-r-5"></i> Add new Item</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                
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
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->

<!-- /.content -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
               <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<!-- dispaly -->
<script>
    $(document).ready(function () {
        $("#submit").click(function () {
         
            var selectedDropdown = $('#att_projectCode');
            if (selectedDropdown.val() === '0') {
                alert("Please Project Code");
                $('#att_projectCode').focus();
             

                return false;
            }
            else return;
        });
    });
</script>


<script>
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
  
    $('#attendence_date').attr('max', maxDate);
});
</script>


<script type="text/javascript" >
  function showfield(val,id){
   // alert(id);
    if(val =='AB' || val =='Fri' || val =='S.L' || val =='A.L' || val =='4')
	{    
	
      document.getElementById('ot'+id).disabled  = true;
      
      document.getElementById('ot'+id).defaultValue = "0";

		
	}else
   {
      document.getElementById('ot'+id).disabled  = false;
   }
   
  }
  </script>
 


<?= $this->endSection() ?>