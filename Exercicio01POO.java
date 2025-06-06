import java.util.Scanner;

// Classe que representa uma pessoa
class Pessoa {
    private int idade;

    public Pessoa(int idade) {
        this.idade = idade;
    }

    public int getIdade() {
        return idade;
    }
}

// Classe responsável por determinar a faixa etária
class FaixaEtariaService {

    public String determinarFaixaEtaria(Pessoa pessoa) {
        int idade = pessoa.getIdade();

        if (idade <= 12) {
            return "Criança";
        } else if (idade >= 13 && idade <= 16) {
            return "Adolescente";
        } else if (idade >= 17 && idade <= 59) {
            return "Adulto";
        } else if (idade >= 60) {
            return "Idoso";
        } else {
            return "Idade inválida";
        }
    }
}

// Classe principal para interação com o usuário
public class Exercicio01POO {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.print("Me fale sua idade para saber sua faixa etária: ");
        int idade = scanner.nextInt();
        scanner.close();

        Pessoa pessoa = new Pessoa(idade);
        FaixaEtariaService service = new FaixaEtariaService();

        String faixa = service.determinarFaixaEtaria(pessoa);
        System.out.println("Você é " + faixa);
    }
}