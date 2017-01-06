<?php
function getAllTaggames(){
    require("connection.php");
    try{
        $stmt = $db->prepare("SELECT * FROM taggame
                                LEFT JOIN tags
                            ON taggame.tag_id =
                            tags.tag_id
                                LEFT JOIN game
                            ON taggame.game_id =
                            game.game_id
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

function insertNewTaggame($tag_id, $game_id){
    require("connection.php");
    try{
		$stmt = $db->prepare("INSERT INTO review 
                        (tag_id, game_id)
                        VALUES
                        (:tag_id, :game_id)");
        $stmt->bindParam(":tag_id", $tag_id);
		$stmt->bindParam(":game_id", $game_id);
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