<?php
$current = "genrePlatform.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>
<h3>Platform Games</h3>
<div class="review-container";>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Zoek hier voor u spel.">
<ul id="myUL">

 <li class="reviewHead"><a><h2>D</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/donkeykong.php">Donkey Kong</a></li>
  </div>

   <li class="reviewHead"><a><h2>P</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/pacman.php">Pacman</a></li>
  </div>

  <li class="reviewHead"><a><h2>S</h2></a></li>
  <div class="reviewItemDiv">
  <li class="reviewItem"><a href="reviewpages/sonic.php">Sonic</a></li>
  </div>

</ul>
</div>



<?php require_once("includes/footer.php"); ?>


