<?php
    ob_start('ob_gzhandler');
    error_reporting(E_ERROR);
    require_once 'rwdGate.php';   

    define(AFFILIATE_ID, 'f7f324bdd9a544'); // Affiliate Id given by support
    define(FLIGHT_WIDGET, 129869448); 

    $rwdgate = new rwdGate(AFFILIATE_ID);
    $widgets =  [FLIGHT_WIDGET, 129874768, 129874813, 129874789, 129874308]; 
    $rwdgate->fetch($widgets);

    if ($rwdgate->isRawResult()){
        $rwdgate->printRawResult(); 
        die();
    }

  $host = '//'. ( ($_SERVER['HTTP_HOST'] == "localhost") ? "localhost/test/agil/" : $_SERVER['HTTP_HOST']."/");
?>
<!DOCTYPE html>
<?php echo $rwdgate->getSection('HEAD'); ?>
<?php $list = $rwdgate->getSectionsList(); ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AGIL</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="./css/fa/css/all.css"> -->
  <script src="https://kit.fontawesome.com/967bc91efc.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="./css/fa.min.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/mw-rwd.css">
 
  
</head>

<body>
  <header>
    <section id="top-nav-menu">
      <div class="container">
        <div class="contact">
          <span>
            <i class="fa fa-phone"></i>
            For Support? Call us:
            <strong>
              +234 (0) 803 568 4895 | +234 (0) 803 568 4895
            </strong>
          </span>
          <span>
            <a href="mailto:sales@justnet.com.ng">
              Mail us: <i class="fa fa-envelope-o"></i>
              <strong>
                sales@justnet.com.ng
              </strong>
            </a>
          </span>
        </div>
        <span class="sign-in">
          <a href="#">
            <i class="fa fa-sign-in-alt"></i> &nbsp;&nbsp;
            Sign in
          </a>
        </span>
      </div>
    </section>
    <section id="navbar" class="navbar">
      <div class="container">
        <div class="row">
          <div id="logo">
            <span><img src="./img/agil-logo-main.png" /></span>
          </div>
          <span class=" hamburger">
            <i class="fa fa-bars"></i>
          </span>
          <div class="navlinks">
            <a href="#"> Home</a>
            <a href="#"> Hotel </a>
            <a href="#"> Vacation Packages</a>
            <a href="#"> Visa</a>
            <a href="#"> About Us</a>
            <a href="#"> Contact Us</a>
          </div>
        </div>
      </div>
    </section>
    <section id="banner">
      <div class="container">
        <div class="row app-wrapper">
          <div data-app>
         

          <!-- Later -->
            		   <?php
                    if (in_array(FLIGHT_WIDGET, $list ))     {         
                        echo $rwdgate->getSection(FLIGHT_WIDGET);     
                    }  
                ?>

                <?php echo $rwdgate->getSection('BODY'); ?>
                <?php echo $rwdgate->getSection('FOOTER'); ?>
          </div>
          <div class="ad-slider">
                <!-- Slider goes here -->
                <!-- <h1> Slider </h1> -->
                <ul>
                  <li class="slide"> <img src="./img/banner1.png"></li>
                  <li class="slide"> <img  src="./img/banner2.png"></li>
                  <li class="slide"> <img src="./img/new-agil.png"></li>
                </ul>
            
          </div>
  
        </div>
      </div>
    </section>

  </header>
  <section id="widget-area">
  
    <div class="container">
      
      <!-- <h1> Start widget </h1> -->
      <div  class='widget' style="">
        
        <?php
            $list = $rwdgate->getSectionsList();
          
            if (in_array('129874768', $list ))
            {
                echo $rwdgate->getSection('129874768');
            }
        ?>
      </div>
      <div class='widget' style="">
        <?php
            $list = $rwdgate->getSectionsList();
          
            if (in_array('129874768', $list ))
            {
                echo $rwdgate->getSection('129874813');
            }
        ?>
      </div>
      <div class='widget' style="">
        <?php
            $list = $rwdgate->getSectionsList();
          
            if (in_array('129874768', $list ))
            {
                echo $rwdgate->getSection('129874789');
            }
        ?>
      </div>
          
                                  
      <!-- <h1> stop widget </h1> -->
    </div>
  </section>

  <!-- Whatsapp -->
  <span class="social whatsapp">
    <a href="https://wa.me/2349060402887" target="_blank"><i class="fa fa-whatsapp"></i></a>
  </span>

  <section id="process-visa">
    <div class="container-fluid">
      <div class="row">
        <div id="visa-image">
          <img src="./img/new-agil.png" class="visa-ad" alt="Start your visa booking" />
        </div>
        <div class="visa-cta">
          <h1> Start your dubai visa process now</h1>
          <!-- <article>
            Start Start your dubai visa process now
            Start your dubai visa process now
            Start your dubai visa process now
          </article> -->
          <a href="#" class="cta">Begin</a>
        </div>
      </div>
    </div>
  </section>
  <section id="footer">
    <div class="footer-content-wrapper">
      <div class="footer-card">
        <img src="./img/invest.png" />
      </div>
      <div class="footer-card">
        <h3> Quality Service</h3>
        <article>

          With our expert team and dynamic solutions,
          we sell any product across the African market.

        </article>

      </div>
      <div class="footer-card">
        <h3> Get Support</h3>
        <ul>
          <li> <i class="fa fa-envelope"></i> &nbsp;&nbsp;info@agil.ng </li>
          <li> <i class="fa fa-clock"></i> &nbsp;&nbsp; Mon-Fri: 9:00 AM – 6:00 PM</li>
          <li> +234 (0) 815 505 3000</li>
          <li> +234 (0) 815 505 4000</li>
        </ul>

      </div>
      <div class="footer-card">
        <h3> Find Us</h3>
        <address>
          <i class="fa fa-map-marker"> &nbsp;&nbsp;</i>25, Ogunnusi road, Ogba-Aguda ( Afeez Bus stop) <br>
          Opposite Gt Bank, Aguda,<br>
          Next to D’Place Eatery, Ikeja, Lagos.

        </address>


      </div>
    </div>

  </section>
  <div class="footnote">
    <span class="copyright"> &copy; AGIL 2019-<?php echo date("Y");?> | All Rights Reserved  </span>
    <small><a href="https://lightworthng.github.io" target="_blank">Lightworth Computing</a></small>
  </div>
  <script src="./js/hamburger.js" type="text/javascript"></script>
  <script src="./js/mobile-web.js" type="text/javascript"></script>
  <script src="./js/ad-slider.js" type="text/javascript"></script>
</body>

</html>