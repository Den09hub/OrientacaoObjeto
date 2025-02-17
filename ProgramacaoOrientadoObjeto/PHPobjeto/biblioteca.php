<?php

class Biblioteca{
    public static function emprestar($livro, $leitor){
        if($livro->getStatusLivro() == "disponivel"){
            $livro->setStatusLivro();
            array_push($leitor->livrosEmprestados, $livro);
        } else{
            echo  "<script>alert('Livro não pode ser emprestado')</script>"
        }
    }

    public static function devolver(){

    }

    public static function cadastrarLivro($titulo, $autor, $isbn, $ano){
        $livro = new Livro($titulo, $autor, $isbn, $ano);
        array_push(Biblioteca::$listaDeLivros, $livro);
    }

    public static function consultarLivro(){

    }

    public static function cadastrarLeitor($nome, $cpf, $email){
        $leitor = new Leitor($nome, $cpf, $email);
        return $leitor;
    } 

    public static function consultarLeitor(){

    }

}

class Livro extends Biblioteca{
    private $titulo;
    private $autor;
    private $isbn;
    private $ano;
    protected $status;

    public function __construct($titulo, $autor, $isbn, $ano, $status){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->ano = $ano;
        $this->status = "disponível";
    }

    public function emprestar_Biblioteca(){

    }

    public function devolver_Biblioteca(){

    }
}

class Leitor extends Biblioteca{
    public $nome;
    public $cpf;
    public $email;
    public $livroemprestados = [];
    const qtdLivros = 3;

    public function pegar_Biblioteca(){

    }

    public function devolver_Biblioteca(){

    }

    public function consultar_Biblioteca(){

    }
}

Biblioteca::cadastrarLivro("Neuromancer", "William Gibson", "23242253", "1984");

Biblioteca::cadastrarLeitor("Rodrigues", "123.321.425-53", "rodrigues@gmail.com");

?>