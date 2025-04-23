#Faixa Etária
#Declaração de vriáveis
idade = 0
#Entrada de dados
idade = int(input("Digite a idade: "))
#Processamento
if (idade < 12):
  print("Criança")
elif (idade >= 12 and idade < 18):
  print("Adolescente")
if (idade <= 59 and idade >= 18):
  print("Adulto")
else:
  print("Idoso")
