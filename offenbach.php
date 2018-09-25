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
                    <h1>WestendQuartiere Offenbach</h1>
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
                    <h3>WestendQuartiere Offenbach</h3> 
                    - 17 ETWs in Offenbacher Westendlage
                    <br>- 2-4 -Zimmer-Wohnungen
                    <br>- 49 bis 157 qm
                    <br>- beste Westendlage Offenbach
                    <br>- klfw55-Standard
                    <br>- Baubeginn erfolgt, Fertigstellung 8/18
                    <br>
                    <br>&rarr; noch 2 verfügbare Wohnungen
                    <br>
                    <br><a href="pdf/BroschuereWestendQuartiere.pdf" target="_blank">Broschüre Westend Quartiere (pdf)</a>
                   
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
            <div class="col-xs-12 col-md-12 s66 bg-img of1"></div>
            <div class="col-xs-12 col-md-6 s33 bg-img of2"></div>
            <div class="col-xs-12 col-md-6 s33 bg-img of3"></div>
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
