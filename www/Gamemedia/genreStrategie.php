<?php
$current = "genreStrategie.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="review-container";>
<h3>Strategie Games</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">

  <li class="reviewHead"><a><h2>A</h2></a></li> 
  <div class="reviewItemDiv">   
  <li class="reviewItem"><a href="reviewpages/ageofempires3.php">Age of Empires 3</a></li>
  </div>


  <li class="reviewHead"><a><h2>C</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/citiesskylines.php">Cities Skylines</a></li>
  <li class="reviewItem"><a href="reviewpages/civilizationv.php">Civilization V</a></li>
  </div>


  <li class="reviewHead"><a><h2>P</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/planetcoaster.php">Planet Coaster</a></li>
  </div>

  <li class="reviewHead"><a><h2>S</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/spore.php">Spore</a></li>
  </div>

  <li class="reviewHead"><a><h2>T</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/totalwarrome2.php">Total War Rome 2</a></li>
  <li class="reviewItem"><a href="totalwarwarhammer.php">Total War Warhammer</a></li>
  </div>

</ul>
</div>



<?php require_once("includes/footer.php"); ?>