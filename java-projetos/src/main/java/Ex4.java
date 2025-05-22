/*
4 - Crie um programa que solicite ao usuário a inserção de quatro valores decimais, representando os preços de quatro produtos diferentes comprados em uma loja.
Após a entrada dos valores, o programa deve:
Calcular a soma total dos valores informados;


Exibir no final o valor total da compra.
*/
import java.util.Scanner;

public class Ex4 {
    public static void main(String[] args) {
        double[] produtos={};
        int indice = 0;
        while (indice < 3) {
          Scanner entrada = new Scanner(System.in);
          indice=indice+1;
          System.out.print("Digite o "+indice+"° valor da compra: ");
          produtos[indice] = entrada.nextDouble();
          entrada.close(); // Boa prática
        };        
        double soma_compras=0;
        for (double index : produtos) {
          soma_compras=soma_compras+index;
        };
        
    }
}
  

