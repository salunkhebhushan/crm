<aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="<?=BASE; ?>index-2.html"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-users"></i><span>Employees</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                     <li><a href="<?=BASE; ?>Empcategory1/category_form">Add Epmloyees Categoty </a></li>                        
                        <li><a href="<?= BASE; ?>Employee/emp_add">Add Employees</a></li>
                        <li><a href="<?=BASE; ?>Employee/emp_form">List</a></li>
                        <!-- <li><a href="<=BASE; ?>group.html">Groups</a></li> -->
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-user-circle"></i><span>Clients</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?= BASE; ?>Client/cnt_add">Add Client</a></li>
                        <li><a href="<?=BASE; ?>Client/cnt_form">Client List</a></li>
                        <!-- <li><a href="group.html">Groups</a></li> -->
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-edit"></i><span>Project</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?= BASE; ?>Project/pro_add">Add project</a></li>
                        <li><a href="<?= BASE; ?>Project/pro_form">Project Details</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-shopping-basket"></i><span>Plant & Equipmets</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?= BASE; ?>Equipment/te_form">Plant & Equipmets</a></li>
                        <!-- <li><a href="<?=BASE; ?>hourly.html">Hourly</a></li> -->
                        <!-- <li><a href="<?=BASE; ?>managesal.html">Manage salary</a></li>
                        <li><a href="<?=BASE; ?>empsallist.html">Employee salary list</a></li>
                        <li><a href="<?=BASE; ?>mpayment.html">Make payment</a></li>
                        <li><a href="<?=BASE; ?>generatepay.html">Generate payslip</a></li>
                        <li><a href="<?=BASE; ?>paysum.html">Payroll summary</a></li> -->
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-edit"></i><span>Sub Contactor</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?= BASE; ?>Subcontractor/sub_add">Add project</a></li>
                        <li><a href="<?= BASE; ?>Subcontractor/sub_form">Project Details</a></li>
                     </ul>
                  </li>

                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-bell"></i><span>Attendance</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>thistory.html">Time History</a></li>
                        <li><a href="<?=BASE; ?>timechange.html">Time Change Request</a></li>
                        <li><a href="<?=BASE; ?>atreport.html">Attendance Report</a></li>
                     </ul>
                  </li>
                  
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-shopping-basket"></i><span>Transaction</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>deposit.html">New Deposit</a></li>
                        <li><a href="<?=BASE; ?>expense.html">New Expense</a></li>
                        <li><a href="<?=BASE; ?>transfer.html">Transfer</a></li>
                        <li><a href="<?=BASE; ?>view-tsaction.html">View transaction</a></li>
                        <li><a href="<?=BASE; ?>balance.html">Balance Sheet</a></li>
                        <li><a href="<?=BASE; ?>treport.html">Transfer Report</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-shopping-cart"></i><span>Invoices</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>invoice.html">Invoices</a></li>
                        <li><a href="<?=BASE; ?>ninvoices.html">New Invoices</a></li>
                        <li><a href="<?=BASE; ?>recurring.html">Recurring invoices</a></li>
                        <li><a href="<?=BASE; ?>nrecurring.html">New Recurring invoices</a></li>
                        <li><a href="<?=BASE; ?>quote.html">quotes</a></li>
                        <li><a href="<?=BASE; ?>nquote.html">New quote</a></li>
                        <li><a href="<?=BASE; ?>payment.html">Payments</a></li>
                        <li><a href="<?=BASE; ?>taxeport.html">Tax Rates</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-book"></i><span>Task</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>rtask.html">Running Task</a></li>
                        <li><a href="<?=BASE; ?>atask.html">Archive Task</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-shopping-bag"></i><span>Revenue</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                     <li><a href="<?= BASE; ?>Revenue/rven_add">Add Revenue </a></li>   
                     <li><a href="<?=BASE; ?>cpayment.html">Client payment</a></li>
                        <li><a href="<?=BASE; ?>emanage.html">Expense management</a></li>
                        <li><a href="<?=BASE; ?>ecategory.html">Expense Category</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-file-text"></i><span>Report</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>preport.html">Project Report</a></li>
                        <li><a href="<?=BASE; ?>creport.html">Client Report</a></li>
                        <li><a href="<?=BASE; ?>ereport.html">Expense Report</a></li>
                        <li><a href="<?=BASE; ?>incomexp.html">Income expense comparesion</a></li>
                     </ul>
                  </li>
                  
                
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-shopping-basket"></i><span>clients</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>salary.html">Salary Template</a></li>
                        <li><a href="<?=BASE; ?>hourly.html">Hourly</a></li>
                        <li><a href="<?=BASE; ?>managesal.html">Manage salary</a></li>
                        <li><a href="<?=BASE; ?>empsallist.html">Employee salary list</a></li>
                        <li><a href="<?=BASE; ?>mpayment.html">Make payment</a></li>
                        <li><a href="<?=BASE; ?>generatepay.html">Generate payslip</a></li>
                        <li><a href="<?=BASE; ?>paysum.html">Payroll summary</a></li>
                     </ul>
                  </li>
                  <!-- <li class="treeview">
                     <a href="#">
                     <i class="fa fa-bitbucket-square"></i><span>Stock</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="stockcat.html">Stock category</a></li>
                        <li><a href="manstock.html">Manage Stock</a></li>
                        <li><a href="astock.html">Assign stock</a></li>
                     </ul>
                  </li> -->
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <!-- <i class="fa fa-ticket"></i><span>Tickets</span> -->
                     <!-- <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>ticanswer.html">Answered</a></li>
                        <li><a href="<?=BASE; ?>ticopen.html">Open</a></li>
                        <li><a href="<?=BASE; ?>iprocess.html">Inprocess</a></li>
                        <li><a href="<?=BASE; ?>close.html">CLosed</a></li>
                        <li><a href="<?=BASE; ?>allticket.html">All Tickets</a></li>
                     </ul>
                  </li> -->
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-list"></i>
                     <span>Utilities</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>ativitylog.html">Activity Log</a></li>
                        <li><a href="<?=BASE; ?>emailmes.html">Email message log</a></li>
                        <li><a href="<?=BASE; ?>systemsts.html">System status</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-bar-chart"></i><span>Charts</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li class=""><a href="<?=BASE; ?>charts_flot.html">Flot Chart</a></li>
                        <li><a href="<?=BASE; ?>charts_Js.html">Chart js</a></li>
                        <li><a href="<?=BASE; ?>charts_morris.html">Morris Charts</a></li>
                        <li><a href="<?=BASE; ?>charts_sparkline.html">Sparkline Charts</a></li>
                     </ul>
                  </li>
                  <!-- <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-briefcase"></i>
                     <span>Icons</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>icons_bootstrap.html">Bootstrap Icons</a></li>
                        <li><a href="<?=BASE; ?>icons_fontawesome.html">Fontawesome Icon</a></li>
                        <li><a href="<?=BASE; ?>icons_flag.html">Flag Icons</a></li>
                        <li><a href="<?=BASE; ?>icons_material.html">Material Icons</a></li>
                        <li><a href="<?=BASE; ?>icons_weather.html">Weather Icons </a></li>
                        <li><a href="<?=BASE; ?>icons_line.html">Line Icons</a></li>
                        <li><a href="<?=BASE; ?>icons_pe.html">Pe Icons</a></li>
                        <li><a href="<?=BASE; ?>icon_socicon.html">Socicon Icons</a></li>
                     </ul>
                  </li> -->
                  <!-- <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-list"></i> <span>Other page</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>login.html">Login</a></li>
                        <li><a href="<?=BASE; ?>register.html">Register</a></li>
                        <li><a href="<?=BASE; ?>profile.html">Profile</a></li>
                        <li><a href="<?=BASE; ?>forget_password.html">Forget password</a></li>
                        <li><a href="<?=BASE; ?>lockscreen.html">Lockscreen</a></li>
                        <li><a href="<?=BASE; ?>404.html">404 Error</a></li>
                        <li><a href="<?=BASE; ?>505.html">505 Error</a></li>
                        <li><a href="<?=BASE; ?>blank.html">Blank Page</a></li>
                     </ul>
                  </li> -->
                  <!-- <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-bitbucket"></i><span>UI Elements</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>buttons.html">Buttons</a></li>
                        <li><a href="<?=BASE; ?>tabs.html">Tabs</a></li>
                        <li><a href="<?=BASE; ?>notification.html">Notification</a></li>
                        <li><a href="<?=BASE; ?>tree-view.html">Tree View</a></li>
                        <li><a href="<?=BASE; ?>progressbars.html">Progressber</a></li>
                        <li><a href="<?=BASE; ?>list.html">List View</a></li>
                        <li><a href="<?=BASE; ?>typography.html">Typography</a></li>
                        <li><a href="<?=BASE; ?>panels.html">Panels</a></li>
                        <li><a href="<?=BASE; ?>modals.html">Modals</a></li>
                        <li><a href="<?=BASE; ?>icheck_toggle_pagination.html">iCheck, Toggle, Pagination</a></li>
                        <li><a href="<?=BASE; ?>labels-badges-alerts.html">Labels, Badges, Alerts</a></li>
                     </ul>
                  </li> -->
                  <!-- <li class="treeview">
                     <a href="<?=BASE; ?>#">
                     <i class="fa fa-gear"></i>
                     <span>settings</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?=BASE; ?>gsetting.html">Genaral settings</a></li>
                        <li><a href="<?=BASE; ?>stfsetting.html">Staff settings</a></li>
                        <li><a href="<?=BASE; ?>emailsetting.html">Email settings</a></li>
                        <li><a href="<?=BASE; ?>paysetting.html">Payment</a></li>
                     </ul>
                  </li>-->
                  <li> 
                     <a href="<?=BASE; ?>company.html">
                     <i class="fa fa-home"></i> <span>Companies</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>holiday.html">
                     <i class="fa fa-stop-circle"></i> <span>Public Holiday</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>user.html">
                     <i class="fa fa-user-circle"></i><span>User</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>items.html">
                     <i class="fa fa-file-o"></i><span>Items</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>department.html">
                     <i class="fa fa-tree"></i><span>Departments</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>document.html">
                     <i class="fa fa-file-text"></i> <span>Documents</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>train.html">
                     <i class="fa fa-clock-o"></i><span>Training</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>calender.html">
                     <i class="fa fa-calendar"></i> <span>Calender</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>notice.html">
                     <i class="fa fa-file-text"></i> <span>Notice Board</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>message.html">
                     <i class="fa fa-envelope-o"></i> <span>Message</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="<?=BASE; ?>note.html">
                     <i class="fa fa-comment"></i> <span>Notes</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>