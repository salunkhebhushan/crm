<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>
<style>
   .custom-file-upload {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  margin-top: 26px;
}
   </style>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Employees</h1>
                  <small>Employees </small>
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
                              <a class="btn btn-add " href="clist.html"> 
                              <i class="fa fa-list"></i>  Employees List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Edit Employees Persnal Details</b></h3>
                       </div>
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Employee/update/<?php {{ echo @$row['emp_id']; }}  ?>" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                           
                            <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>First Name</label>         
                                 <input type="text"  name="firstname" id="firstname" class="form-control"  placeholder="Enter First Name" value="<?= set_value('firstname', isset($row['first_name']) ? $row['first_name'] : ''); ?>" Required >
                                 <div class="text-danger"><?php if(isset($error['firstname'])) {echo $error['firstname']; } ?></div>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Last Name</label>
                                 <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter last Name" value="<?= set_value('firstname', isset($row['last_name']) ? $row['last_name'] : ''); ?>" Required >
                                 <div class="text-danger"><?php if(isset($error['lastname'])) {echo $error['lastname']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                              
                                  <div class="form-group col-sm-6">
                                 <label>Employee Category</label>
                                 <select class="form-control" name="category" id="category"    >
                                 <?php foreach($categoryList as $cat) { ?>
                                 <option value="<?php echo @$cat['category_name'] ?>"  ><?php echo @$cat['category_name'] ?></option>
                            <!-- <php if($cat['category_name'] == $row['category']) echo "selected"; ?> -->
                                  <?php } ?>     
                                 </select>
                                 
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Designation</label>
                                 <input type="text" name="designation" id="designation"class="form-control" placeholder="Enter designation" value="<?= set_value('designation', isset($row['designation']) ? $row['designation'] : ''); ?>"  >
                                 <div class="text-danger"><?php if(isset($error['designation'])) {echo $error['designation']; } ?></div>
                                </div>
                              </div>
                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Email</label>
                                 <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?= set_value('email', isset($row['email']) ? $row['email'] : ''); ?>" >
                                 <div class="text-danger"><?php if(isset($error['email'])) {echo $error['email']; } ?></div>
                            
                              </div>   
                              <div class="form-group col-sm-6">
                                 <label>Mobile</label>
                                 <input type="text"  name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile"  value="<?= set_value('mobile', isset($row['mobile']) ? $row['mobile'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                                 <div class="text-danger"><?php if(isset($error['mobile'])) {echo $error['mobile']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                           
                             <div class="form-group col-sm-6">
                                 <label>Employees No.</label>
                                   <input type="hidden"  name="employeeno" id="employeeno" class="form-control" placeholder="Enter employee Number" value="<?= set_value('employeeno', isset($row['emp_no']) ? $row['emp_no'] : ''); ?>" readonly>
                                 <input type="text"  class="form-control" placeholder="Enter employee Number" value="EMP-<?= set_value('employeeno', isset($row['emp_no']) ? $row['emp_no'] : ''); ?>" readonly>
                                 <div class="text-danger"><?php if(isset($error['employeeno'])) {echo $error['employeeno']; } ?></div>

                              </div>

                               
                              <div class="form-group col-sm-6">
                                 <label>Employee Work Status</label>
                                 <select class="form-control" name="wrkstatus" id="wrkstatus" value="<?= set_value('wrkstatus', isset($row['wrkstatus']) ? $row['wrkstatus'] : ''); ?>" >
                                 <option value="active">Active</option>
                                 <option value="inactive">Terminate</option>
                                 <option value="inactive">Suspend</option>
                                 <option value="inactive">Annual Leaves</option>
                                 </select>
                                
                                 </select>
                              </div>
                              
                               
                              
                            </div>
                              
                              
                              <div style="margin-left:25px";>
                        <h3><b>Employees Profile</b></h3>
                       </div>
                       <br>
                        
                              <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Date of Joining</label>
                                 <input type="date" name="doj" id="doj" class="form-control" placeholder="Enter Date of Joining" value="<?= set_value('doj', isset($row['doj']) ? $row['doj'] : ''); ?>" >
                                 <div class="text-danger"><?php if(isset($error['doj'])) {echo $error['doj']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Father Name</label>
                                 <input type="text" name="father" id="father" class="form-control" placeholder="Enter Father Name" value="<?= set_value('father', isset($row['father_name']) ? $row['father_name'] : ''); ?>" >
                                 <div class="text-danger"><?php if(isset($error['father'])) {echo $error['father']; } ?></div>
                              </div>
                              </div>

                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Nationality</label>
                            <!-- <php if($cat['category_name'] == $row['category']) echo "selected"; ?> -->
                                 <select class="form-control" name="nationality" id="nationality" value="<?= set_value('nationality', isset($row['nationality']) ? $row['nationality'] : ''); ?>"  >
                                 <option value="Afghanistan">Afghanistan</option>
                              <option value="Albania">Albania</option>
                              <option value="Algeria" >Algeria</option>
                              <option value="American Samoa" >American Samoa</option>
                              <option value="Andorra">Andorra</option>
                              <option value="Angola">Angola</option>
                              <option value="Anguilla">Anguilla</option>
                              <option value="Antartica">Antarctica</option>
                              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                              <option value="Argentina">Argentina</option>
                              <option value="Armenia">Armenia</option>
                              <option value="Aruba">Aruba</option>
                              <option value="Australia">Australia</option>
                              <option value="Austria">Austria</option>
                              <option value="Azerbaijan">Azerbaijan</option>
                              <option value="Bahamas">Bahamas</option>
                              <option value="Bahrain">Bahrain</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Barbados">Barbados</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Belgium">Belgium</option>
                              <option value="Belize">Belize</option>
                              <option value="Benin">Benin</option>
                              <option value="Bermuda">Bermuda</option>
                              <option value="Bhutan">Bhutan</option>
                              <option value="Bolivia">Bolivia</option>
                              <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Bouvet Island">Bouvet Island</option>
                              <option value="Brazil">Brazil</option>
                              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                              <option value="Brunei Darussalam">Brunei Darussalam</option>
                              <option value="Bulgaria">Bulgaria</option>
                              <option value="Burkina Faso">Burkina Faso</option>
                              <option value="Burundi">Burundi</option>
                              <option value="Cambodia">Cambodia</option>
                              <option value="Cameroon">Cameroon</option>
                              <option value="Canada">Canada</option>
                              <option value="Cape Verde">Cape Verde</option>
                              <option value="Cayman Islands">Cayman Islands</option>
                              <option value="Central African Republic">Central African Republic</option>
                              <option value="Chad">Chad</option>
                              <option value="Chile">Chile</option>
                              <option value="China">China</option>
                              <option value="Christmas Island">Christmas Island</option>
                              <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                              <option value="Colombia">Colombia</option>
                              <option value="Comoros">Comoros</option>
                              <option value="Congo">Congo</option>
                              <option value="Congo">Congo, the Democratic Republic of the</option>
                              <option value="Cook Islands">Cook Islands</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                              <option value="Croatia">Croatia (Hrvatska)</option>
                              <option value="Cuba">Cuba</option>
                              <option value="Cyprus">Cyprus</option>
                              <option value="Czech Republic">Czech Republic</option>
                              <option value="Denmark">Denmark</option>
                              <option value="Djibouti">Djibouti</option>
                              <option value="Dominica">Dominica</option>
                              <option value="Dominican Republic">Dominican Republic</option>
                              <option value="East Timor">East Timor</option>
                              <option value="Ecuador">Ecuador</option>
                              <option value="Egypt">Egypt</option>
                              <option value="El Salvador">El Salvador</option>
                              <option value="Equatorial Guinea">Equatorial Guinea</option>
                              <option value="Eritrea">Eritrea</option>
                              <option value="Estonia">Estonia</option>
                              <option value="Ethiopia">Ethiopia</option>
                              <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                              <option value="Faroe Islands">Faroe Islands</option>
                              <option value="Fiji">Fiji</option>
                              <option value="Finland">Finland</option>
                              <option value="France">France</option>
                              <option value="France Metropolitan">France, Metropolitan</option>
                              <option value="French Guiana">French Guiana</option>
                              <option value="French Polynesia">French Polynesia</option>
                              <option value="French Southern Territories">French Southern Territories</option>
                              <option value="Gabon">Gabon</option>
                              <option value="Gambia">Gambia</option>
                              <option value="Georgia">Georgia</option>
                              <option value="Germany">Germany</option>
                              <option value="Ghana">Ghana</option>
                              <option value="Gibraltar">Gibraltar</option>
                              <option value="Greece">Greece</option>
                              <option value="Greenland">Greenland</option>
                              <option value="Grenada">Grenada</option>
                              <option value="Guadeloupe">Guadeloupe</option>
                              <option value="Guam">Guam</option>
                              <option value="Guatemala">Guatemala</option>
                              <option value="Guinea">Guinea</option>
                              <option value="Guinea-Bissau">Guinea-Bissau</option>
                              <option value="Guyana">Guyana</option>
                              <option value="Haiti">Haiti</option>
                              <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                              <option value="Holy See">Holy See (Vatican City State)</option>
                              <option value="Honduras">Honduras</option>
                              <option value="Hong Kong">Hong Kong</option>
                              <option value="Hungary">Hungary</option>
                              <option value="Iceland">Iceland</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Iran">Iran (Islamic Republic of)</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Ireland">Ireland</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Jamaica">Jamaica</option>
                              <option value="Japan">Japan</option>
                              <option value="Jordan">Jordan</option>
                              <option value="Kazakhstan">Kazakhstan</option>
                              <option value="Kenya">Kenya</option>
                              <option value="Kiribati">Kiribati</option>
                              <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                              <option value="Korea">Korea, Republic of</option>
                              <option value="Kuwait">Kuwait</option>
                              <option value="Kyrgyzstan">Kyrgyzstan</option>
                              <option value="Lao">Lao People's Democratic Republic</option>
                              <option value="Latvia">Latvia</option>
                              <option value="Lebanon" >Lebanon</option>
                              <option value="Lesotho">Lesotho</option>
                              <option value="Liberia">Liberia</option>
                              <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                              <option value="Liechtenstein">Liechtenstein</option>
                              <option value="Lithuania">Lithuania</option>
                              <option value="Luxembourg">Luxembourg</option>
                              <option value="Macau">Macau</option>
                              <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                              <option value="Madagascar">Madagascar</option>
                              <option value="Malawi">Malawi</option>
                              <option value="Malaysia">Malaysia</option>
                              <option value="Maldives">Maldives</option>
                              <option value="Mali">Mali</option>
                              <option value="Malta">Malta</option>
                              <option value="Marshall Islands">Marshall Islands</option>
                              <option value="Martinique">Martinique</option>
                              <option value="Mauritania">Mauritania</option>
                              <option value="Mauritius">Mauritius</option>
                              <option value="Mayotte">Mayotte</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Micronesia">Micronesia, Federated States of</option>
                              <option value="Moldova">Moldova, Republic of</option>
                              <option value="Monaco">Monaco</option>
                              <option value="Mongolia">Mongolia</option>
                              <option value="Montserrat">Montserrat</option>
                              <option value="Morocco">Morocco</option>
                              <option value="Mozambique">Mozambique</option>
                              <option value="Myanmar">Myanmar</option>
                              <option value="Namibia">Namibia</option>
                              <option value="Nauru">Nauru</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Netherlands">Netherlands</option>
                              <option value="Netherlands Antilles">Netherlands Antilles</option>
                              <option value="New Caledonia">New Caledonia</option>
                              <option value="New Zealand">New Zealand</option>
                              <option value="Nicaragua">Nicaragua</option>
                              <option value="Niger">Niger</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Niue">Niue</option>
                              <option value="Norfolk Island">Norfolk Island</option>
                              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                              <option value="Norway">Norway</option>
                              <option value="Oman">Oman</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Palau">Palau</option>
                              <option value="Panama">Panama</option>
                              <option value="Papua New Guinea">Papua New Guinea</option>
                              <option value="Paraguay">Paraguay</option>
                              <option value="Peru">Peru</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Pitcairn">Pitcairn</option>
                              <option value="Poland">Poland</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Puerto Rico">Puerto Rico</option>
                              <option value="Qatar">Qatar</option>
                              <option value="Reunion">Reunion</option>
                              <option value="Romania">Romania</option>
                              <option value="Russia">Russian Federation</option>
                              <option value="Rwanda">Rwanda</option>
                              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                              <option value="Saint LUCIA">Saint LUCIA</option>
                              <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                              <option value="Samoa">Samoa</option>
                              <option value="San Marino">San Marino</option>
                              <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                              <option value="Saudi Arabia">Saudi Arabia</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Seychelles">Seychelles</option>
                              <option value="Sierra">Sierra Leone</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Slovakia">Slovakia (Slovak Republic)</option>
                              <option value="Slovenia">Slovenia</option>
                              <option value="Solomon Islands">Solomon Islands</option>
                              <option value="Somalia">Somalia</option>
                              <option value="South Africa">South Africa</option>
                              <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                              <option value="Span">Spain</option>
                              <option value="SriLanka">Sri Lanka</option>
                              <option value="St. Helena">St. Helena</option>
                              <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                              <option value="Sudan">Sudan</option>
                              <option value="Suriname">Suriname</option>
                              <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                              <option value="Swaziland">Swaziland</option>
                              <option value="Sweden">Sweden</option>
                              <option value="Switzerland">Switzerland</option>
                              <option value="Syria">Syrian Arab Republic</option>
                              <option value="Taiwan">Taiwan, Province of China</option>
                              <option value="Tajikistan">Tajikistan</option>
                              <option value="Tanzania">Tanzania, United Republic of</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Togo">Togo</option>
                              <option value="Tokelau">Tokelau</option>
                              <option value="Tonga">Tonga</option>
                              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                              <option value="Tunisia">Tunisia</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Turkmenistan">Turkmenistan</option>
                              <option value="Turks and Caicos">Turks and Caicos Islands</option>
                              <option value="Tuvalu">Tuvalu</option>
                              <option value="Uganda">Uganda</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States">United States</option>
                              <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                              <option value="Uruguay">Uruguay</option>
                              <option value="Uzbekistan">Uzbekistan</option>
                              <option value="Vanuatu">Vanuatu</option>
                              <option value="Venezuela">Venezuela</option>
                              <option value="Vietnam">Viet Nam</option>
                              <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                              <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                              <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                              <option value="Western Sahara">Western Sahara</option>
                              <option value="Yemen">Yemen</option>
                              <option value="Serbia">Serbia</option>
                              <option value="Zambia">Zambia</option>
                              <option value="Zimbabwe">Zimbabwe</option>
                              </select>

                              
                              </div>
                              
                              <div class="form-group col-sm-6">
                                 <label>Home No.</label>
                                 <input id='date'  name="homeno"  type="homeno" class="form-control" placeholder="Enter Home Number" value="<?= set_value('homeno', isset($row['homeno']) ? $row['homeno'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                 <div class="text-danger"><?php if(isset($error['homeno'])) {echo $error['homeno']; } ?></div>
                              </div>
                           </div>

                           <div class="row">  
                              <div class="form-group col-sm-6">
                                 <label>Relative Name</label>
                                 <input type="text" name="relative" id="relative"  class="form-control" placeholder="Enter Relative Name" value="<?= set_value('relative', isset($row['relative_name']) ? $row['relative_name'] : ''); ?>">
                                 <div class="text-danger"><?php if(isset($error['relative'])) {echo $error['relative']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Relative Cell No.</label>
                                 <input type="text" id="relativeno"  name="relativeno"  class="form-control" placeholder="Enter Relative Cell Number" value="<?= set_value('relativeno', isset($row['relative_no']) ? $row['relative_no'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                 <div class="text-danger"><?php if(isset($error['relativeno'])) {echo $error['relativeno']; } ?></div>
                              </div>
                           </div>
                         
                           <div class="row">
                             
                              <div class="form-group col-sm-6">
                                 <label>Home Address</label>
                                 <textarea class="form-control" name="address" id="address" rows="3"><?= set_value('address', isset($row['home_address']) ? $row['home_address'] : ''); ?></textarea>
                                 <div class="text-danger"><?php if(isset($error['address'])) {echo $error['address']; } ?></div>
                              </div>
                           </div>
                             


                         <h3><b>Salary Details</b></h3>
                              
                         <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Basic Salary</label>
                                 <input type="text" name="salary"  id="txt1" class="form-control" placeholder="Enter Basic Salary" onblur="calcular();" value="<?= set_value('salary', isset($row['basic_salary']) ? $row['basic_salary'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" Required >
                                 <div class="text-danger"><?php if(isset($error['salary'])) {echo $error['salary']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Accommodation</label>
                                 <input type="text" name="accommodation"  id="txt2" class="form-control" placeholder="Enter Accommodation" onblur="calcular();" value="<?= set_value('accommodation', isset($row['accommodation']) ? $row['accommodation'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                                 <div class="text-danger"><?php if(isset($error['accommodation'])) {echo $error['accommodation']; } ?></div>
                              </div>
                           </div>

                          <div class="row">         
                              <div class="form-group col-sm-6">
                                 <label>Transport</label>
                                 <input type="text" name="transport"  id="txt3"  class="form-control" placeholder="Enter Transport" onblur="calcular();" value="<?= set_value('transport', isset($row['transport']) ? $row['transport'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                                 <div class="text-danger"><?php if(isset($error['transport'])) {echo $error['transport']; } ?></div>
                              </div>

                              <div class="form-group col-sm-6">
                                 <label>Salary </label><br>
                                 <!-- <input type="text" id="perday"  name="perday"   class="form-control" placeholder="Enter Date..." value="<= set_value('perday'); ?>"> -->
                             <label  class="radio-inline"><input name="perday" value="Salary Per Day" checked="checked" type="radio" value="<?= set_value('perday', isset($row['salary_per_day']) ? $row['salary_per_day'] : ''); ?>">Salary Per Day</label>     
                                <label class="radio-inline"><input name="perday" value="Salary Monthly" type="radio" value="<?= set_value('perday', isset($row['salary_per_day']) ? $row['salary_per_day'] : ''); ?>" >Salary Monthly</label> 
                                 <div class="text-danger"><?php if(isset($error['perday'])) {echo $error['perday']; } ?></div>
                              </div>

                              
                           </div>

                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Food</label>
                                 <input type="text" name="food"  id="txt4" class="form-control" placeholder="Enter Food" onblur="calcular();" value="<?= set_value('food', isset($row['food']) ? $row['food'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                 <div class="text-danger"><?php if(isset($error['food'])) {echo $error['food']; } ?></div>
                              </div >
                          
                              <div class="form-group col-sm-6">
                                 <label>Other Allowances</label>
                                 <input type="text" name="allowances"  id="txt5" class="form-control" placeholder="Enter Allowances" onblur="calcular();" value="<?= set_value('allowances', isset($row['allowances']) ? $row['allowances'] : ''); ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
                                 <div class="text-danger"><?php if(isset($error['allowances'])) {echo $error['allowances']; } ?></div>
                              </div>
                              
                           </div>
                           <div class="row">
                           <div class="form-group col-sm-6">
                                 <label>Total</label>
                                 <input type="text" name="total" id="total"  class="form-control" placeholder="Enter Total" value="<?= set_value('total', isset($row['total']) ? $row['total'] : ''); ?>" readonly >
                                 <div class="text-danger"><?php if(isset($error['total'])) {echo $error['total']; } ?></div>
                              </div>
                           </div>


                     <div style="margin-left:25px";>
                        <h3><b>Documents Details</b></h3>
                       </div>
                       <br>
                   
                              <div class="row">
                               <div class="form-group col-sm-3">
                                 <label>Passport No.</label>
                                 <input type="text" name="passportno" id="passportno" class="form-control" placeholder="Enter Passport Number" value="<?= set_value('passportno', isset($row['passport_no']) ? $row['passport_no'] : ''); ?>" Required >
                                 <div class="text-danger"><?php if(isset($error['passportno'])) {echo $error['passportno']; } ?></div>
                              </div>
                              <div class="form-group col-sm-3">
                                 <label for="file-upload" class="custom-file-upload">
                                 <i class="fa fa-cloud-upload"></i> <?=$row['passport_doc'];?>
                                 </label>
                           <input id="file-upload" name='editPassportdoc' type="file" style="display:none;" value="<?= set_value('editPassportdoc', isset($row['passport_doc']) ? $row['passport_doc'] : ''); ?>" >
                              
                              </div>
                              <div class="form-group col-sm-3">
                                 <label>Issue Date</label>
                                 <input type="date" name="idate" id="idate" class="form-control" placeholder="Enter Passport Issue Date.."  value="<?= set_value('idate', isset($row['pissue_date']) ? $row['pissue_date'] : ''); ?>" Required>
                                 <div class="text-danger"><?php if(isset($error['idate'])) {echo $error['idate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-3">
                                 <label>Expire Date</label>
                                 <input type="date" name="edate" id="edate" class="form-control" placeholder="Enter Passport Expire Date.." value="<?= set_value('edate', isset($row['pexpire_date']) ? $row['pexpire_date'] : ''); ?>" Required >
                                 <div class="text-danger"><?php if(isset($error['edate'])) {echo $error['edate']; } ?></div>            
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-sm-3">
                                 <label>Emirate ID No.</label>
                                 <input type="text" name="emirateid" id="emirateid" class="form-control" placeholder="Enter Emirate ID Number"  value="<?= set_value('emirateid', isset($row['emirate_id']) ? $row['emirate_id'] : ''); ?>">
                                 <div class="text-danger"><?php if(isset($error['emirateid'])) {echo $error['emirateid']; } ?></div> 
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="file-upload1" class="custom-file-upload">
                                 <i class="fa fa-cloud-upload"></i><?=$row['emirate_doc'];?></label>
                                 <input type="file" id="file-upload1" style="display:none;"  name="editEmiratedoc"  value="<?= set_value('editEmiratedoc', isset($row['emirate_doc']) ? $row['emirate_doc'] : ''); ?>" >
                              </div>
                              <div class="form-group col-sm-3">
                                 <label>Issue Date</label>
                                 <input type="date" name="e_idate" id="e_idate" class="form-control" placeholder="Enter Emirate Issue Date.." value="<?= set_value('e_idate', isset($row['eissue_date']) ? $row['eissue_date'] : ''); ?>" >
                                 <div class="text-danger"><?php if(isset($error['e_idate'])) {echo $error['e_idate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-3">
                                 <label>Expire Date</label>
                                 <input type="date" name="e_edate" id="e_edate" class="form-control" placeholder="Enter Emirate Expire Date.." value="<?= set_value('e_edate', isset($row['eexpire_date']) ? $row['eexpire_date'] : ''); ?>" >
                                 <div class="text-danger"><?php if(isset($error['e_edate'])) {echo $error['e_edate']; } ?></div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-sm-3">
                                 <label>VISA AKAMA No.</label>
                                 <input type="text" name="visano" id="visano" class="form-control" placeholder="Enter VISA AKAMA Number" value="<?= set_value('visano', isset($row['visa_no']) ? $row['visa_no'] : ''); ?>" Required>
                                 <div class="text-danger"><?php if(isset($error['visano'])) {echo $error['visano']; } ?></div>
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="file-upload2" class="custom-file-upload">
                              <i class="fa fa-cloud-upload"></i><?=$row['visa_doc'];?></label>
                                 <input type="file" id="file-upload2" style="display:none;" name="editVisadoc"  value="<?= set_value('editVisadoc', isset($row['visa_doc']) ? $row['visa_doc'] : ''); ?>" >
                              </div>
                              <div class="form-group col-sm-3">
                                 <label>Issue Date</label>
                                 <input type="date" name="visaidate" id="visaidate" class="form-control" placeholder="Enter VISA AKAMA Issue Date.." value="<?= set_value('visaidate', isset($row['vissue_date']) ? $row['vissue_date'] : ''); ?>" Required>
                                 <div class="text-danger"><?php if(isset($error['visaidate'])) {echo $error['visaidate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-3">
                                 <label>Expire Date</label>
                                 <input type="date" name="visaedate" id="visaedate" class="form-control" placeholder="Enter VISA AKAMA Expire Date.."  value="<?= set_value('visaedate', isset($row['vexpire_date']) ? $row['vexpire_date'] : ''); ?>" Required>
                                 <div class="text-danger"><?php if(isset($error['visaedate'])) {echo $error['visaedate']; } ?></div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-sm-3">
                                 <label>Driving Licence No.</label>
                                 <input type="text" name="driving" id="driving" class="form-control" placeholder="Enter Driving Licence Number" value="<?= set_value('driving', isset($row['driving_licence']) ? $row['driving_licence'] : ''); ?>">
                                 <div class="text-danger"><?php if(isset($error['driving'])) {echo $error['driving']; } ?></div>
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="file-upload3" class="custom-file-upload">
                              <i class="fa fa-cloud-upload"></i><?=$row['driving_doc'];?></label>
                                 <input type="file" id="file-upload3" style="display:none;"    name="editDrivingdoc"  value="<?= set_value('editDrivingdoc', isset($row['driving_doc']) ? $row['driving_doc'] : ''); ?>" >
                              </div>
                              <div class="form-group col-sm-3">
                                 <label>Issue Date</label>
                                 <input type="date" name="didate" id="didate" class="form-control" placeholder="Enter  Driving Licence Issue Date.." value="<?= set_value('didate', isset($row['didate']) ? $row['didate'] : ''); ?>" >
                                 <div class="text-danger"><?php if(isset($error['didate'])) {echo $error['didate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-3">
                                 <label>Expire Date</label>
                                 <input type="date" name="dedate" id="dedate" class="form-control" placeholder="Enter  Driving Licence Expire Date.."  value="<?= set_value('dedate', isset($row['dedate']) ? $row['dedate'] : ''); ?>">
                                 <div class="text-danger"><?php if(isset($error['dedate'])) {echo $error['dedate']; } ?></div>
                              </div>
                        </div>

                        <div style="margin-left:25px";>
                        <h3><b>Documents Uploads</b></h3>
                       </div>
                       <br>
                   
                              <div class="row">
                               <div class="form-group col-sm-3">
                                 <label>Profile Picture</label>
                                 <input type="file" name="passport_pic" value="<?= set_value('passport_pic'); ?>">
                                 <input type="hidden" name="old_picture">
                         
                                 <div class="text-danger"><?php if(isset($error['passport_pic'])) {echo $error['passport_pic']; } ?></div>
                              </div>
                              <div class="form-group col-sm-3">
                               <?php  if($row['passport_img'] != ''){ ?>
                          <img  src="<?=  "/uploads/"?><?= @$row['passport_img'] ?> " height="100px" width="100px" alt="image"> 
                            <?php }else{ ?>   
                             <img  src="/thumbnil/avatar.png" height="100px" width="100px" alt="image"> 
                             <?php }?>
                                 <div class="text-danger"><?php if(isset($error['passport_pic'])) {echo $error['passport_pic']; } ?></div>
                              </div>

                              <div class="row">
                               <!--<div class="form-group col-sm-3">
                                 <label>Document Picture</label>
                                   <?php foreach($multImg as $inputMultImg){ ?>
                                 <input class="form-control" type="file"  id="upload_imgs"  name="upload_imgs[]" multiple="multiple"  value=<?= set_value('upload_imgs',isset($inputMultImg) ? $inputMultImg: ''); ?>">
                                 <?php }?>
                              </div>-->
                              <div class="form-group col-sm-3">
                                 <label>Other Document</label>
                                 <input class="form-control" type="file"  id="upload_imgs"  name="upload_imgs"  >
                              </div>
                              <div class="form-group col-sm-3">
                               <?php  
                                if($multImg[0] != ''){ ?>
                               <?php foreach($multImg as $loadImg) {  ?>
                                 <?php $extension = pathinfo($loadImg, PATHINFO_EXTENSION);  
                                 if($extension == 'pdf'){?>
                                       <a data-toggle="tooltip" title="<?= @$loadImg ?>" class="demo" href="<?="/imguploads/"?><?= @$loadImg ?>" data-lightbox="example-3" data-title="Caption" target = "_blank">
                          <img src="/thumbnil/pdf-icon.png" height="90" width="70"> 
                           </a>
                                    <?php }else{?>   
                                <a data-toggle="tooltip" title="<?= @$loadImg ?>" class="demo" href="<?="/imguploads/"?><?= @$loadImg ?>" data-lightbox="example-3" data-title="Caption" target = "_blank">
                          <img src="<?="/imguploads/"?><?= @$loadImg ?>" height="100px" width="100px" alt="image" class ="example-image"> 
                        
                        </a>
                                <?php }}}else { ?>
                           <img  src="/thumbnil/thumbnil.png" height="100px" width="100px" alt="image"> 
                            <?php }?>
                            
                                  
         
                              </div>
                             
<!--                              
                              <div class="form-group col-sm-3">
                                 <label>Multi upload</label>
                                 <input type="file" name="emirate_pic">
                                 <input type="hidden" name="old_picture">
                                 <div class="text-danger"><?php if(isset($error['idate'])) {echo $error['idate']; } ?></div>
                              </div> -->

                              <!-- <div class="form-group col-sm-3">
                                 <label>Emirate</label>
                                 <input type="file" name="emirate_pic">
                                 <input type="hidden" name="old_picture">
                                 <div class="text-danger"><?php if(isset($error['idate'])) {echo $error['idate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-3">
                                 <label>VISA</label>
                                 <input type="file" name="visa_pic">
                                 <input type="hidden" name="old_picture">
                                 <div class="text-danger"><?php if(isset($error['idate'])) {echo $error['idate']; } ?></div>
                              </div>
                              <div class="form-group col-sm-3">
                                 <label>Driving Licence</label>
                                 <input type="file" name="licence_pic">
                                 <input type="hidden" name="old_picture">
                                 <div class="text-danger"><?php if(isset($error['idate'])) {echo $error['idate']; } ?></div>
                              </div>
                               -->
                           </div>

                        
                              <div class="form-group">
                    <button type="submit" id="submit" name="submit" class="btn btn-success">
                    Update
                    </button> 
                  </div>
                              </div> 
                           
                              <!-- <div style="margin-left:";>
                              <h3><b>Documents Uploads</b></h3>
                              </div>
                              <br>
                              <br><br>
                              </div>
                   -->
                                 <!-- <a href="#" class="btn btn-warning">Reset</a> -->
                                 <!-- <button type="submit" id="submit" name="submit" class="btn btn-success">Save </button> -->
                                 <!-- <a href="#" class="btn btn-success">Save</a> -->
                              
                              <!-- <div class="row">
                               <div class="form-group col-sm-12">
                                 <label>Picture upload</label>
                                 <input type="file" name="picture">
                                 <input type="hidden" name="old_picture">
                               </div>   
                               <br><br>
                               <div class="reset-button">
                                 <a href="#" class="btn btn-warning">Reset</a>
                                 <a href="#" class="btn btn-success">Save</a>
                               </div>
                          </div>  -->
                           
                          
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>   
       <script>
   function calcular() {
    var num1 = Number(document.getElementById("txt1").value);
    var num2 = Number(document.getElementById("txt2").value);
    var num3 = Number(document.getElementById("txt3").value);
    var num4 = Number(document.getElementById("txt4").value);
    var num5 = Number(document.getElementById("txt5").value);

   
 document.getElementById('total').value  = num1 + num2 + num3 + num4 + num5;

}
</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>
$('#file-upload').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload')[0].files[0].name;
  $(this).prev('label').text(file);
});

$('#file-upload1').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload1')[0].files[0].name;
  $(this).prev('label').text(file);
});

$('#file-upload2').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload2')[0].files[0].name;
  $(this).prev('label').text(file);
});

$('#file-upload3').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload3')[0].files[0].name;
  $(this).prev('label').text(file);
});
 </script>

         <?= $this->endSection() ?>