#include <iostream>
#include <random> 
using namespace std;

int main() {
    int pares = 0, impares = 0; 

    
    random_device rd;  
    mt19937 gen(rd()); 
    uniform_int_distribution<> dist(50, 100); 

    for(int i = 0; i < 500; i++) {
        int numero = dist(gen); 
        
        if (numero % 2 == 0) {
            pares++; 
        } else {
            impares++; 
        }
    }

    cout << "Cantidad de números pares: " << pares << endl;
    cout << "Cantidad de números impares: " << impares << endl;

    return 0;
}
