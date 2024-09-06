#include <iostream>
using namespace std;

int main() {
    int valores[10];  
    int suma = 0;     
    float promedio;   

    
    cout << "Ingresa tus valores:" << endl;
    for(int i = 0; i < 10; i++) {
        cout << " Ingresa el valor " << i + 1 << ": ";
        cin >> valores[i];
        suma += valores[i];  
    }

    promedio = suma / 10.0;

    cout << "La suma de los valores es: " << suma << endl;
    cout << "El promedio de los valores es: " << promedio << endl;

    return 0;
}