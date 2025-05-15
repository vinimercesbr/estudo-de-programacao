#Escreva a matriz  acima com índices ao lado de cada número?// a[0][0]=2
linha_primeira = [2, 3, 9, 18]
linha_segunda = [4, 8, 12, 15]
linha_terceira = [6, 7, 11, 13]


def listas(lista, indice):
  contador = 0
  for index in lista:
    print(indice, contador, index)
    contador = contador + 1


indice = [0, 1, 2]
listas(linha_primeira, indice[0])
listas(linha_segunda, indice[1])
listas(linha_terceira, indice[2])
