#Ingresar 10 valores por teclado, presentar la suma y promedio


valores = []

for i in range(10):
    valor = int(input(f"Introduce el valor {i+1}: "))
    valores.append(valor)
    
suma_total = sum(valores)
prom = suma_total/10

print(f"La suma total es de: ", suma_total)
print(f"El promedio de esta suma es: ", prom)

