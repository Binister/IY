<header class="header2 sticky-menu">

   <?php 
      if ($_SERVER['PHP_SELF'] !== '/index.php') {
         echo '<div class="header-content">
            <div class="row">
               <div class="large-4 medium-5 medium-potrait-6 small-12 columns">
                  <ul class="header-info">
                     <li><i class="icon-phonealt"></i> +31 (0)10 340 30 80</li>
                     <li><i class="icon-envelope"></i> service@insightyou.com</li>
                  </ul>
               </div>
               <div class="large-8 medium-7 medium-potrait-6 small-hide columns">
                  <ul class="social-header social-icon hover-social">
                     <li><a class="social-twitter" href="#"></a></li>
                     <li><a class="social-linkedin" href="#"></a></li>
                  </ul>
               </div>
            </div>
         </div>';
      }  
   ?>

   <div class="row">
      <div class="large-3 medium-3 medium-potrait-12 columns logo-content">
         <div class="logo">
            <a href="index">   
               <img src="img/insightyou_logo.png" alt="InsightYou Logo" class="retina">
            </a>
         </div>
      </div>

      <nav class="menu-content">
         <ul id="menu" class="sm mo-menu">
            <li class="<?php echo ($_SERVER['PHP_SELF'] == $page2_1.".php" || $_SERVER['PHP_SELF'] == $page2_2.".php" || $_SERVER['PHP_SELF'] == $page2_3.".php" || $_SERVER['PHP_SELF'] == $page2_4.".php" ?' active' : '');?>"><a href="<?php echo $page2_1 ?>">Gedachtegoed</a>
            </li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == $page3.".php" ?' active' : '');?>"><a href="<?php echo $page3 ?>">Succesverhalen</a>
            </li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == $page4_1.".php" || $_SERVER['PHP_SELF'] == $page4_2.".php" || $_SERVER['PHP_SELF'] == $page4_3.".php" || $_SERVER['PHP_SELF'] == $page4_4.".php" ?' active' : '');?>"><a href="<?php echo $page4_1 ?>">Hoe werkt het?</a>
            </li>
            <li class="menu-button no-bullet darkbluebutton m-r-sm <?php echo ($_SERVER['PHP_SELF'] == ''.".php" ?' active' : '');?>"><a href="#">Ik ben trainer / coach</a>
            </li>
            <li class="menu-button no-bullet pinkbutton <?php echo ($_SERVER['PHP_SELF'] == ''.".php" ?' active' : '');?>"><a href="#">Log in</a>
            </li>

         </ul>
      </nav>
   </div>
</header>