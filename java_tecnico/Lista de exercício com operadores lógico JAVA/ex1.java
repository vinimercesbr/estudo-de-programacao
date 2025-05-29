/*1. Crie um programa que diga se o usuário é criança, adolescente, adulto ou idoso, com base na idade informada. 
(Criança: até 12 anos / Adolescente: 13 a 17 / Adulto: 18 a 59 / Idoso: 60+) */
import java.util.Scanner;

public class ex1 {
 public static void main(String[] args) {
   Scanner scanner = new Scanner(System.in);
   System.out.println("Me fale sua idade");
   int idade = scanner.nextInt();
   if(idade>=18){
     if(idade<=59){
       System.out.println("Você é adulto");
     }else{
       System.out.println("Você é idoso");
     }
   }else{
     if(idade>12){
       System.out.println("Você é adolescente");
     }else{
       System.out.println("Você é criança");
     }
   }
 }
}
