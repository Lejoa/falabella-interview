# Entrevista Falabella

_En el presente repositorio se resuelve el Challenge - Backend Developer de Falabella._

## Comenzando 馃殌

_Las siguientes instrucciones te permitir谩n obtener una copia del reto en funcionamiento en tu m谩quina local para prop贸sitos de verificaci贸n._


### Pre-requisitos 馃搵

_Deb茅s tener instalada la version 20.10.7 de Docker o una mayor._

### Ejecuci贸n y verificaci贸n 馃敡

_Realiza los siguientes pasos:_

1. Se deber谩 crear la imagen a partir del dockerfile para ello tendr谩s que dirigirte a la carpeta del presente proyecto:
```
docker build -t php_falabella_challenge .
```

2. Ejecutar el contenedor:

```
docker run -dit --name php_falabella_challenge -p 8080:80 php_falabella_challenge
```

3. Visitar la siguiente ubicaci贸n en tu navegador:

```
http://localhost:8080/project/index.php
```
4. Ejecuci贸n de pruebas:

Se deber谩 acceder al contenedor y ejecutar lo siguiente:

```
docker exec -i -t php_falabella_challenge
```

```
php vendor/bin/phpunit ChallengeTest.php
```

5. Documentaci贸n 馃摉

Para su generaci贸n se deber谩 especificar la ubicaci贸n del proyecto, el archivo y la carpeta que tendr谩 los archivos para visualizar la documentaci贸n.

```
docker run --rm -v $(pwd):/data phpdoc/phpdoc:3 -d path/to/folder/falabella-interview -f path/to/folder/falabella-interview/Challenge.php -t path/to/my/output/folder
```

## Construido con 馃洜锔?

* [Docker](https://docs.docker.com/engine/) - Contenedor
* [PHPUnit](https://phpunit.readthedocs.io/en/9.5//) - Ejecuci贸n de pruebas
* [phpDocumentor](https://docs.phpdoc.org/3.0/) - Gneraci贸n de la documentaci贸n


## Autor 鉁掞笍

* **Alejandro G贸mez Anaya** - *Desarrollador PHP* - a.gomezanaya@globant.com


