<?php

class Biblioteca{
    public static $listaDeLivros = [];

    public static $listaDeLeitores = [];

    public static function Emprestar($livro, $leitor){
        if($livro->getStatusLivro()=="disponivel"){
            $livro->setStatusLivro();
            array_push($leitor->livrosEmprestados,$livro);
        } else{
            echo '<script>alert("Livro não pode ser emprestado")</script>';
        }
        
    }
    public static function Devolver(){
       
    }
    public static function CadastrarLivro($titulo,$autor,$isbn,$ano){
        $livro = new Lvros($titulo,$autor,$isbn,$ano);
        array_push(Biblioteca::$listaDeLivros,$livro);
    }
    public static function CadastrarLeitor($nome,$cpf,$email){
        $leitor = new Leitor($nome,$cpf,$email);
        array_push(Biblioteca::$listaDeLeitores,$leitor);
    }
    public static function ConsultarLivro(){
        
    }
    public static function ConsultarLeitor(){
        
    }
}

class Livro{
    private $titulo;
    private $autor;
    private $isbn;
    private $ano;
    protected $status;

    public function __construct($titulo,$autor,$isbn,$ano) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->ano = $ano;
        $this->status = 'disponivel';
    }

    public function setStatusLivro(){
        if($this->status == "disponivel"){
            $this->status = "indisponivel";
        }else{
            $this->status = "disponivel";
        }
    }

    public function getStatusLivro(){
        
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function Emprestar(){
        
    }
}

class Leitor{
    private $nome;
	private $cpf;
	private $email;
    public $livrosEmprestados = [];
    const quantidadeMax = 3;

    public function __construct($nome,$cpf,$email) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function Emprestar(){
        
    }
	public function Devolver(){
       
    }
	public function ConsultarLivros(){
        
    }
}

Biblioteca::CadastrarLivro("Dom Quixote", "Miguel de Cervantes", "978-8581300818", "2016");

Biblioteca::CadastrarLeitor('Lara','123.464.573-45','laraeridan@gmail.com'); 

Biblioteca::Emprestar($livroTeste, $leitorTeste);

?>