/*2. Crie um programa que pergunte se o usuário tem ingresso e se está com pulseira VIP. Ele só pode entrar na área VIP se tiver ingresso e estiver com pulseira VIP. */
//usar boolean
import java.util.Scanner;

public class Main {
    public static boolean verificar(boolean ingresso, boolean vip){
        if((vip==true)&&(ingresso==true)){
                System.out.println("Você pode entrar na área vip");
            }else{
                System.out.println("Você está proibido de entrar na área vip");
            }
    }
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Você tem ingresso?(true,false)");
        boolean ingresso = scanner.nextBoolean();
        System.out.println("Você está com  pulseira vip?(true,false)");
        boolean vip = scanner.nextBoolean();
        verificar(ingresso,vip);
    }
}