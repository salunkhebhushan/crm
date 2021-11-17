      <style>
          th, td {
               
                text-align:center;
                padding:5px
              
            }
        </style>

       <table  id="example1" class="table table-bordered table-striped table-hover" >
             <!-- <table id="example" class="display" style="width:100%"> -->
             <thead>
                                    <tr class="info">
                                    <th>Sr.No</th>
                                    <th>First Name</th>
                                       <!--<th>Last Name</th>-->
                                       <th>Designation</th>
                                       <th>EMPNo</th>
                                       <th></th>
                                       <?php foreach($row as $tableHead){?>
                                       <th>
                                         <?=@date('M:d',strtotime($tableHead->att_date));?> 
                                     </th>
                                     <?php }?>
                                     <th>Days</th>
									                  <!--<th>AB</th>-->
								                  	<th>Hrs</th>
									                  <th>OT</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php  $j= 1; foreach($att as $listArray) : ?>
                                   <tr>
                          <td align ="center"><?= @$j; ?></td>
                          <td align ="center"><?= @$listArray->first_name; ?></td>
                          <!--<td align ="center"><= @$listArray->last_name; ?></td>-->
                          <td align ="center"><?= @$listArray->designation; ?></td>
                          <td align ="center"><?= @$listArray->emp_no; ?></td>
                          <td>
                            <table >
                              <tr style="border-bottom:1pt solid black;">
                                <td>Hours</td>
                                <td></td>
                              </tr>
                              <tr style="border-bottom:1pt solid black;">
                                <td>OT</td>
                              </tr>
                              <tr style="border-bottom:1pt solid black;">
                                <td >ProCode</td>
                              </tr>
                            </table>
                          </td>
                   <!--dynamic Table -->
                   <?php  $length = count($row);
                    for ($i = 0; $i < $length; $i++) { ?>
                                 <td>
                                 <table >
                                 
                              <tr style="border-bottom:1pt;">
                              <?php if($hours[$i][$j-1]=='AB' || $hours[$i][$j-1]=='A.L' || $hours[$i][$j-1]=='S.L' || $hours[$i][$j-1]=='Fri'){?>
                                <td align ="center"><span class="label-danger label label-default pull-left"><?= @$hours[$i][$j-1]; ?></span></td>
                            <?php }else{?>
                              <td align ="center"><span class="label label-pill label-success"><?= @$hours[$i][$j-1]; ?></span></td>
                              <?php }?>
                              </tr>
                         
                              <tr style="border-bottom:1pt;">
                              <?php if($otAttend[$i][$j-1]== 0){?>
                              <td align ="center"><span class="label label-pill label-info"><?= @$otAttend[$i][$j-1]; ?></span></td>
                              <?php }else {?>
                                <td align ="center"><span class="label label-pill label-warning"><?= @$otAttend[$i][$j-1]; ?></span></td>
                              <?php }?>
                              </tr>
                              <tr style="border-bottom:1pt;">
                              <td align ="center"><span class="label label-pill label-primary"><?= @$proCode[$i][$j-1]; ?></span></td>
                              </tr>
                            </table>
                                 </td>
                                 <?php }?>
                              <!--dynamic Table -->
                         
                              <td align ="center"><?=@$length?></td>
                              <!--<td align ="center"><?=@$ab[$j-1]; ?></td>-->
                              <td align ="center"><?=@$hr[$j-1]; ?></td>
                              <td align ="center"><?=@$ot[$j-1]; ?></td>
                         
                                 </tr>
                       
                               
                            <?php $j++;  endforeach; ?>      
                                 </tbody>
                              </table>
                           