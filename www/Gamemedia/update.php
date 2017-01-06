<?php
$current = "update.php";
require_once("includes/header.php");
require_once("includes/nav.php");

if(isset($_POST['edit'])){
	//GEKLIKT OP EDITKNOP
	require("functions/connection.php");

	$tekst = $_POST["tekst"];
    $review_id = $_POST["review_id"];

	try{
		$stmt = $db->prepare("UPDATE review 
				SET tekst=:tekst
				WHERE review_id=:review_id");
				
		$stmt->bindParam(":tekst", $tekst);
		$stmt->bindParam(":review_id", $review_id);

		$stmt->execute();
		$message = "SUCCES";

		//connectie sluiten
		$db=null;

	}catch(PDOException $e)

	{
		$message = $e;
	}
}


if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
	//EDIT_ID BESTAAT, JUIJ
	$review_id = $_GET['edit_id'];

	//GEGEVENS OPROEPE?N WAAR ID HETZELFDE IS
	require("functions/connection.php"); 
	$stmt = $db->prepare("SELECT * FROM review WHERE review_id=:review_id");
	$stmt->bindParam(":review_id", $review_id); 
	$stmt->execute();
	$result = $stmt->fetch();

	//EXTRACTEN VAN GEGEVENS

	extract($result);

}
?>


<div class="container">
    <div class="starter-template">
		<form role="form" class="col-md-9 go-right" action="update.php" method="post" enctype="multipart/form-data">
			<h1>Update</h1>
		
        <label for="tekst">Review tekst</label>
        <div class="form-group">
            <textarea id="tekst" name ="tekst" rows="10" cols ="100" required value="<?php echo $tekst; ?>"> 
                
            </textarea>
        </div>

		<div class="form-group">
			<input id="review_id" name="review_id" type="text" class="form-control" required  readonly value='<?php echo $review_id; ?>'>
			<label for="review_id">Review ID</label>
		</div>

		<div class="form-group">
			<input id="edit" name="edit" type="submit" class="form-control" value="Pas aan">
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