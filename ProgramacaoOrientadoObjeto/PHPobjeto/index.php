<?php

// class Galinha{
//     // ATRIBUTOS (Caracteristicas da minha classe objeto)
//     public $ossos_porosos;
//     public $penas;
//     public $bico;
//     public $crista;

//     // MÉTODOS (São as ações que a classe/objeto realizam)
//     public function botarOvos($quantidadeOvos){
//         echo "Botou ". $quantidadeOvos . " ovinhos...pópó";
//     }

//     public function alimentarGalinha($quantidadeAlimento, $alimento){
//         echo "Galinha se alimentou de " . $quantidadeAlimento . " " . $alimento;
//     }
// }

// // Criando um objeto da classe Galinha
// $jurema = new Galinha();

// $jurema->penas = 500;
// $jurema->bico = TRUE;
// var_dump($jurema);

// $jurema->botarOvos(2);
// $jurema->alimentarGalinha(50, "graos");

class Livro{
    public $paginas;
    protected $titulo;
    public $genero;
    public $autor;
    public $editora;

    public function __construct($titulo, $genero, $autor, $editora, $paginas){
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->paginas = $paginas;
    }

    public function setTitulo($novoTitulo){
        $this->titulo = $novoTitulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setGenero($novoGenero){
        $this->genero = $novoGenero;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setAutor($novoAutor){
        $this->autor = $novoAutor;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getInfos(){
        return "O titulo do livro é " . $this->getTitulo() . ", do genero " . $this->getGenero() . " e do autor " . $this->getAutor();
    }
}

// $livro1 = new Livro();

// $livro1->setTitulo("A revolução dos bichos");
// $livro1->setGenero("Ficção");
// $livro1->setAutor("George Orwell");

// echo $livro1->getInfos();

$livro2 = new Livro("Neuromancer", "Ficção", "William Gibson", "Aleph", 320);
var_dump($livro2);

?>