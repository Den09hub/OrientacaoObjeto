<?php

class Cafeteria{
    public $coar = FALSE;
    public $esquentar = FALSE;

    private function coandoAgua(){
        $this->coar = TRUE;
        echo "Água coada";
    }

    private function esquentarAgua(){
        $this->esquentar = TRUE;
        echo "Água esquentada";
    }

    public function aguaCoada(){
        $this->coandoAgua();
    }

    public function aguaEsquentada(){
        $this->esquentarAgua();
    }

}

$cafe = new Cafeteria;
echo $cafe->aguaCoada();
echo "<br>";
echo $cafe->aguaEsquentada();


?>