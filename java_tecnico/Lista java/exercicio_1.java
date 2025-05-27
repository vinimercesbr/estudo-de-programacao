/*
  1 - Escreva um programa em Java que solicite ao usuário as seguintes informações:
  
  Seu nome (tipo texto);
  
  Sua idade (tipo inteiro);
  
  O valor gasto no supermercado (tipo decimal).
  
  Após a coleta desses dados, o programa deve exibir uma mensagem formatada
  com as informações fornecidas, no seguinte formato:
  
  [nome] com idade de [idade] anos, gastou no supermercado [valor] reais.
*/
import java.util.Scanner;

public class exercicio_1 {
 public static void main(String[] args) {
   Scanner scanner = new Scanner(System.in);
   System.out.println("Conta mercado");
   System.out.println("Digite o seu nome: ");
   string  nome = scanner.nextString();
  
   System.out.println("Digite a altura: ");
   double altura = scanner.nextDouble();
   double formula=base*altura;
   System.out.println("A área do retângulo é: "+formula);
 }
}