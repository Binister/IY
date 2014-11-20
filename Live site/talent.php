<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="keywords" content="HTML5 Template" />
   <meta name="description" content="Maleo - Multipurpose HTML5 Template">
   <meta name="author" content="prodigystudio.net">

   <title>InsightYou - Het gedachtegoed van InsightYou</title>
   
   <!-- Reset CSS -->
   <link rel="stylesheet" href="css/reset.css" />
   
   <!-- Retina Bookmark Icon -->
   <link rel="apple-touch-icon-precomposed" href="apple-icon.png" />

   <!-- Maleo Framework CSS -->
   <link href="css/whhg.css" rel="stylesheet" />
   <link href="css/social-icon.css" rel="stylesheet" />
   <link href="css/flat-icon.css" rel="stylesheet" />
   <link href="css/maleo.css" rel="stylesheet" />
   
   <!-- Maleo Component CSS -->
   <link href="css/fancybox.css" rel="stylesheet" />
   <link href="css/components/menu.css" rel="stylesheet" />
   <link href="css/components/mediaplayer.css" rel="stylesheet" />
   <link href="js/rs-plugin/css/settings.css" rel="stylesheet" media="screen" />
   <link href="css/revolution-responsive.css" rel="stylesheet" media="screen" />

   <!-- Style CSS -->
   <link href="css/style.css" rel="stylesheet" />
       
   <!-- Maleo Theme -->
   <link href="css/insightyou.css" id="theme" rel="stylesheet">

   <!-- Favicon -->
   <link rel="shortcut icon" href="img/favicon.ico" />

   <!-- Google Webfont -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet'>
   <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>  
   <link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet'>
   <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic' rel='stylesheet'>
      
   <!-- Additional Javascript --> 
   <script src="js/modernizr.js"></script>

</head>

