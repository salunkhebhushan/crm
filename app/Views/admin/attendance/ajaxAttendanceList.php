
                     <?php  $i=0;  foreach($ajaxGetEmpDetails as $listArray) : ?>
                  
                        <tr>
                        <td align ="center"><?= @$i+1; ?></td>
                          <td align ="center"><?= @$listArray[0]->first_name; ?></td>
                          <!--<td align ="center"><= @$listArray[0]->last_name; ?></td>-->
                          <td align ="center"><?= @$listArray[0]->designation; ?></td>
                          <td align ="center"><?= @$listArray[0]->emp_no; ?></td>
                          <td align ="center"><?= @$proCode[$i]; ?></td>
                          <td align ="center"><?=@$hours[$i];?></td> 
                          <td align ="center"><?=@$otAttend[$i];?></td> 
                        </tr>
                        <?php $i++; ?>
                     
                        <?php endforeach; ?>      
                   
     <tr>
       <td colspan="8" align ="right" ><B><span class="label label-danger m-r-15">Total Absent:- <?=@$absentCount;?></span></B></td>
       <tr>            