<?php 
class Tuote {
    public function __construct($id, $nimi, $tiedot, $hinta, $alennus, $kuva) {
        $this->id = $id;
        $this->nimi = $nimi;
        $this->tiedot = $tiedot;
        $this->hinta = $hinta;
        $this->alennus = $alennus;
        $this->kuva = $kuva;
       
    }
    public function __deconstruct()
    {
    }
    function getId(){

        return $this->id;
    }
    function setId($id){

        $this->id = $id;
    }
    function getNimi(){

        return $this->nimi;
    }
    function setNimi($nimi){

        $this->nimi = $nimi;
    }
    function getTiedot(){

        return $this->tiedot;
    }
    function setTiedot($tiedot){

        $this->tiedot = $tiedot;
    }
    function getHinta(){

        return $this->hinta;
    }
    function setHinta($hinta){

        $this->hinta = $hinta;
    }
    function getAlennus(){

        return $this->alennus;
    }
    function setAlennus($alennus){

        $this->alennus = $alennus;
    }
    function getKuva(){

        return $this->kuva;
    }
    function setKuva($kuva){

        $this->kuva = $kuva;
    }



}

?>