📚 Description

This project contains a SOAP-based web service developed in PHP that provides the following functionalities:

Multiplication Table: Returns the multiplication table of a given number.
Prime Number Check: Determines if a given number is prime.
First Prime Divisor: Returns the first prime divisor of a given number (returns 1 if the number is prime).
This project is part of the Operating Systems and Administration (SOA) course.

🚀 Features

SOAP Web Service implemented in PHP using NuSOAP.
Three Main Functions:
tablamultiplicar($num): Returns the multiplication table of the number.
es_primo($num): Checks if the number is prime.
divisor($num): Returns the first prime divisor of the number.

⚙️ Requirements

Language: PHP
Library: NuSOAP
Web Server: Apache or any server supporting PHP
Recommended Environment: XAMPP, WAMP, or a local LAMP stack

📦 Installation and Execution
1.Clone the repository:

git clone https://github.com/your-username/soap-multiplication-prime-check.git
cd soap-multiplication-prime-check

2.Move the project to your web server's root directory:

For XAMPP: C:/xampp/htdocs/soap-multiplication-prime-check/
For WAMP: C:/wamp/www/soap-multiplication-prime-check/
For LAMP: /var/www/html/soap-multiplication-prime-check/

3. Start your web server and open the browser:

http://localhost/soap-multiplication-prime-check/cliente.php

🛠️ Project Structure

servermodified.php: The SOAP server handling requests for multiplication, prime check, and prime divisor.
cliente.php: The SOAP client that sends requests and displays the results.
nusoap.php: The NuSOAP library for creating SOAP services in PHP.
README.md: Project documentation.

💻 Example Usage

1.Enter a number in the input field on the client page.
2.Click "enviar" to get:
The multiplication table of the number.
A check to see if the number is prime.
The first prime divisor of the number (1 if the number is prime).


