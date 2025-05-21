/*
3 - Desenvolva um programa em Java que leia do usuário os seguintes dados:
  -Peso (em quilogramas, com casas decimais);

  -Altura (em metros, com casas decimais).

Com base nas informações fornecidas, o programa deve calcular o IMC (Índice de
Massa Corporal) utilizando a fórmula:

  -IMC = peso / (altura * altura)
*/
import java.util.Scanner;

public class Ex3 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        System.out.print("Digite seu peso: ");
        double peso = entrada.nextDouble();
        System.out.print("Digite sua altura em metros: ");
        Double altura = entrada.nextDouble();
        entrada.close(); // Boa prática
        double imc=peso/(altura*altura);
        System.out.print("Resultado do seu imc: "+imc);
        
    }
}
