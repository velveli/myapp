<?php
require_once("data/head.php");
?>
<body>
  <!-- Fixed navbar -->
  <div id="wrap">
    <?php
    require_once("data/nav.php");
    ?>
    <div class="container stage">
      <div class="row">
        <div class="col-xs-12 col-md-6 teaser-left"> 
          <div class="row teaser">
            <div class="col-xs-12 col-md-6 s33 bg-img logo mobil-none">
              <a href="index.php">
                <div class="rollcontainer"></div>
              </a>
            </div>
            <div class="col-xs-12 col-md-6 s33 bg-color mobil-none"></div>
            <div class="col-xs-12 col-md-6 s33 bg-color textbox">
              <div class="claimbox">
                <div class="claim subtitle">
                  <div class="fltext">
                    <h1>Schöne Aussicht - Mühlheim</h1>
                  </div>
                  <br>
                  <br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 s33 floatright bg-color textbox">
              <div class="claimbox">
                <div class="claim subtitle">
                  <div class="fltext">
                    <h3>Schöne Aussicht - Mühlheim</h3> 
                    22 moderne ETWs mit Mainblick in Mühlheim

                    <br>
                    <br>
                    <h4>Öffnungszeiten des Infocenters:</h4>
                    Dietesheimer Straße 125 in 63165 Mühlheim am Main 
                    <br>Sonntags von 17-19 Uhr und nach Vereinbarung
                    <br>
                    <br><a href="http://www.schoene-aussicht-muehlheim.de/" target="_blank">Projektseite Schöne Aussicht Mühlheim</a>
                    <br>
                    <br><a href="pdf/ExposeMuehlheim.pdf" target="_blank">Expose Mühlheim (pdf)</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 s33 bg-color mobil-none">
              <?php
              require_once("data/subnav.php");
              ?>
            </div>
          </div> 
        </div> 
        <div class="col-xs-12 col-md-6 teaser-left"> 
          <div class="row teaser">
            <div class="col-xs-12 col-md-12 s66 bg-img muehl1"></div>
            <div class="col-xs-12 col-md-6 s33 bg-img muehl2"></div>
            <div class="col-xs-12 col-md-6 s33 bg-img muehl3"></div>
          </div>
        </div>

      </div> <!-- /container -->
    </div>
  </div>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
