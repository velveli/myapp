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
                    <h1>Privatimmobilien</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 s33 bg-color textbox">
              <div class="claimbox">
                <div class="claim fltext">
                  The Loft - Bestlage im Nordend-Ost
                </div>
              </div>
            </div>

            <div class="col-xs-12 col-md-6 s33 bg-color mobil-none">

                            <div class="claimbox">
                                <ul class="menu">
                                   
                                  <li><a href="privatimmobilien.php">The Loft</a></li>
                                  <li class="active"><a href="privatimmo2.php">Stylish Pure House</a></li>
                                </ul>
                            </div>     
                        </div>

            <div class="col-xs-12 col-md-6 s33 bg-color mobil-none"></div>
          </div>
        </div>


        <div class="col-xs-12 col-md-6 teaser-left"> 
          <div class="row teaser">
            <div class="col-xs-6 s33 bg-img loft1"></div>
            
            <div class="col-xs-6 s100 floatright bg-img anzeige">
                <div class="claimbox">
                    <div class="claim">
                    <img src="img/loftAnzeige_vk2.jpg">
                   </div>
                </div>
            </div>
            <div class="col-xs-6 s33 bg-img loft2"></div>
            <div class="col-xs-6 s33 bg-img loft3"></div>
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
