<?php
$current = "login.php";
require_once("includes/header.php");
require_once("includes/nav.php");
require_once("functions/auteur.php");
if(isset($_POST['new'])){
	$voornaam = $_POST['voornaam'];
	$achternaam = $_POST['achternaam'];
	$profielfoto = uploadProfielfoto('profielfoto');
	$message = insertNewAuthor($voornaam, $achternaam, $profielfoto);
}
?>

<div class="container">
    <div class="starter-template">
		<form role="form" class="col-md-9 go-right" action="login.php" method="post" enctype="multipart/form-data">
			<h1>Log je in</h1>
		<div class="form-group">
            <label for="voornaam">Voornaam</label>
			<input id="voornaam" name="voornaam" type="text" class="form-control" required>
		</div>
		<div class="form-group">
            <label for="achternaam">familienaam</label>
			<input id="achternaam" name="achternaam" type="text" class="form-control" required >
			
		</div>

		<div class="form-group">
			<label for="profielfoto">Profielfoto</label>
			<input id="profielfoto" name="profielfoto" type="file" class="form-control"  >
		</div>

		<div class="form-group">
			<input id="new" name="new" type="submit" class="form-control" value="Log in">
		</div>
		</form>
		</div>
			<a class="btn btn-primary" href="insert_review.php">Maak een review</a>
		</div>
        <?php
        if(!empty($message)){
            echo "<p class='bg-success' >{$message}</p>";
        }
        ?>
		
	
	
<?php require_once("includes/footer.php"); ?>



