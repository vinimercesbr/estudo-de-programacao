#Fórmula que representa a posição na sequência:

#an=a1+(n-1).r

#Onde:
#- an é o último termo
#- a1 é o primeiro termo
#- n é o número total de termos da progressão
#- r é a razão da progressão

#Veja o algoritmo abaixo, escrito em pseudocódigo estruturado: suponha que os valores de "B" são obtidos da sequência de múltiplos de 3:

#3,6,9,12,15,18..

#Sabendo que o valor lido para "A" foi 5, Calcule o valor impresso pelo algoritmo:

#legenda:
#   an=?"15"
#   a1=3
#   r=3
#   n=5
print("Posição de um termo na progressão aritmética")
print("------")
an=0
a1=int(input("Digite o 1º termo: "))
r=int(input("Digite a razão da progressão: "))
n=int(input("digite o número total de termos da progressão: "))


n=n-1

r=r*n

an=a1+r

print(f'A posição do termo é {an}')
print("------")
print("Fim")