<?php
$current = "totalwarwarhammer.php";
require_once("includes/header.php");
require_once("includes/nav.php");
require_once("functions/review.php");
require_once("functions/game.php");
require_once("functions/genre.php");
require_once("functions/tags.php");
require_once("functions/taggame.php");


if(isset($_GET["delete_id"])){
    //KNOP DELETE GELINKT
    require("functions/connection.php");
    $review_id = $_GET["delete_id"];
    //VERWIJDER RECORD MET DAT ID
    try{
        $stmt = $db->prepare("DELETE FROM review WHERE review_id=:review_id");
        $stmt->bindParam(":review_id",$review_id);
        $stmt-> execute();

        $message = "Gebruiker is gewist, ai!";
		//connectie sluiten
		$db=null;


    }catch(PDOExeption $e){
        $message = $e;
    }
}
?>


   <div class="container">
        <h1>Total War: Warhammer</h1>

        <table class="table table-striped table-bordered">
            <tr>
                <th>Titel game </th>
                <th>Genre</th>
                <th>tags</th>
                <th>Review</th>
                <th>Auteur</th>
                <th>Datum</th>
                <th>Profielfoto</th>
                <th>Acties</th>
            </tr>

            <?php
              $allReviews = getAllReviews();
              foreach($allReviews as $row){
                  echo "<tr>";
                    echo "<td>{$row['titel']}</td>";
                    echo "<td>{$row['genre_id']}</td>";
                    echo "<td>{$row['taggame_id']}</td>";
                    echo "<td>{$row['tekst']}</td>";
                    echo "<td>{$row['voornaam']} {$row['achternaam']}</td>";
                    echo "<td>{$row['datum']}</td>";
                    echo "<td><img class='profielfoto'
                                src='profielfoto/{$row['profielfoto']}'
                                 alt='Alternatief profiel foto' style='width:50px;height:50px;'>
                        </td>";
                    echo "<td>
                            <a href='update.php?edit_id={$row['review_id']}'>
                             <span class='glyphicon glyphicon-pencil'></span>
                            </a>
                             <a href='totalwarwarhammer.php?delete_id={$row['review_id']}'>
                             <span class='glyphicon glyphicon-trash'></span>
                            </a>
                        </td>";
                  echo "</tr>";
              }
            ?>

       
        </table>
        <table lass="table table-striped table-bordered">
			<a href="reviews.php"><input id="back" name="back" type="submit" class="form-control" value="Ga terug naar reviews"></a>
        </table>

        
        <?php
        if(!empty($message)){
            echo "<p class='bg-success' >{$message}</p>";
        }
        ?>
    </div>
    

<?php require_once("includes/footer.php"); ?>


