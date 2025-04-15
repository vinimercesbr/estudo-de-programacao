#Exercício 1

#É dado um algoritmo que:
#   Lê os valores para A (quantidade de vezes que o laço vai repetir) e B (um número que muda a cada repetição).
#   O algoritmo vai somar os valores lidos para B até i atingir A.
  
#Sn = (n / 2) * (a1 + an)

#Onde:
#- a1 = 2 (primeiro termo)
#- an = 14 (último termo)
#- n = 14 - 2 + 1 = 13 (quantidade de termos)

#Sabemos que:
#   O primeiro valor lido para B foi 3 e o quinto número foi 11, seguindo a sequência: 
#   3, 5,7, 9, 11...

#Essa é uma PA de razão 2.

#Quantas vezes o laço repetiu?
#repetidor= 5

#Quais valores foram lidos para B?
# 3 + 5 + 7 + 9 + 11 = ?

#Resultado esperado: 35

razao=2
laco_repetidor=5
valor_primeiro_termo=3
contador=0
lista_b = []
for i in range(laco_repetidor):
    razao=razao+2
    lista_b.append(razao)
    print(f'Valor Razão: {razao}')