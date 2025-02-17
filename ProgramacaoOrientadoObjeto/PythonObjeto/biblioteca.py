# Classe - Model
class Biblioteca:
    
    # Atributos da Classe
    def __init__(self, titulo, autor, ano):
        self.titulo = titulo
        self.autor = autor
        self.ano = ano

    def exibirInfo(self):
        print(f"\nTítulo: {self.titulo}",
              f"\nAutor: {self.autor}",
              f"\nAno: {self.ano}")



# Instanciação - Objeto
livro1 = Biblioteca("Neuromancer", "William Gibson", 1984)
livro1.exibirInfo()