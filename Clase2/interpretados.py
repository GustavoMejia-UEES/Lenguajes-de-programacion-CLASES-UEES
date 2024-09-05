import time

tiempoInicio = time.time()

lista = [] 
for n in range(100):
    for m in range(100):
        lista.append(n*m)
        
tiempoFinal = time.time()
tiempoTotal = tiempoFinal - tiempoInicio
print("Tiempo: ", tiempoTotal)

a = 10
b = 15
c = a + b

print(f"La suma da como resultadoL: {c}")
