<?php
function getAllGames(){
    require("connection.php");
    try{
        $stmt = $db->prepare("SELECT * FROM game
                                LEFT JOIN genre
                            ON game.genre_id = 
                            genre.genre_id
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

function insertNewGame($titel, $genre_id){
    require("connection.php");
    try{
		$stmt = $db->prepare("INSERT INTO game 
                        (titel, genre_id)
                        VALUES
                        (:titel, :genre_id)");
		$stmt->bindParam(":titel", $titel);
		$stmt->bindParam(":genre_id", $genre_id);
		$stmt->execute();
		$message = "U game is opgeslaan";
		 //CONNECTIE SLUITEN
        $db = null;
	}catch(PDOExeption $e)
	{
		$message = $e;
	}
    return $message;
}