<body>
   <div id="mo-wrapper">
      <?php
      require_once 'paginas.php';
      require_once 'menu.php';
      require_once '2_submenu.php';
      ?>

      <section class="mo-content bg-full">
         <div class="row p-b-sm">
            <div class="large-12 column">
               <h4>Ontdek waar jouw talenten vandaan komen.</h4>
               <p>Het gaat niet om het voorspellen van talent, maar jouw talenten succesvol in te leren zetten en uit te bouwen. Jouw biologische identiteit ontwikkeld zich in vier levensfasen. Wij bieden je inzicht in de fase waar jouw talenten vandaan komen, zodat je in staat bent het maximale uit jezelf te halen. </p>
            </div>
         </div>
      </section>

      <section class="mo-content" id="process">

         <div class="row">
            <div class="large-3 medium-potrait-12 small-12 columns">
               <div class="feature-right process">
                  <div class="no-shape mo-animate" data-animate="bounceIn" data-delay="200">
                     <img src="img/evolutie-1.png" alt="">
                  </div>    
                  <h5 class="m-t-none">Biologisch startpunt</h5>
                  <h6>DNA</h6> 
                  <p>
                     Ons DNA is afkomstig van onze ouders en vormt het fundament van wie we zijn en waar we vandaan komen. Het is de blauwdruk voor alle stofjes in ons lichaam - waaronder in de hersenen - en speelt dus een belangrijke rol in wie we zijn en wat we doen.
                  </p>
               </div>
            </div>

            <div class="large-3 medium-potrait-12 small-12 columns">
               <div class="feature-right process">
                  <div class="no-shape mo-animate" data-animate="bounceIn" data-delay="400">
                     <img src="img/evolutie-2.png" alt=""> 
                  </div>  
                  <h5 class="m-t-none">Biologische ontwikkeling</h5>
                  <h6>Hechtingsstijlen</h6> 
                  <p>
                     In de eerste paar jaar van ons leven passen onze biologische systemen zich aan aan de omgeving waarin we opgroeien. Onze ouders en opvoeding spelen hierin een belangrijke rol, maar de rest van onze sociale omgeving natuurlijk ook.
                  </p>
               </div>
            </div>

            <div class="large-3 medium-potrait-12 small-12 columns">
               <div class="feature-right process">
                  <div class="no-shape mo-animate" data-animate="bounceIn" data-delay="600">
                     <img src="img/evolutie-3.png" alt="">  
                  </div>    
                  <h5 class="m-t-none">Persoonlijke ontwikkeling</h5>
                  <h6>Drijfveren & motivaties</h6> 
                  <p>
                     Vervolgens gaan we ons als persoon ontwikkelen. Denk hierbij aan de vorming van bepaalde voorkeuren, motivaties en drijfveren.
                  </p>
               </div>
            </div>

            <div class="large-3 medium-potrait-12 small-12 columns">
               <div class="feature-right process">
                  <div class="no-shape mo-animate" data-animate="bounceIn" data-delay="800">
                     <img src="img/evolutie-4.png" alt="">  
                  </div>    
                  <h5 class="m-t-none">Professionele ontwikkeling</h5>
                  <h6>Commercieel fundament</h6> 
                  <p>
                     Onze biologische en persoonlijke ontwikkeling moet je interpreteren in de professionele context waarin we actief zijn. Daarom brengen wij ook commerciële drives in kaart. Zo komen we tot een totaalbeeld.
                  </p>
               </div>
            </div>
         </div>
      </section>

      <?php 
         require_once 'cta_block.php'; 
      ?>
      
      <?php 
         require_once 'footer.php'; 
      ?>

   </div>
   
   <!-- javascript here -->
   <script src="js/jquery.min.js"></script>
   <script src="js/jquery.queryloader2.min.js"></script>
   <script src="js/jquery.smartmenus/jquery.smartmenus.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.fancybox.js"></script>
   <script src="js/jquery.fancybox-media.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/jquery.retina.js"></script>

   <!-- javascript plugin -->
   <script src="js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
   <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
   <script src="js/jquery.easyResponsiveTabs.js"></script>
   <script src="js/jquery.parallax.js"></script>
   <script src="js/jquery.countTo.js"></script>
   <script src="js/masonry.min.js"></script>
   <script src="js/jquery.player.js"></script>
   <script src="js/instafeed.min.js"></script>

   <!-- javascript core --> 
   <script src="js/maleo.js"></script>

   <script type="text/javascript">
      jQuery(document).ready(function($){
         var userFeed = new Instafeed({
            limit: 1,
            get:"tagged",
            tagName: "nature",
            resolution: 'low_resolution',
            clientId: 'efe535f27b5b49a8a0ce7521574e8fb4',
            template: '<a href="{{link}}"><img src="{{image}}" /></a>'
         });

         userFeed.run();

         $('.banner').revolution({
            delay:8000,
            startwidth:1190,
            startheight:510,
            hideThumbs:1,
            navigationType:"none",                  // bullet, thumb, none
            navigationArrows:"solo",                // nexttobullets, solo (old name verticalcentered), none
            navigationStyle:"navbar",               // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
            navigationHAlign:"center",              // Vertical Align top,center,bottom
            navigationVAlign:"bottom",              // Horizontal Align left,center,right
            navigationHOffset:0,
            navigationVOffset:0,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:55,
            // soloArrowLeftVOffset:-10,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:55,
            // soloArrowRightVOffset:-10,
            touchenabled:"on",                      // Enable Swipe Function : on/off
            onHoverStop:"off",                      // Stop Banner Timet at Hover on Slide on/off
            stopAtSlide:-1,                         // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
            stopAfterLoops:-1,                      // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
            hideCaptionAtLimit:0,                   // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
            hideAllCaptionAtLilmit:0,               // Hide all The Captions if Width of Browser is less then this value
            hideSliderAtLimit:0,                    // Hide the whole slider, and stop also functions if Width of Browser is less than this value
            shadow:0,                               //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
            fullWidth:"on"                          // Turns On or Off the Fullwidth Image Centering in FullWidth Modus
         });

         $('.blog-masonry').masonry({});
      });
   </script>
</body>
</html>