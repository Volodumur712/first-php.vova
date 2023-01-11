
<!-- topbar -->
<div class="topbar">
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="full">
                  <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                  <div class="logo_section">
                     <a href="partials/any/index.html"><img class="img-responsive" src="partials/any/images/logo/logo.png" alt="#" /></a>
                  </div>
                  <div class="right_topbar">
                     <div class="icon_info">
                        <ul>
                           <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                           <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                           <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                        </ul>
                        <ul class="user_profile_dd">
                           <li>
                              <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="partials/any/images/layout_img/user_img.jpg" alt="#" /><span class="name_user"><?php
                                 if(isLogin()) {
                                 $user = getCurrentUser();
                                 ?>
                                 <h4><?php echo$user['name']; ?> </h4>
                                 <?php
                                 } else {
                                 ?> 
                                    <h4>Log IN</h4>
                                 <?php
                                 }
                                 ?></span></a>
                              <div class="dropdown-menu">
                                 <?php
                                    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {  // якщо сесія є
                                       echo '<a class="dropdown-item" href="logout.php">Log Out <i class="fa fa-sign-out"></i></a>';
                                       echo '<a class="dropdown-item" href="partials/any/profile.html">My Profile</a>';
                                       echo '<a class="dropdown-item" href="partials/any/settings.html">Settings</a>';
                                    } else {
                                       ?>
                                       <div class="header-button">
                                          <a href="login.php">Login</a>
                                          <a href="register.php">Register</a>
                                          <a class="dropdown-item" href="partials/any/help.html">Help</a>
                                       </div>      
                                       <?php
                                       }
                                    ?>  
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
         <!-- end topbar -->