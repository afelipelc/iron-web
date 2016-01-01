<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Iron industries</title>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="assets/js/jquery-1-4-2-min.js"></script>
<?php
  //load original slider
  if($modulo === 'home')
  {
?>
<link rel="stylesheet" href="assets/css/responsiveslides.css">
<script src="assets/js/responsiveslides.min.js"></script>
      <script>
        // You can also use "$(window).load(function() {"
          $(function () {
            // Slideshow 1
            $("#slider1").responsiveSlides({
              maxwidth: 1600,
              speed: 1000,
            });
      });
      </script>
<?php
}else
{
  //load general slider
?>

<script type="text/javascript" src="assets/js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="assets/js/infinite-carousel/jquery.infinitecarousel2_rgmod3-3.js"></script>
<script type="text/javascript" src="assets/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link href="assets/js/infinite-carousel/carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/js/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="assets/js/functions.js"></script>

<?php
}
?>

</head>
<body>
<script async type='text/javascript' src='//cdn.fancybar.net/ac/fancybar.js?zoneid=1502&serve=C6ADVKE&placement=w3layouts' id='_fancybar_js'></script>


    <div class="header">
    <div class="wrap">
          <div class="logo">
      <a href="index.html"><img src="assets/images/logo.png" alt=""/></a>
      </div>
    <ul class="menu">
         <li <?php echo $modulo == 'home' ? 'class="active"' : '' ?>><a href="?page=home">HOME</a> </li>
           <li <?php echo $modulo == 'about' ? 'class="active"' : '' ?>><a href="?page=about">ABOUT</a> </li>
           <li <?php echo $modulo == 'services' ? 'class="active"' : '' ?>><a href="?page=services">SERVICES</a>  </li>
           <li <?php echo $modulo == 'products' ? 'class="active"' : '' ?>><a href="?page=cellardoor">PRODUCTS</a> </li>
            <li <?php echo $modulo == 'contact' ? 'class="active"' : '' ?>><a href="?page=contact">CONTACT</a> </li>
              <div id="lavalamp"> </div>
            <div class="clear"> </div>
        </ul>
           <div class="clear"> </div>
    </div>
    <div class="clear"> </div>
    </div>
      <!--start-image-slider---->
      <?php
        //load original slider only at home
        if($modulo === 'home')
        {
      ?>
          <div class="image-slider">
            <!-- Slideshow 1 -->
              <ul class="rslides" id="slider1">
                <li><img src="assets/images/slider2.jpg" alt=""></li>
                <li><img src="assets/images/slider3.jpg" alt=""></li>
                <li><img src="assets/images/slider1.jpg" alt=""></li>
              </ul>
             <!-- Slideshow 2 -->
          <div class="clear"> </div>
          <!--End-image-slider---->
          <?php
        }
        ?>
    </div>
    <div class="main">  
      <div class="wrap">
<div class="content">

    <?php
      if (file_exists( $path_modulo )) 
        include( $path_modulo );
      else die('Oops ocurrio un error al cargar el módulo <b>'.$modulo.'</b>. No se encontro el archivo <b>'.$conf[$modulo]['archivo'].'</b> en el servidor');
      ?>  

<div class="clear"></div>
</div>
<div class="sidebar">
  <div class="sidebar-grids">
      <h3>Our Products</h3>
          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=cellardoor"><img src="content/galleries/cellardoor/thmb_17.jpg" title="Cellar doors" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=cellardoor">Cellar doors</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>
          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=drivewaydoor"><img src="content/galleries/drivewaydoors/thmb_1.jpg" title="DriverWay Doors" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=drivewaydoor">DriverWay Doors</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>
          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=firescape"><img src="content/galleries/firescape/thmb_2.jpg" title="Fire scape" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=firescape">Fire scape</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>
          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=railinghanddraling"><img src="content/galleries/railinghanddraling/thmb_2.jpg" title="Railing Handdraling" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=railinghanddraling">Railing Handdraling</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>

          <?php
            if($modulo != 'home' && $modulo != 'about' && $modulo != 'contact' && $modulo != 'services')
            {
          ?>

          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=securitydoor"><img src="content/galleries/securitydoor/thmb_10.jpg" title="Security doors" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=securitydoor">Security doors</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>
          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=staircase"><img src="content/galleries/staircase/thmb_41.jpg" title="Staircases" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=staircase">Staircases</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>
          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=steelfences"><img src="content/galleries/steelfences/thmb_38.jpg" title="Steelfences" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=steelfences">Steelfences</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>
          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=structuralsteel"><img src="content/galleries/structuralsteel/thmb_27.jpg" title="Structural Steel" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=structuralsteel">Structural Steel</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>
          <div class="sidebar-grid">
            <div class="sidebar-grid3">
              <a href="?page=window"><img src="content/galleries/window/thmb_16.jpg" title="Windows" alt=""></a>
            </div>
            <div class="sidebar-grid4">
              
            <ul>
              <li><h4><a href="?page=window">Windows</a></h4></li>
              <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></li>
            </ul>
            </div>
              <div class="clear"> </div>
          </div>

          <?php
        }
        ?>
                      <div class="clear"> </div>
          
</div>
 <div class="clear"> </div>
</div>  
 <div class="clear"> </div>
 
</div>
</div>
<div class="footer-bg">
<div class="wrap">
  <div class="footer-grid">
    <h3>About Us</h3>
    <ul>
      <li><a href="#">Online Shopping</a></li>
      <li><a href="#">Finance Service</a></li>
      <li><a href="#">Marketing</a></li>
      <li><a href="#">Economic News</a></li>
      <li><a href="#">Business Help</a></li>
    </ul>
  </div>
  <div class="footer-grid">
    <h3>Pages</h3>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Our Services</a></li>
      <li><a href="#">Contact Our Team</a></li>
      <li><a href="#">Short Code</a></li>
    </ul>
  </div>
  <div class="footer-grid">
    <h3>Recent Post</h3>
    <ul>
    <li class="active1"><a href="#">Join Our Facebook Page</a></li>
    <li><a href="#">Join Our Twitter</a></li>
    <li><a href="#">Rss Feed</a></li>
    <li><a href="#">Follow Us Google+</a></li>
    </ul>
  </div>
  <div class="footer-grid1">
    <h3>News-Letters</h3>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque nulla ipsum, pretium ac ultrices non, tincidunt id quam. Mauris dignissim dolor quis risus molestie et ,</p>
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<div class="clear"> </div>
<div class="copy-right">
  <p> 2013 Iron. | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
</div>
<div class="clear"></div>
</body>
</html>