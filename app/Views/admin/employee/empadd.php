<?= $this->extend('admin_template') ?>
<?= $this->section('content') ?>

<?= error_reporting(1) ?>
<style>
   .quote-imgs-thumbs {
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  margin: 1.5rem 0;
  padding: 0.75rem;
}
.quote-imgs-thumbs--hidden {
  display: none;
}
.img-preview-thumb {
  background: #fff;
  border: 1px solid #777;
  border-radius: 0.25rem;
  box-shadow: 0.125rem 0.125rem 0.0625rem rgba(0, 0, 0, 0.12);
  margin-right: 1rem;
  max-width: 140px;
  padding: 0.25rem;
}
</style>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Employees</h1>
                  <small>Employees list</small>
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
                              <a class="btn btn-add " href="<?=BASE; ?>Employee/emp_form"> 
                              <i class="fa fa-list"></i>  Employees List </a>  
                           </div>
                        </div>
                        <div style="margin-left:25px";>
                        <h3><b>Employees Persnol Details</b></h3>
                       </div>
                       <!--  id="uploadForm"-->
                        <div class="panel-body">
                           <form action="<?=BASE; ?>Employee/emp_insert"  id="img-upload-form" name="formUploadFile" method="POST"  enctype="multipart/form-data" class="col-sm-12">
                              
                            <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>First Name</label>         
                                 <input type="text"  name="firstname" id="firstname" class="form-control"  placeholder="Enter First Name" value="<?= set_value('firstname'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['firstname'])) {echo $error['firstname']; } ?></div>
                              </div>
                            
                              <div class="form-group col-sm-6">
                                 <label>Last Name</label>
                                 <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter last Name" value="<?= set_value('lastname'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['lastname'])) {echo $error['lastname']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Employees No.</label>
                                 <input readonly name="employeeno" id="employeeno" class="form-control"   >
                                 <div class="text-danger"><?php if(isset($error['employeeno'])) {echo $error['employeeno']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Designation</label>
                                 <input type="text" name="designation" id="designation"class="form-control" placeholder="Enter designation" value="<?= set_value('designation'); ?>"   >
                                 <div class="text-danger"><?php if(isset($error['designation'])) {echo $error['designation']; } ?></div>
                                </div>
                              </div>
                              <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Email</label>
                                 <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?= set_value('email'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['email'])) {echo $error['email']; } ?></div>
                            
                              </div>   
                              <div class="form-group col-sm-6">
                                 <label>Mobile</label>
                                 <input type="text"  name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile"  value="<?= set_value('mobile'); ?>">
                                 <div class="text-danger"><?php if(isset($error['mobile'])) {echo $error['mobile']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Project</label>
                                 <input type="text" name="project" id="project" class="form-control" placeholder="Enter Project Name" value="<?= set_value('project'); ?>">
                                 <div class="text-danger"><?php if(isset($error['project'])) {echo $error['project']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Employee Category</label>
                                 <select class="form-control" name="category" id="category"  onchange="empcategoryFunction(this.value)"  >
                                 <?php foreach($categoryList as $cat) { ?>
                                 <option value="<?php echo @$cat['category_name'] ?>" ><?php echo @$cat['category_name'] ?></option>
                            
                                  <?php } ?>     
                                 </select>

                          
                              </div>
                           
                            </div>

                              
                              
                              <div>
                        <h3><b>Employees Profile</b></h3>
                       </div>
                       <br>
                        
                              <div class="row"> 
                              <div class="form-group col-sm-6">
                                 <label>Date of Joining</label>
                                 <input type="date" name="doj" id="doj" class="form-control" placeholder="Enter Date of Joining" value="<?= set_value('doj'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['doj'])) {echo $error['doj']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Father Name</label>
                                 <input type="text" name="father" id="father" class="form-control" placeholder="Enter Father Name" value="<?= set_value('father'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['father'])) {echo $error['father']; } ?></div>
                              </div>
                              </div>

                              <div class="row">
                             
                              <div class="form-group col-sm-6">
                                 <label>Nationality</label>
                                 <select class="form-control" name="nationality" id="nationality" value="<?= set_value('nationality'); ?>" >
                                 <option value="Afghanistan" >Afghanistan</option>
                                 <option value="Albania" selected>Albania</option>
                                 <option value="Algeria" selected>Algeria</option>
                                 <option value="American Samoa" selected>American Samoa</option>
                                 <option value="Andorra">Andorra selected</option>
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

                                 </select>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Home No.</label>
                                 <input id='date'  name="homeno"  type="homeno" class="form-control" placeholder="Enter Home Number" value="<?= set_value('homeno'); ?>">
                                 <div class="text-danger"><?php if(isset($error['homeno'])) {echo $error['homeno']; } ?></div>
                              </div>
                           </div>

                           <div class="row">  
                              <div class="form-group col-sm-6">
                                 <label>Relative Name</label>
                                 <input type="text" name="relative" id="relative"  class="form-control" placeholder="Enter Relative Name" value="<?= set_value('relative'); ?>">
                                 <div class="text-danger"><?php if(isset($error['relative'])) {echo $error['relative']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Relative Cell No.</label>
                                 <input type="text" id="relativeno"  name="relativeno"  class="form-control" placeholder="Enter Relative Cell Number" value="<?= set_value('relativeno'); ?>">
                                 <div class="text-danger"><?php if(isset($error['relativeno'])) {echo $error['relativeno']; } ?></div>
                              </div>
                           </div>
                         
                           <div class="row">
                             
                              <div class="form-group col-sm-6">
                                 <label>Home Address</label>
                                 <textarea class="form-control" name="address" id="address" rows="3" ><?= set_value('address'); ?></textarea>
                                 <div class="text-danger"><?php if(isset($error['address'])) {echo $error['address']; } ?></div>
                              </div>
                           </div>
                             


                         <h3><b>Salary Details</b></h3>
                              
                         <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Basic Salary</label>
                                 <input type="text" name="salary" id="txt1" class="form-control" onblur="calcular();" placeholder="Enter Basic Salary" value="<?= set_value('salary'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['salary'])) {echo $error['salary']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Accommodation</label>
                                 <input type="text" name="accommodation" id="txt2" class="form-control" onblur="calcular();" placeholder="Enter Accommodation" value="<?= set_value('accommodation'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['accommodation'])) {echo $error['accommodation']; } ?></div>
                              </div>
                           </div>

                          <div class="row">         
                              <div class="form-group col-sm-6">
                                 <label>Transport</label>
                                 <input type="text" name="transport" id="txt3"  class="form-control" onblur="calcular();" placeholder="Enter Transport" value="<?= set_value('transport'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['transport'])) {echo $error['transport']; } ?></div>
                              </div>
                              <div class="form-group col-sm-6">
                                 <label>Salary </label><br>
                                 <!-- <input type="text" id="perday"  name="perday"   class="form-control" checked="checked" placeholder="Enter Date..." value="<= set_value('perday'); ?>"> -->
                             <label  class="radio-inline"><input name="perday" value="Salary Per Day" checked="checked"  type="radio" value="<?= set_value('perday'); ?>">Salary Per Day</label>     
                                <label class="radio-inline"><input name="perday" value="Salary Monthly" type="radio" value="<?= set_value('perday'); ?>">Salary Monthly</label> 
                                 <div class="text-danger"><?php if(isset($error['perday'])) {echo $error['perday']; } ?></div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Food</label>
                                 <input type="text" name="food" id="txt4"  class="form-control" onblur="calcular();" placeholder="Enter Food" value="<?= set_value('food'); ?>">
                                 <div class="text-danger"><?php if(isset($error['food'])) {echo $error['food']; } ?></div>
                              </div >
                              
                              <div class="form-group col-sm-6">
                                 <label>Other Allowances</label>
                                 <input type="text" name="allowances" id="txt5"  class="form-control" onblur="calcular();" placeholder="Enter Other Allowances" value="<?= set_value('allowances'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['allowances'])) {echo $error['allowances']; } ?></div>
                              </div>
                           </div>
                           <div class="row">
                             
                           <div class="form-group col-sm-6">
                                 <label>Total</label>
                                 <input type="text" name="total" id="total"  class="form-control"   >
                                 
                              </div>

                           </div>



                     <div>
                        <h3><b>Documents Details</b></h3>
                       </div>
                       <br>
                   
                              <div class="row">
                               <div class="form-group col-sm-4">
                                 <label>Passport No.</label>
                                 <input type="text" name="passportno" id="passportno" class="form-control" placeholder="Enter Passport Number" value="<?= set_value('passportno'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['passportno'])) {echo $error['passportno']; } ?></div>
                              </div>
                              <div class="form-group col-sm-4">
                                 <label>Issue Date</label>
                                 <input type="date" name="idate" id="idate" class="form-control" placeholder="Enter Passport Issue Date.."  value="<?= set_value('idate'); ?>">
                                 <div class="text-danger"><?php if(isset($error['idate'])) {echo $error['idate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-4">
                                 <label>Expire Date</label>
                                 <input type="date" name="edate" id="edate" class="form-control" placeholder="Enter Passport Expire Date.." value="<?= set_value('edate'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['edate'])) {echo $error['edate']; } ?></div>            
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-sm-4">
                                 <label>Emirate ID No.</label>
                                 <input type="text" name="emirateid" id="emirateid" class="form-control" placeholder="Enter Emirate ID Number"  value="<?= set_value('emirateid'); ?>">
                                 <div class="text-danger"><?php if(isset($error['emirateid'])) {echo $error['emirateid']; } ?></div> 
                              </div>
                              <div class="form-group col-sm-4">
                                 <label>Issue Date</label>
                                 <input type="date" name="e_idate" id="e_idate" class="form-control" placeholder="Enter Emirate Issue Date.." value="<?= set_value('e_idate'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['e_idate'])) {echo $error['e_idate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-4">
                                 <label>Expire Date</label>
                                 <input type="date" name="e_edate" id="e_edate" class="form-control" placeholder="Enter Emirate Expire Date.." value="<?= set_value('e_edate'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['e_edate'])) {echo $error['e_edate']; } ?></div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-sm-4">
                                 <label>VISA AKAMA No.</label>
                                 <input type="text" name="visano" id="visano" class="form-control" placeholder="Enter VISA AKAMA Number" value="<?= set_value('visano'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['visano'])) {echo $error['visano']; } ?></div>
                              </div>
                              <div class="form-group col-sm-4">
                                 <label>Issue Date</label>
                                 <input type="date" name="visaidate" id="visaidate" class="form-control" placeholder="Enter VISA AKAMA Issue Date.." value="<?= set_value('visaidate'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['visaidate'])) {echo $error['visaidate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-4">
                                 <label>Expire Date</label>
                                 <input type="date" name="visaedate" id="visaedate" class="form-control" placeholder="Enter VISA AKAMA Expire Date.."  value="<?= set_value('visaedate'); ?>">
                                 <div class="text-danger"><?php if(isset($error['visaedate'])) {echo $error['visaedate']; } ?></div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="form-group col-sm-4">
                                 <label>Driving Licence No.</label>
                                 <input type="text" name="driving" id="driving" class="form-control" placeholder="Enter Driving Licence Number" value="<?= set_value('driving'); ?>">
                                 <div class="text-danger"><?php if(isset($error['driving'])) {echo $error['driving']; } ?></div>
                              </div>
                              <div class="form-group col-sm-4">
                                 <label>Issue Date</label>
                                 <input type="date" name="didate" id="didate" class="form-control" placeholder="Enter  Driving Licence Issue Date.." value="<?= set_value('didate'); ?>" >
                                 <div class="text-danger"><?php if(isset($error['didate'])) {echo $error['didate']; } ?></div>
                              </div>
                              
                              <div class="form-group col-sm-4">
                                 <label>Expire Date</label>
                                 <input type="date" name="dedate" id="dedate" class="form-control" placeholder="Enter  Driving Licence Expire Date.."  value="<?= set_value('dedate'); ?>">
                                 <div class="text-danger"><?php if(isset($error['dedate'])) {echo $error['dedate']; } ?></div>
                              </div>
                        </div>

                        <div>
                        <h3><b>Documents Uploads</b></h3>
                       </div>
                       <br>
                   
                              <div class="row">
                               <div class="form-group col-sm-4">
                                 <label>Employee Picture</label>
                                 <input type="file" name="passport_pic" value="<?= set_value('passport_pic'); ?>">
                                 <input type="hidden" name="old_picture">
                             <div class="text-danger"><?php if(isset($error['passport_pic'])) {echo $error['passport_pic']; } ?></div> 
                             
                                 </div>

                              <!-- <div class="row">
                              <div class="form-group col-sm-6">
                                 <label>Multi img</label>
                                 <input class="form-control" type="file" id="upload_imgs" name="upload_imgs[]" multiple/>
                                 <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                              </div>

                              </div> -->
                            
                              <div class="row">
                               <div class="form-group col-sm-6">
                                 <label for="exampleInputFile">Document Picture To upload:</label>
                                 <input class="form-control" type="file"  id="upload_imgs" name="upload_imgs[]" multiple="multiple">
                                  <p class="help-block"><span class="label label-info">Note:</span>Passport Document,Visa Document,Emirate Id Document,Driving Document Attachment..</p> 
                                 <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>
                              
                              </div> 
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

 <script type="text/javascript">
   function empcategoryFunction(value)
   {
      if(value=="Staff")
      {
         document.getElementById("employeeno").value="1001";

      }
      if(value=="Trademan")
      {
         document.getElementById("employeeno").value="2002";

      }
      if(value=="Helper")
      {
         document.getElementById("employeeno").value="3001";

      }

   }
 </script>


         <script>
            var imgUpload = document.getElementById('upload_imgs')
  , imgPreview = document.getElementById('img_preview')
  , imgUploadForm = document.getElementById('img-upload-form')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, false);
imgUploadForm.addEventListener('submi', function (e) {
  e.preventDefault();
  alert('Images Uploaded! (not really, but it would if this was on your website)');
}, false);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
  if(!!totalFiles) {
    imgPreview.classList.remove('quote-imgs-thumbs--hidden');
    previewTitle = document.createElement('p');
    previewTitle.style.fontWeight = 'bold';
    previewTitleText = document.createTextNode(totalFiles + ' Total Images Selected');
    previewTitle.appendChild(previewTitleText);
    imgPreview.appendChild(previewTitle);
  }
  
  for(var i = 0; i < totalFiles; i++) {
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    imgPreview.appendChild(img);
  }
}
         </script>
         
         <?= $this->endSection() ?>