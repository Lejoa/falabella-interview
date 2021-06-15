# Entrevista Falabella

_En el presente repositorio se resuelve el Challenge - Backend Developer de Falabella._

## Comenzando 🚀

_Las siguientes instrucciones te permitirán obtener una copia del reto en funcionamiento en tu máquina local para propósitos de verificación._


### Pre-requisitos 📋

_Debés tener instalada la version 20.10.7 de Docker o una mayor._

### Ejecución y verificación 🔧

_Realiza los siguientes pasos:_

1. Se deberá crear la imagen a partir del dockerfile para ello tendrás que dirigirte a la carpeta del presente proyecto:
```
docker build -t php_falabella_challenge .
```

2. Ejecutar el contenedor:

```
docker run -dit --name php_falabella_challenge -p 8080:80 php_falabella_challenge
```

3. Visitar la siguiente ubicación en tu navegador:

```
http://localhost:8080/project/index.php
```
4. Ejecución de pruebas:

Se deberá acceder al contenedor y ejecutar lo siguiente:

```
docker exec -i -t php_falabella_challenge
```

```
php vendor/bin/phpunit ChallengeTest.php
```

5. Documentación 📖

Para su generación se deberá especificar la ubicación del proyecto, el archivo y la carpeta que tendrá los archivos para visualizar la documentación.

```
docker run --rm -v $(pwd):/data phpdoc/phpdoc:3 -d path/to/folder/falabella-interview -f path/to/folder/falabella-interview/Challenge.php -t path/to/my/output/folder
```

## Construido con 🛠️

* [Docker](https://docs.docker.com/engine/) - Contenedor
* [PHPUnit](https://phpunit.readthedocs.io/en/9.5//) - Ejecución de pruebas
* [phpDocumentor](https://docs.phpdoc.org/3.0/) - Gneración de la documentación


## Autor ✒️

* **Alejandro Gómez Anaya** - *Desarrollador PHP* - a.gomezanaya@globant.com


