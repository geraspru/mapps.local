<?php
$current = "index.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>
<div class="container">
             <span><h1>Welkom bij Game Media!</h1></span>
             <div class="titelBlock">
            <a href="login.php"><button class="titels"><h1>Maak je gebruikersnaam aan</h1></button></a>
            <a href="insert_review.php"><button class="titels"><h1>Voeg een review toe</h1></button></a>
             <a href="reviews.php"><button class="titels"><h1>Reviews</h1></button></a>
            <a href="genre.php"><button class="titels"><h1>Zoek via genre</h1></button></a>
             <a href="tags.php"><button class="titels"><h1>Zoek via tag</h1></button></a>
             </div>
        </div>

<?php require_once("includes/footer.php"); ?>