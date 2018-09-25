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
                    <h1>„coming soon“</h1>
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

                    <h3>Palais am Park
                      <br>Dreieichring 60
                      <br>63067 Offenbach</h3> 
                    <br>- 14 elegante Stadtwohnungen von 70 qm bis 150 qm
                    <br>- 2-, 3- und 4 Zimmer Wohnungen
                    <br>- kfw-Effizienzhaus 55
                    <br>- moderne Badarchitektur
                    <br>- großzügige Balkone
                    <br>- Penthouse mit 100 qm Dachterrasse 
                    <br>- Vertriebsstart April 2018
                    <br>
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
            <div class="col-xs-12 col-md-12 s66 bg-img baustelle2"></div>
            <div class="col-xs-12 col-md-6 s33 bg-img ffm"></div>
            <div class="col-xs-12 col-md-6 s33 bg-img rolle2"></div>
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
