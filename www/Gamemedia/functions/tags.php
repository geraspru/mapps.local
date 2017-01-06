<?php
function getAllTags(){
    require("connection.php");
    try{
        $stmt = $db->prepare("SELECT * FROM tags
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