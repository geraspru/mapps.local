<?php
$current = "genreShooter.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="review-container";>
<h3>Shooter Games</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">

<li class="reviewHead"><a><h2>B</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/battlefield1.php">Battlefield 1</a></li>
  </div>

  <li class="reviewHead"><a><h2>C</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/callofduty.php">Call of Duty</a></li>
  </div>

  <li class="reviewHead"><a><h2>D</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/doom.php">Doom</a></li>
  </div>

    <li class="reviewHead"><a><h2>M</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/metalgearsolid.php">Metal Gear Solid V</a></li>
  </div>

    <li class="reviewHead"><a><h2>T</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/thelastofus.php">The Last of Us</a></li>
  <li class="reviewItem"><a href="reviewpages/titanfall.php">Titanfall</a></li>
  </div>


</ul>
</div>



<?php require_once("includes/footer.php"); ?>