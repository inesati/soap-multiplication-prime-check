import xmlrpc.client

llamada = xmlrpc.client.ServerProxy('http://localhost:9000')

# Ejemplo de uso
print(llamada.suma(3, 5, 'suma'))
print(llamada.resta(10, 5, 'resta'))
print(llamada.multiplicacion(4, 6, 'multiplicacion'))
print(llamada.division(8, 2, 'division'))

