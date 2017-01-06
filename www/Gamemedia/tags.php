<?php
$current = "tags.php";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<div class="container">
     <h1>Tags</h1>
    <div class="tag_blocks">
       <a href="tagFirstperson.php"><button class = "tag_block" id="t1"> First Person</button></a>
       <a href="tagThirdperson.php"><button class = "tag_block" id="t2"> Third Person</button></a>
       <a href="tagFamilie.php"><button class = "tag_block" id="t3"> Familie</button></a>
       <a href="tagSocial.php"><button class = "tag_block" id="t4"> Social</button></a>
       <a href="tag18+.php"><button class = "tag_block" id="t5"> 18+</button></a>
       <a href="tag16+.php"><button class = "tag_block" id="t6"> 16+</button></a>
       <a href="tagIndie.php"><button class = "tag_block" id="t7"> Indie</button></a>
       <a href="tagAction.php"><button class = "tag_block" id="t8"> Action</button></a>
    </div>
</div>

<?php require_once("includes/footer.php"); ?>

