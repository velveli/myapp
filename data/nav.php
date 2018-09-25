<?php
$filePath = $_SERVER['PHP_SELF'];
$fileName = basename($filePath, ".php");
?>

<!-- 
	
filter_input(INPUT_SERVER, 'PHP_SELF') instead of $_POST['var_name']
filter_input_array(INPUT_POST) instead of $_POST

 filter_input(INPUT_POST, 'var_name') instead of $_POST['var_name']
filter_input_array(INPUT_POST) instead of $_POST
-->


<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-bottom">
  <div class="container footer">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php"><img src="img/LogoAINSLEY_grauS.png"></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($fileName == "about") echo 'class="active"' ?>><a href="about.php">Über uns</a></li>
        <li class="dropdown  <?php if ($fileName == "leistungen" || $fileName == "kaeufer" || $fileName == "eigentuemer" || $fileName == "bautraeger") echo 'active' ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Leistungen <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="leistungen.php">Leistungen</a></li>
             <li><a href="kaeufer.php">Für Kaufinteressenten</a></li>
            <li><a href="eigentuemer.php">Für Immobilienverkäufer</a></li>
            <li><a href="bautraeger.php">Für Bauträger</a></li>
          </ul>
        </li>
        <!-- li <?php if ($fileName == "leistungen") echo 'class="active"' ?>><a href="leistungen.php">Leistungen</a></li -->
        <!-- li <?php if ($fileName == "neubau_ohlengarten") echo 'class="active"' ?>><a href="neubau_ohlengarten.php">Neubau</a></li -->
        
       
        
        <li class="dropdown  <?php if ($fileName == "liebigstr" || $fileName == "muehlheim" || $fileName == "coming" || $fileName == "offenbach") echo 'active' ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Neubau <b class="caret"></b></a>
          <ul class="dropdown-menu">
             <li><a href="offenbach.php">offenbach</a></li>
             <li><a href="muehlheim.php">muehlheim</a></li>
             <li><a href="liebigstr.php">LiebigCarree Langen</a></li>
             <li><a href="coming.php">„coming soon“</a></li>
          </ul>
        </li>
        
        
        <li class="dropdown  <?php if ($fileName == "privatimmobilien" || $fileName == "privatimmo2") echo 'active' ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Privatimmobilien <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="privatimmobilien.php">The Loft</a></li>
             <li><a href="privatimmo2.php">Stylish Pure House</a></li>
          </ul>
        </li>
        <li <?php if ($fileName == "referenzen") echo 'class="active"' ?>><a href="referenzen.php">Referenzen</a></li>
        <li <?php if ($fileName == "kontakt") echo 'class="active"' ?>><a href="kontakt.php">Kontakt</a></li>
        <li <?php if ($fileName == "impressum") echo 'class="active"' ?>><a href="impressum.php">Impressum</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
