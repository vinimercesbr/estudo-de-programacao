#Escreva a matriz  acima com índices ao lado de cada número?// a[0][0]=2

linhas = {
    "primeira": [2, 3, 9, 18],
    "segunda": [4, 8, 12, 15],
    "terceira": [6, 7, 11, 13]
}

def listas(lista, indice):
  contador = 0
  for index in lista:
    print(f'[{indice}] [{contador}] = {index}')
    contador = contador + 1


indice = [0, 1, 2]
listas(linhas["primeira"], indice[0])
listas(linhas["segunda"], indice[1])
listas(linhas["terceira"], indice[2])
