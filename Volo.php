<?php
class Volo{
    private $numVolo
    private $partenza
    private $destinazione
    private $orapartenza
    private $durata
    private $passeggeri

    function __construct($numVolo,$partenza,$destinazione,$orapartenza,$durata,$passeggeri){
        $this->$numVolo=$numVolo
        $this->$partenza=$partenza
        $this->$destinazione=$destinazione
        $this->$orapartenza=$orapartenza
        $this->$durata=$durata
        $this->setPasseggeri($passeggeri);
    }

    function setPasseggeri($passeggeri){
        if(is_array($passeggeri)  $this->$passeggeri=$passeggeri)
        else $this->$passeggeri=[];
    }

    function __tostring(): string{
        return json_encode($this, JSON_PRETTY_PRINT)
    }

    function isNotEmpty(): bool{
        return count($this->)
    }
}