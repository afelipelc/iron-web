<div class="about-grids">
      <h3>Firescape</h3>
      <div class="about-grid">
        <p>Set text here.</p>

      <div class="clear"></div>
      <div class="boxed gallery" id="Gallery0">
        <h4>Firescape Gallery</h4>
        <div class="photos"> 
            <div id="carousel">
              <ul>
                <?php
                  $files = scandir($gallerypath.'firescape/',1);
                  foreach ($files as $file) {
                    if (strpos($file,'jpg') !== false && strpos($file,'thmb') === false) {
                      echo '<li><img src="content/galleries/firescape/'.$file.'" width="470" height="290" /></li>';
                    }
                  }
                ?>
              </ul>
            </div>
        </div>
      </div>
</div>
</div>