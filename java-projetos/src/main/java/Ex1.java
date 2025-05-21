/*Lista de exercícios JAVA

1 - Escreva um programa em Java que solicite ao usuário as seguintes informações:

Seu nome (tipo texto);

Sua idade (tipo inteiro);

O valor gasto no supermercado (tipo decimal).

Após a coleta desses dados, o programa deve exibir uma mensagem formatada
com as informações fornecidas, no seguinte formato:

[nome] com idade de [idade] anos, gastou no supermercado [valor] reais.
*/
import java.util.Scanner;

public class Ex1 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        System.out.print("Digite seu nome: ");
        String nome = entrada.nextLine();
        System.out.print("Digite sua idade: ");
        Number idade = entrada.nextInt();
        System.out.print("Digite o valor da sua dívida: ");
        Number valor = entrada.nextDouble();
        System.out.println(nome+ " com idade de "+idade+" anos , gastou no supermercado: " +valor+ " reais");
        entrada.close(); // Boa prática
    }
}
