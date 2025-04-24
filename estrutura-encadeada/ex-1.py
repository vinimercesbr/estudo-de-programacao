"""
1. Classificação e Cálculo
Início
 A ← 6 + 3
 B ← 4 * 2
 N ← (A * 2 + B) / 2
 Se (N < 10) Então
 R ← N * 2
 Escreva("Dobro de N é ", R)
 SenãoSe (N >= 10 E N <= 20) Então
 R ← N + 5
 Escreva("N somado com 5 é ", R)
 Senão
 R ← N - 3
 Escreva("N subtraído por 3 é ", R)
 FimSe
Fim
"""
#Declarando as variáveis
numero_primeiro = 6 + 3
numero_segundo = 4 * 2
resultado = 0
#Processamento
formula = (numero_primeiro * 2 + numero_segundo) / 2
print(formula)
#Estrutura  de controle
if (formula < 10):
  resultado = (formula * 2)
  print(f"Dobro da fórmula é: {resultado}")
elif (formula >= 10 and formula <= 20):
  resultado = formula + 5
  print(f"A fórmula somada com 5 é: {resultado}")
else:
  resultado = formula - 3
  print(f"A fórmula subtraida por 3 é: {resultado}")
