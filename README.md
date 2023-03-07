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

_Dentro de la carpeta rest apareceran 3 archivos con extensión PHP los cuales conforman nuestra API_
- config
- post
- utils

### config.php
_En este archivo se definirá el host username password y lo más importante el nombre de tu base de datos la cual para mi es "led"_

### post.php
_En este archivo php se indicará si se va a listar todos o sólo un get, se dan las reglas para crear un nuevo post que es lo mismo que insertar un nuevo registro a la base de datos, se dan las instrucciones para borrar un registro de la base de datos, y finalmente se dan las instrucciones para actualizar un registro de la base de datos_

### utils.php
_Finalmente en el archivo utils se dan las instrucciones para abrir una conexión a la base de datos, obtener parámetros para poder actualizar un registro de la base de datos, y para que se asocie un parámetro con su respectivo valor_

## Postman :email:
_Al abrir postman te pedirá una cuenta sin embargo abajo aparece un código para acceder sin una cuenta si asi lo prefieres, minimiza la barra lateral izquierda y activa la opcion "Single pane view" en la esquina inferior derecha, abré una nueva pestaña y agrega la siguiente dirección al lado derecho del GET:_
```
localhost/rest/post.php
```

_Aquí hay un gif para ver todo este proceso en caso de ser confuso:_
<img src="https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/gif.gif" alt="gif">

## Peticiónes

### GET General (Ver registros)
1. Elegir get en el cuadro de opciones.
2. Pegar la siguiente ruta:
```
localhost/rest/post.php
```
4. Oprimir el botón send.
5. Del lado derecho elegir como opción de visualización JSON.

<img src="https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/GETgen.png" alt="GET1">




### GET Individual (Ver un registro por ID)
### POST (Nuevo registro)
### PUT (Actualizar registro)
### DELETE (Borrar registro)

## Autor ✒️
* **Raúl Alvarado** - *Exposición 10* - [Instagram ajjaj](https://www.instagram.com/raulalvarado.jpg/)
