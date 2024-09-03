class CuentaBancaria:
    
    def __init__(self,nombre,saldo):
        self.nombre = nombre
        self.saldo = saldo
    def  depositar(self,cantidad):
        self.saldo += cantidad
        
    def retirar(self,cantidad):
        if cantidad > self.saldo:
            raise ValueError("Saldo Insuficiente, pruebe con ", self.saldo)
        else:
            self.saldo -= cantidad
    
    def __str__(self):
        return f"Cuenta Bancaria de {self.nombre} Saldo: {self.saldo}"
    
print( "\n---Estado de cuentas Original ---  ")
cuenta1 = CuentaBancaria("Vanessa", 25000)
cuenta2 = CuentaBancaria("Gustavo", 5000)
cuenta3 = CuentaBancaria("Veronica", 190)

print(cuenta1)
print(cuenta1)
print(cuenta1)

print( "\n---Estado de cuentas al depositar dinero --- ")
cuenta1.depositar(500)
cuenta1.depositar(1500)
cuenta1.depositar(55100)

print(cuenta1)
print(cuenta1)
print(cuenta1)
print( "\n ---Estado de cuentas al retirar dinero --- ")

cuenta1.retirar(1924)
cuenta1.retirar(1241)
cuenta1.retirar(51481)

print(cuenta1)
print(cuenta1)
print(cuenta1)

