<?php
$navigation = array(
    "index.php" => "Home",
    "reviews.php" => "Reviews",
    "insert_review.php" => "Review toevoegen",
    "tags.php" => "Zoeken via tags",
    "genre.php" => "Zoeken via genre",
    "login.php" => "Log in",
)
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Game Media</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                foreach($navigation as $url => $title){
                    if($url == $current){
                        echo  "<li class='active'><a href='{$url}'>{$title}</a></li>";
                    }else{
                        echo  "<li><a href='{$url}'>{$title}</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</nav>