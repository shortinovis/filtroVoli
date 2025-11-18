<?php
require_once("Volo.php");

if(isset($_POST["data"]) & isset ($_POST["passeggero"])){
    $arr=lettura("Voli.json");
    foreach($arr as  $volo){
        if(count($volo["passeggeri"])>=1){
            foreach($volo["passeggeri"] as $passeggero){

            }
        }
    }
}







function lettura($percorso):array{
    $arr=json_decode(file_get_contents($percorso));
    if(isset($arr) && is_array($arr)) return $arr;
    else return [];
 
}
function letturaDaOggetti($percorso):array{
    $arr=array();
    foreach(lettura($percorso) as $volo){
        array_push($arr, new Volo($volo["numeroVolo"], $volo["partenza"], $volo["destinazione"], $volo["orapartenza"], $volo["durata"], $volo["passeggeri"]))
        
    }
}
?>