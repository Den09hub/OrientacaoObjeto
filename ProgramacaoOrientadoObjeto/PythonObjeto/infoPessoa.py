# Classe - Molde

lista_cadastrados = []

class Pessoa:

    # Atributos da Classe
    def __init__(self):
        self.nome = None
        self.idade = None
        self.sexo = None
        self.tel = None
        self.email = None

    # Método da Classe
    def cadastrandoUser(self):
        while True:
            print("\nBem-vindo ao nosso sistema!!", 
                "\n\nAqui está as seguintes funções:", 
                "\n1 - Cadastrar-se",
                "\n2 - Login")
            op_user = int(input("Digite: "))
            
            if op_user == 1:
                self.nome = input("Digite seu nome: ")
                self.idade = int(input("Digite sua idade: "))
                self.sexo = input("Digite seu gênero: ")
                self.tel = input("Digite seu telefone: ")
                self.email = input("Digite seu email: ")

                print(f"\nUsuário",
                f"\nNome: {self.nome}",
                f"\nIdade: {self.idade}",
                f"\nGênero: {self.sexo}",
                f"\nTelefone: {self.tel}",
                f"\nEmail: {self.email}")

                for i in self.__dict__.items():
                    lista_cadastrados.append(i)

            elif op_user == 2:
                for i, info in self.__dict__.items():
                    if info is None or info == "":
                        print("Inválido. Informações não recebidas!!")
                        return False
                    return True, print("\nLogado com sucesso!!", 
                                       f"\n{lista_cadastrados}")

            else:
                print("Erro!! Escolha uma opção válida.")



# Instanciação - Objeto
user1 = Pessoa()
user1.cadastrandoUser()

            