<?php
function getAllAuthors(){
    require("connection.php");
    try{
        $stmt = $db->prepare("SELECT * FROM author
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

function insertNewAuthor($voornaam, $achternaam, $profielfoto){
    require("connection.php");
    try{
		$stmt = $db->prepare("INSERT INTO author 
                        (voornaam, achternaam, profielfoto)
                        VALUES
                        (:voornaam, :achternaam, :profielfoto)");
		$stmt->bindParam(":voornaam", $voornaam);
		$stmt->bindParam(":achternaam", $achternaam);
        $stmt->bindParam(":profielfoto", $profielfoto);
		$stmt->execute();
		$message = "U gegevens zijn opgeslaan";
		 //CONNECTIE SLUITEN
        $db = null;
	}catch(PDOExeption $e)
	{
		$message = $e;
	}
    return $message;
}

function uploadProfielfoto($arrProfielfoto){

    $target_dir = "../profielfoto/";
    $profielfotoNaam = $arrProfielfoto["profielfoto"]["name"];
    $arrprofiel = explode('.', $profielfotoNaam);
    $profielnaam = $arrprofiel[0];
    $profielext = $arrprofiel[1];
    $newProfielfotonaam = $profielnaam . time() ."." . $profielext;
    $target_file = $target_dir . $newProfielfotonaam;
    move_uploaded_file($arrProfielfoto["profielfoto"]["tmp_name"], $target_file);
     
    return $newProfielfotonaam;
}