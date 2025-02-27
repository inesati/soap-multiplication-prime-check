from xmlrpc.server import SimpleXMLRPCServer
import logging

# Set up logging
logging.basicConfig(level=logging.INFO)

server = SimpleXMLRPCServer(('localhost', 9000), logRequests=True)

# Funcion de Suma
def suma(operando1, operando2, operacion):
    logging.info(' Esta realizando la operación de %s', operacion)
    return ("La suma es:", float(operando1) + float(operando2))

# Funcion de  Resta
def resta(operando1, operando2, operacion):
    logging.info('Esta realizando la operación de %s', operacion)
    return ("La resta es:", float(operando1) - float(operando2))

# Funcion de  Multiplicación
def multiplicacion(operando1, operando2, operacion):
    logging.info('Esta realizando la operación de %s', operacion)
    return ("La multiplicación es:", float(operando1) * float(operando2))

# Funcion de  División
def division(operando1, operando2, operacion):
    logging.info('Esta realizando la operación de %s', operacion)
    if float(operando2) != 0:
        return ("La división es:", float(operando1) / float(operando2))
    else:
        return "Error: División entre cero"

# Registro de las funciones en el servidor
server.register_function(suma)
server.register_function(resta)
server.register_function(multiplicacion)
server.register_function(division)

# Start the server
try:
    print('Use Control-C to exit')
    server.serve_forever()
except KeyboardInterrupt:
    print('Exiting')
