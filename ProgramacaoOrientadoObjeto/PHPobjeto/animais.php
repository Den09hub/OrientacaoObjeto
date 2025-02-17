<?php

class Animais{
    public $alimentacao;
    public $colunaVertebral;

    public function __construct($alimentacao, $colunaVertebral){
        $this->alimentacao = $alimentacao;
        $this->colunaVertebral = $colunaVertebral;
    }

    public function alimentarSe(){
        echo "Alimentou-se";
    }
}

class Mamiferos extends Animais{
    public function mamar(){
        return "mamou";
    }
}

class Baleia extends Mamiferos{
    public function nadar(){
        return "nadando";
    }
}

class Morcego extends Mamiferos{
    public function voar(){
        return "voando";
    }
}

class Ornitorrinco extends Mamiferos{
    public function botou(){
        return "botou";
    }
}

// $cachorro = new Animais("Onivoro", TRUE);

// echo "<pre>";
// var_dump($cachorro);
// echo "</pre>";

$baleia = new Baleia("Carnivora", TRUE);
echo "Baleia está " . $baleia->nadar();
echo "<br>";
$morcego = new Morcego("Onívoro", TRUE);
echo "Morcego está " . $morcego->voar();
echo "<br>";
$ornitorrinco = new Ornitorrinco("Ovíparo", TRUE);
echo "Ornitorrinco " . $ornitorrinco->botou();

?>