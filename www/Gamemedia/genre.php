<?php
$current = "genre.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="container">
     <h1>Genres</h1>
    <div class="blocks">
       <a href="genreRPG.php"><button class = "block" id="b1"> RPG</button></a>
       <a href="genreStrategie.php"><button class = "block" id="b2"> Strategie</button></a>
       <a href="genreHorror.php"><button class = "block" id="b3"> Horror</button></a>
       <a href="genreRacing.php"><button class = "block" id="b4"> Racing</button></a>
       <a href="genreShooter.php"><button class = "block" id="b5"> Shooter</button></a>
       <a href="genreOpenworld.php"><button class = "block" id="b6"> Openworld</button></a>
       <a href="genrePlatform.php"><button class = "block" id="b7"> Platform</button></a>
       <a href="genreMMO.php"><button class = "block" id="b8"> MMO</button></a>
    </div>
</div>
<?php require_once("includes/footer.php"); ?>