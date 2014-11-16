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
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/biologische-identiteit.php' ? ' active' : '');?>"><a href="biologische-identiteit">Gedachtegoed</a>
            </li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/succesverhalen.php' ? ' active' : '');?>"><a href="succesverhalen">Succesverhalen</a>
            </li>
            <li class="<?php echo ($_SERVER['PHP_SELF'] == '/dna-analyse.php' ? ' active' : '');?>"><a href="dna-analyse">Hoe werkt het?</a>
            </li>
         </ul>
         <ul class="header-info1">   
            <a href=""><li class="phone-info darkbluebutton">
               Ik ben trainer / coach
            </li></a>
            <a href=""><li class="phone-info pinktext pinkborder pinkbutton">
               Log in
            </li></a>
         </ul>
      </nav>
   </div>
</header>