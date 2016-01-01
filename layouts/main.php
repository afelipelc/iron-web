<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Iron Web - Home</title>
<meta name="Keywords" content="railings, staircases, fire escapes, window guards, cellar doors" />
<meta name="Description" content="Set description" />
<link href="assets/css/default.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="assets/js/jquery-1-4-2-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="assets/js/infinite-carousel/jquery.infinitecarousel2_rgmod3-3.js"></script>
<script type="text/javascript" src="assets/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link href="assets/js/infinite-carousel/carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/js/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="assets/js/functions.js"></script>
</head>
<body>
<div id="top_container">
  <div id="header">
    <div id="logo">
      <div id="esp">
        <h1><a href="index-2.html">Set NAME</a></h1>
      </div>
      <h2><a href="index-2.html">(718) XXX-XXXX</a></h2>
    </div>
    <div id="menu">
      <ul>
        <!-- InstanceBeginEditable name="TopMenu" -->
        <li class="first navspace1"><a href="index-2.html" title="" class="current">Home</a></li>
        <li class="navspace2"><a href="about_us.html" title="">About</a></li>
        <li class="navspace3"><a href="gates.html" title="">Products</a></li>
        <li class="navspace4"><a href="contact_us.html" title="">Contact</a></li>
        <!-- InstanceEndEditable -->
      </ul>
    </div>
  </div>
  <!-- end #header -->
</div>
<div id="page">
  <div id="content">
      <?php
      if (file_exists( $path_modulo )) 
        include( $path_modulo );
      else die('Oops ocurrio un error al cargar el módulo <b>'.$modulo.'</b>. No se encontro el archivo <b>'.$conf[$modulo]['archivo'].'</b> en el servidor');
      ?>
  
    </div>
  <!-- end #content -->
  <div id="sidebar">
    <div id="side_menu">
      <div class="side_header">
        <h2>Products</h2>
      </div>
      <ul>
        <li>
          <ul>
            <li><a href="?page=cellardoor">Cellar Doors</a></li>
            <li><a href="?page=drivewaydoor">DriverWay Doors</a></li>
            <li><a href="?page=firescape">Fire scape</a></li>
            <li><a href="?page=railinghanddraling">Railing Handdraling</a></li>
            <li><a href="?page=securitydoor">Security doors</a></li>
            <li><a href="?page=staircase">Staircases</a></li>
            <li><a href="?page=steelfences">Steelfences</a></li>
            <li><a href="?page=structuralsteel">Structural Steel</a></li>
            <li><a href="?page=window">Windows</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="side_contact">
      <div class="side_header">
        <h2>CONTACT US</h2>
      </div>
      <ul>
        <li> <img src="images/storephoto_b4.png" alt="" width="192" height="139" id="store_photo" />
          <ul>
            <li class="firstbullet">2413 Atlantic Ave <br />
              Brooklyn, NY 11233</li>
            <li class="hilite">718-927-4766</li>
            <li>Fax: 718-345-2958</li>
            <li>Email: <a href="mailto:info@a1iron.com">Info@A1Iron.com</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <!-- end #sidebar -->
  <div style="clear: both;height:100px;">&nbsp;</div>
</div>
<!-- end #page -->
<div id="footer">
  <p id="legal">Copyright &copy; 2009-2011 A1 Iron Works. All Rights Reserved. Designed by <a href="http://www.keeninsites.com/">Keen Insites</a></p>
</div>
</body>
</html>
