<div class="boxed"><!-- InstanceBeginEditable name="MainContent" -->
      <h2>DriverWay doors</h2>
      <div class="content">
        <p>Set text here.</p>
      </div>
</div>

<div class="boxed" id="Gallery0">
  <h2>DriverWay Doors Gallery</h2>
  <div class="photos"> 
      <div id="carousel">
        <ul>
          <?php
            $root = $_SERVER['DOCUMENT_ROOT'];
            $files = scandir($root.'/iron/content/galleries/drivewaydoors/',1);
            foreach ($files as $file) {
              if (strpos($file,'jpg') !== false && strpos($file,'thmb') === false) {
                echo '<li><img src="content/galleries/drivewaydoors/'.$file.'" width="470" height="290" /></li>';
              }
            }
          ?>
        </ul>
      </div>
  </div>
</div>