#Veja o algoritmo abaixo, escrito em pseudocódigo estruturado: suponha que os valores de "B" são obtidos da sequência de múltiplos de 3:

#3,6,9,12,15,18..

#Sabendo que o valor lido para "A" foi 5, Calcule o valor impresso pelo algoritmo:

#legenda:
#   ultimo_termo=?"15"
#   primeiro_termo=3
#   razao=3
#   numero_total_termos=5
print("Posição de um termo na progressão aritmética")
print("------")

primeiro_termo=int(input("Digite o 1º termo: "))
razao=int(input("Digite a razão da progressão: "))
numero_total_termos=int(input("Digite o número total de termos da progressão: "))

ultimo_termo=primeiro_termo+(razao*(numero_total_termos-1))

print(f'A posição do termo é {ultimo_termo}')
print("------")
print("Fim")