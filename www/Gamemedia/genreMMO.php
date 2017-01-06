<?php
$current = "genreMMO.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="review-container";>
<h3>MMO Games</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">

  <li class="reviewHead"><a><h2>P</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/pokemongo.php">Pokemon Go</a></li>
  </div>

  <li class="reviewHead"><a><h2>R</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/runescape.php">RuneScape</a></li>
  </div>

  <li class="reviewHead"><a><h2>W</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/worldofwarcraft.php">World of Warcraft</a></li>
  </div>

</ul>
</div>





<?php require_once("includes/footer.php"); ?>