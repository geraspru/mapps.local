<?php
$current = "genreRacing.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="review-container";>
<h3>Racing Games</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">
  <li class="reviewHead"><a><h2>F</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/f1_2016.php">F1 2016</a></li>
  <li class="reviewItem"><a href="reviewpages/forza3.php">Forza 3</a></li>
  </div>

  <li class="reviewHead"><a><h2>N</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/needforspeed.php">Need for Speed</a></li>
  </div>
</ul>
</div>



<?php require_once("includes/footer.php"); ?>