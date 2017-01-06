<?php
$current = "tagFamilie.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="review-container";>
<h3>Familie</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">

  <li class="reviewHead"><a><h2>D</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/donkeykong.php">Donkey Kong</a></li>
  </div>
  <li class="reviewHead"><a><h2>P</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/pacman.php">Pacman</a></li>
  <li class="reviewItem"><a href="reviewpages/planetcoaster.php">Planet Coaster</a></li>
  <li class="reviewItem"><a href="reviewpages/pokemongo.php">Pokemon Go</a></li>
  </div>
<li class="reviewHead"><a><h2>S</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/sonic.php">Sonic</a></li>
  <li class="reviewItem"><a href="reviewpages/supermariobross.php">Super Mario Bross</a></li>
  </div>

  <li class="reviewHead"><a><h2>T</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/thesims4.php">The Sims 4</a></li>
  </div>

</ul>
</div>



<?php require_once("includes/footer.php"); ?>