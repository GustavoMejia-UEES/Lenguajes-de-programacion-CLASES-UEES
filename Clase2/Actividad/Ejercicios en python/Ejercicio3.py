#Genere 2 arreglos paralelos que representen las sucursales de una empresa y sus ventas. 
# Existen 25 sucursales en la empresa. Presente el promedio de ventas, asi como las sucursales con
# ventas mayores al promedio
import random
info = []

for i in range(25):
    sucursales = f"Sucursal {i+1}"
    info.append(sucursales)
    
ventas = []
for x in range(25):
     venta = random.randint(100,10000)
     ventas.append(venta)
    
promedio_ventas = sum(ventas)/25

print(f"El promedio de ventas fue: ", promedio_ventas)
print("Sucursales con ventas mayores al promedio: ")

for i in range(len(sucursales)):
    if ventas[i] > promedio_ventas:
        print(f"{info[i]} y sus Ventas fueron: {ventas[i]}")
        

    
    
