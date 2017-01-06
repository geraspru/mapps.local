<?php
$current = "genreOpenworld.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="review-container";>
<h3>Openworld Games</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">

<li class="reviewHead"><a><h2>A</h2></a></li> 
  <div class="reviewItemDiv">   
  <li class="reviewItem"><a href="reviewpages/arksurvival.php">Ark Survival</a></li>
  <li class="reviewItem"><a href="reviewpages/assassinscreed3.php">Assassins Creed 3</a></li>
  <li class="reviewItem"><a href="reviewpages/assassinscreed4.php">Assassins Creed 4</a></li>
  </div>


  <li class="reviewHead"><a><h2>F</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/fallout4.php">Fallout 4</a></li>
  <li class="reviewItem"><a href="reviewpages/farcry3.php">Far Cry 3</a></li>
  </div>

  <li class="reviewHead"><a><h2>G</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/grandtheftauto_V.php">Grand Theft Auto V</a></li>
  </div>

   <li class="reviewHead"><a><h2>M</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/minecraft.php">Minecraft</a></li>
  </div>

    <li class="reviewHead"><a><h2>S</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/skyrim.php">Skyrim</a></li>
  </div>

  <li class="reviewHead"><a><h2>W</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/watch_dogs.php">Watch_Dogs</a></li>
  </div>

</ul>
</div>





<?php require_once("includes/footer.php"); ?>