<?php
$current = "insert_review.php";
require_once("includes/header.php");
require_once("includes/nav.php");
require_once("functions/game.php");
require_once("functions/auteur.php");
require_once("functions/review.php");
if(isset($_POST['new'])){
$game_id = $_POST['game'];
$author_id = $_POST['author'];
$tekst = $_POST['tekst'];
$datum = $_POST['datum'];
$message = insertNewReview($game_id, $author_id, $tekst, $datum);
}
?>

<div class="container">
    <div class="starter-template">
		<form role="form" class="col-md-9 go-right" action="insert_review.php" method="post" enctype="multipart/form-data">
			<h1>Review Toevoegen</h1>


            <div class="form-group">
            <label for="game">Game</label>
			<select id="game"name="game">  
            <?php
					$games = getAllGames();
					foreach($games as $game) { ?>
					<option value="<?php echo $game['game_id']; ?>">
					<?php echo $game['titel']; ?>
					</option>
				<?php
					} ?>
            </select>
		    </div>



		<div class="form-group">
            <label for="author">Kies jouw gebruikersnaam</label>
			<select id="author" name="author">  
            <?php
					$authors = getAllAuthors();
					foreach($authors as $author) { ?>
					<option value="<?php echo $author['author_id']; ?>">
                    <?php echo $author['voornaam'] . ' ' . $author['achternaam']; ?>
					</option>
				<?php
					} ?>
            </select>
            <p class="bijschrift"><a href="login.php">(Als jouw gebruikersnaam er niet tussen staat maak dan één aan bij de log in page.)</a></p>
		</div>

        <label for="tekst">Review</label>
        <div class="form-group">
            <textarea id="tekst" name ="tekst" rows="10" cols ="100">
                
            </textarea>
        </div>

		<div class="form-group">
       			<input id="date" name="datum" type="date">

				<script type="text/javascript">
  					document.getElementById('date').value = Date();
				</script>

		</div>


		<div class="form-group">
			<input id="new" name="new" type="submit" class="form-control" value="Maak een review">
		</div>
		</form>
	
        <?php
        if(!empty($message)){
            echo "<p class='bg-success' >{$message}</p>";
        }
        ?>
		
	</div>
</div>
	
<?php require_once("includes/footer.php"); ?>