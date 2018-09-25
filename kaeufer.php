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
                                        <h1 class="sm">...für Kaufinteressenten</h1>
                                        <h2>Vom Immobilientraum zur Traumimmobilie</h2> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 s33 bg-color textbox">
                            <div class="claimbox">
                                <div class="claim subtitle">
                                    <div class="fltext">Wir sind während der gesamten Ankaufsphase Ihr steter persönlicher Begleiter. 
                                        Mit Erfahrung, Empathie sowie den hohe fachlichen und ethischen Anforderungen, die wir an uns selbst stellen, 
                                        betreuen wir Sie nicht nur bis zum Kauf Ihrer Traumimmobilie, sondern bis zu deren Übergabe an Sie.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 s33 bg-color mobil-none">
                            <div class="claimbox">
                                <ul class="menu">
                                    <li class="active"><a href="kaeufer.php">für Kaufinteressenten</a></li>
                                    <li><a href="eigentuemer.php">für Immobilienverkäufer</a></li>
                                    <li><a href="bautraeger.php">für Bauträger</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 teaser-left"> 
                    <div class="row teaser">
                        <div class="col-xs-12 col-md-6 s33 bg-img zaun"></div>
                        <div class="col-xs-12 col-md-6 s33 bg-img kitchen"></div>
                        <div class="col-xs-12 col-md-12 s66 bg-img piano"></div>
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
