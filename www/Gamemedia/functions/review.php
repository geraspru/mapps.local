<?php
function getAllReviews(){
    require("connection.php");
    try{
        $stmt = $db->prepare("SELECT * FROM review
                                LEFT JOIN game
                             ON review.game_id =
                                game.game_id
                                LEFT JOIN author
                            ON review.author_id =
                                author.author_id
                            ");
        $stmt->execute();
        $result = $stmt->fetchAll();
        //CONNECTIE SLUITEN
        $db = null;
        
    }catch(PDOExeption $e){
        $result = $e;
    } 
    return $result;
}

function insertNewReview($game_id, $author_id, $tekst, $datum){
    require("connection.php");
    try{
		$stmt = $db->prepare("INSERT INTO review 
                        (game_id, author_id, tekst, datum)
                        VALUES
                        (:game_id, :author_id, :tekst, :datum)");
		$stmt->bindParam(":game_id", $game_id);
        $stmt->bindParam(":author_id", $author_id);
		$stmt->bindParam(":tekst", $tekst);
        $stmt->bindParam(":datum", $datum);
		$stmt->execute();
		$message = "U review is opgeslaan, ga naar pagina Reviews om die te bekijken.";
		 //CONNECTIE SLUITEN
        $db = null;
	}catch(PDOExeption $e)
	{
		$message = $e;
	}
    return $message;
}

