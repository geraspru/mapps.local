<?php
$current = "tag16+.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="review-container";>
<h3>16+</h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">

  <li class="reviewHead"><a><h2>A</h2></a></li> 
  <div class="reviewItemDiv">   
  <li class="reviewItem"><a href="reviewpages/arksurvival.php">Ark Survival</a></li>
  </div>

  <li class="reviewHead"><a><h2>D</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/diablo3.php">Diablo 3</a></li>
  </div>
  
  <li class="reviewHead"><a><h2>T</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/totalwarrome2.php">Total War Rome 2</a></li>
  <li class="reviewItem"><a href="totalwarwarhammer.php">Total War Warhammer</a></li>
  </div>

</ul>
</div>



<?php require_once("includes/footer.php"); ?>