# REST-API-EXP10
_Repositorio para la clase de desarrollo web exposición #10_

## Pre-requisitos 📋
- XAMPP [Descargar](https://www.apachefriends.org/es/download.html)
- Postman [Descargar](https://www.postman.com/downloads/)
- La base de datos que hizo Led jajaja

## XAMPP
_Enciende Apache y MySQL_

![XAMPP](https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/XAMPP.png)

## Clonar repositorio
_Para para empezar debes descargar el repositorio en tu carpeta htdocs haciendo uso del comando git clone y pegando el enlace de este repositorio, asi:_

```
git clone https://github.com/RaulAlvaradoT/REST-API-EXP10.git
```

![Ejemplo](https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/gitclone.png)

## Base de datos
_Ingresa a este link para visualizar tus bases de datos_
```
localhost/phpmyadmin/index.php
```
_Selecciona a la izquierda tu base de datos y tabla, en mi caso mi base de datos es "led" y la tabla "peliculas"_

![BD](https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/BD.png)
<img src="https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/tabla.png" alt="tabla" width="650">

## API 🔧

_Dentro de la carpeta rest apareceran 3 archivos con extensión PHP_
- config
- post
- utils

### config.php
_En este archivo se definirá el host username password y lo más importante el nombre de tu base de datos la cual para mi es "led"_
```
<?php

$db = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'db' => 'led' //Aqui cambia el nombre de tu base de datos, la mia se llama led jajaja
];

?>
```

_Dí cómo será ese paso_

```
Da un ejemplo
```

_Y repite_

```
hasta finalizar
```

_Finaliza con un ejemplo de cómo obtener datos del sistema o como usarlos para una pequeña demo_

## Ejecutando las pruebas ⚙️

_Explica como ejecutar las pruebas automatizadas para este sistema_

### Analice las pruebas end-to-end 🔩

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```

### Y las pruebas de estilo de codificación ⌨️

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```
## Autor ✒️
* **Raúl Alvarado** - *Exposición 10* - [Instagram ajjaj](https://www.instagram.com/raulalvarado.jpg/)
