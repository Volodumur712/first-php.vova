<body class="dashboard dashboard_1">
<div class="full_container">
   <div class="inner_container">
      
<!-- Sidebar  -->
<nav id="sidebar">
         <div class="sidebar_blog_1">
            <div class="sidebar-header">
               <div class="logo_section">
                  <a href="partials/any/index.html"><img class="logo_icon img-responsive" src="partials/any/images/logo/logo_icon.png" alt="#" /></a>
               </div>
            </div>
            <div class="sidebar_user_info">
               <div class="icon_setting"></div>
               <div class="user_profle_side">
                  <div class="user_img"><img class="img-responsive" src="partials/any/images/layout_img/user_img.jpg" alt="#" /></div>
                  <div class="user_info">
                     <h6><?php
                     if(isLogin()) {
                     $user = getCurrentUser();
                     ?>
                     <h6><?php echo$user['name']; ?> </h6>

                     <?php
                     } else {
                     ?> 
                        <h6>Hello</h6>
                     <?php
                     }
                     ?></h6>
                     <p><span class="online_animation"></span> Online</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="sidebar_blog_2">
            <h4>General</h4>
            <ul class="list-unstyled components">
               <li class="active">
                  <a href="partials/any/dashboard.php"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
               </li>
               <li><a href="partials/any/widgets.php"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
               <li>
                  <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
                  <ul class="collapse list-unstyled" id="element">
                     <li><a href="partials/any/general_elements.html">> <span>General Elements</span></a></li>
                     <li><a href="partials/any/media_gallery.html">> <span>Media Gallery</span></a></li>
                     <li><a href="partials/any/icons.html">> <span>Icons</span></a></li>
                     <li><a href="partials/any/invoice.html">> <span>Invoice</span></a></li>
                  </ul>
               </li>
               <li><a href="partials/any/tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
               <li>
                  <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                  <ul class="collapse list-unstyled" id="apps">
                     <li><a href="partials/any/email.html">> <span>Email</span></a></li>
                     <li><a href="partials/any/calendar.html">> <span>Calendar</span></a></li>
                     <li><a href="partials/any/media_gallery.html">> <span>Media Gallery</span></a></li>
                  </ul>
               </li>
               <li><a href="partials/any/price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
               <li>
                  <a href="partials/any/contact.html">
                  <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
               </li>
               <li class="active">
                  <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
                  <ul class="collapse list-unstyled" id="additional_page">
                     <li>
                        <a href="partials/any/profile.html">> <span>Profile</span></a>
                     </li>
                     <li>
                        <a href="partials/any/project.html">> <span>Projects</span></a>
                     </li>
                     <li>
                        <a href="partials/any/login.html">> <span>Login</span></a>
                     </li>
                     <li>
                        <a href="partials/any/404_error.html">> <span>404 Error</span></a>
                     </li>
                  </ul>
               </li>
               <li><a href="partials/any/map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
               <li><a href="partials/any/charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li>
               <li><a href="partials/any/settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li>
            </ul>
         </div>
      </nav>
      <!-- end sidebar -->