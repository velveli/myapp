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


<div class="claimbox">
  <ul class="menu">
    <li <?php if ($fileName == "offenbach") echo 'class="active"' ?>><a href="offenbach.php">WestendQuartiere Offenbach</a></li>
    <li <?php if ($fileName == "muehlheim") echo 'class="active"' ?>><a href="muehlheim.php">Schöne Aussicht Mühlheim</a></li>
    <li <?php if ($fileName == "liebigstr") echo 'class="active"' ?>><a href="liebigstr.php">LiebigCarree Langen</a></li>
    <li <?php if ($fileName == "coming") echo 'class="active"' ?>><a href="coming.php">„coming soon“</a></li>
  </ul>
</div> 


