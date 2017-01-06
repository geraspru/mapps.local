<?php
$current = "tagIndie.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="review-container";>
<h3>Indie</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">

  <li class="reviewHead"><a><h2>P</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/pokemongo.php">Pokemon Go</a></li>
  </div>
  
  <li class="reviewHead"><a><h2>S</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/spore.php">Spore</a></li>
  </div>

</ul>
</div>



<?php require_once("includes/footer.php"); ?>