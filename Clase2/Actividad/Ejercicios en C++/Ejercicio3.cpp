#include <iostream>
#include <random>   
using namespace std;

int main() {
    const int cant_sucursales = 25; 
    int sucursales[cant_sucursales]; 
    float ventas[cant_sucursales];   
    float sumaVentas = 0, promedio;

    random_device rd;  
    mt19937 gen(rd()); 
    uniform_int_distribution<> dist(100, 10000); 

    cout << "Ventas de las 25 sucursales con valores desde $100 a $10.000:" << endl;
    for(int i = 0; i < cant_sucursales; i++) {
        sucursales[i] = i + 1;  
        ventas[i] = dist(gen);  
        cout << "Sucursal " << sucursales[i] << " ventas: $" << ventas[i] << endl;
        sumaVentas += ventas[i]; 
    }

    promedio = sumaVentas / cant_sucursales;
    cout << "\n---El promedio de ventas es: $" << promedio << "---" << endl;
    cout << "\nLas sucursales con ventas mayores al promedio son:" << endl;
    for(int i = 0; i < cant_sucursales; i++) {
        if (ventas[i] > promedio) {
            cout << "La sucursal " << sucursales[i] << " con ventas de: $" << ventas[i] << endl;
        }
    }

    return 0;
}
