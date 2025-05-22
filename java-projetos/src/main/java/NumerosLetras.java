//Crie um programa que receba 3 números: A, B e C. Calcule e Mostre  o valor de X de acordo com a Expressão X=A+B-C

import java.util.Scanner;

public class NumerosLetras {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);

        System.out.print("Digite seu nome: ");
        String nome = entrada.nextLine();

        System.out.println("Olá, " + nome + "!");

        entrada.close(); // Boa prática
    }
}