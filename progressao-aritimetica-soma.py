# -*- coding: utf-8 -*-

# Progressao aritmetica (PA) é uma sequência numérica em que cada termo, a partir do segundo, é obtido somando-se a mesma constante ao termo anterior. Essa constante 
# 𝑟 é chamada de razão da PA.

# Formula geral da PA:

#   𝑎𝑛 = 𝑎1 + ( 𝑛 − 1 ) ⋅ 𝑟

# Onde:
#  
# an: o termo que queremos encontrar na sequência; 
# 𝑎1: é o primeiro termo; 
# 𝑛: é a posição do termo na sequência; 
# r: a razão da PA, ou seja, a diferença entre um termo e o anterior.

a1 = int(input("Digite o primeiro termo da PA: "))
r = int(input("Digite a razão da PA: "))
n = int(input("Digite o número de termos da PA: "))
an = a1 + (n - 1) * r
print(f"O {n}º termo da PA é: {an}")
