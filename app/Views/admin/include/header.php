<header class="main-header">
            <a href="<?=BASE; ?>" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="<?=BASE; ?>assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="<?=BASE; ?>assets/dist/img/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="<?=BASE; ?>" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                 <button type="button" class="close">×</button>
                 <form>
                   <input type="search" value="" placeholder="Search.." />
                   <button type="submit" class="btn btn-add">Search...</button>
                </form>
             </div>
             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                   
                   
                     <!-- Notifications -->
                     <li class="dropdown notifications-menu">
                        <a href="<?=BASE; ?>#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-bell"></i>
                        <span class="label label-warning">7</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                    <a href="<?=BASE; ?>#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-green"></i>Change Your font style</a>
                                 </li>
                                 <li><a href="<?=BASE; ?>#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-red"></i>
                                    check the system ststus..</a>
                                 </li>
                                 <li><a href="<?=BASE; ?>#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="<?=BASE; ?>#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                                 <li><a href="<?=BASE; ?>#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-yellow"></i>
                                    Add more admin...</a>
                                 </li>
                                 <li><a href="<?=BASE; ?>#" class="border-gray">
                                    <i class="fa fa-dot-circle-o color-violet"></i> Add more clients and order</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                   
                     <!-- Help -->
                     <!-- <li class="dropdown dropdown-help hidden-xs">
                        <a href="<?=BASE; ?>#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-settings"></i></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="<?=BASE; ?>profile.html">
                              <i class="fa fa-line-chart"></i> Networking</a>
                           </li>
                           <li><a href="<?=BASE; ?>#"><i class="fa fa fa-bullhorn"></i> Lan settings</a></li>
                           <li><a href="<?=BASE; ?>#"><i class="fa fa-bar-chart"></i> Settings</a></li>
                           <li><a href="<?=BASE; ?>login.html">
                              <i class="fa fa-wifi"></i> wifi</a>
                           </li>
                        </ul>
                     </li> -->
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="<?=BASE; ?>#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=BASE; ?>assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="<?=BASE; ?>">
                              <?php $session= session(); ?>
                              <i class="fa fa-user"></i> <?php echo $session->get('admin'); ?></a>
                           </li>
                           <li><a href="<?=BASE; ?>#"><i class="fa fa-inbox"></i> Inbox</a></li>
                           <li><a href="<?=BASE; ?>LoginController/logout">
                              <i   class="fa fa-sign-out"></i> Signout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>