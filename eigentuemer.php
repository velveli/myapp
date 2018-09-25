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
                                        <h1 class="sm">...für Immobilienverkäufer</h1>
                                        <h2>Sie möchten Ihre Immobilie im Rhein-Main-Gebiet veräußern? Wir entwickeln das perfekte Konzept dazu.</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 s33 floatright bg-color textbox">
                             <div class="claimbox">
                                <div class="claim subtitle">
                                    <div class="fltext">
                                        Im Einzelnen bieten wir Ihnen an:
                                        <br>
                                        <ul class="lessspace">
                                            <li>Zusammenstellung aller notwendigen Unterlagen der Immobilie</li>
                                            <li>Ermittlung des adäquaten Angebotspreises</li>
                                            <li>Zeitplanung des Verkaufs</li>
                                            <li>Prospekterstellung, Anzeigen (Print und Web)</li>
                                            <li>Besichtigungen und Verhandlungen</li>
                                            <li>Vorbereitung der notariellen Abwicklung</li>
                                            <li>Übergabe an den Käufer</li>
                                        </ul>
                                    </div>
                                </div>
                             </div>

                        </div>
                        <div class="col-xs-12 col-md-6 s33 bg-color mobil-none">
                            <div class="claimbox">
                                 <ul class="menu">
                                        <li><a href="kaeufer.php">für Kaufinteressenten</a></li>
                                        <li class="active"><a href="eigentuemer.php">für Immobilienverkäufer</a></li>
                                        <li><a href="bautraeger.php">für Bauträger</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-md-6 teaser-left"> 
                    <div class="row teaser">
                        <div class="col-xs-12 col-md-6 s33 bg-img efh"></div>
                        <div class="col-xs-12 col-md-6 s33 bg-img senior"></div>
                        <div class="col-xs-12 col-md-12 s66 bg-img house"></div>
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
