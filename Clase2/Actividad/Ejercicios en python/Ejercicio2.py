#Generar 500 valores aleatorios entre 50 y 100, presente cuantos valores fueron pares 
# y cuantos impares fueron generados

import random
valores = []

for i in range(500):
    valor  = int(random.uniform(50,100))
    valores.append(valor)
    
pares = []
inpares = []

for numero in valores:
    if numero % 2 == 0:
        pares.append(numero)
    else:
        inpares.append(numero)
        
print("Numeros pares: ", len(pares))
print("Numeros inpares: ", len(inpares))
    
    