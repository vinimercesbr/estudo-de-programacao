#Exercício 1

#É dado um algoritmo que:
#   Lê os valores para A (quantidade de vezes que o laço vai repetir) e B (um número que muda a cada repetição).
#   O algoritmo vai somar os valores lidos para B até i atingir A.
  
#Sabemos que:
#   O primeiro valor lido para B foi 3 e o quinto número foi 11, seguindo a sequência: 
#   3, 5, 7, 9, 11...

#Essa é uma PA de razão 2.

#Quantas vezes o laço repetiu?
#repetidor= 5

#Quais valores foram lidos para B?
# 3 + 5 + 7 + 9 + 11 = ?

#Resultado esperado: 35

razao=2
laco_repetidor=5
primeiro_termo=3
lista_b = []
soma_lista=0

for i in range(laco_repetidor):
    lista_b.append(primeiro_termo)
    primeiro_termo=primeiro_termo+razao
    
print(f'Sequência: {lista_b}')

soma_lista=sum(lista_b)
  
print(f'Resultado da soma da sequência: {soma_lista}')