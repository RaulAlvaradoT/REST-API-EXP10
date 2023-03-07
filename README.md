# REST-API-EXP10

## :warning: Se recomienda abrir el README.md para ver grandes las imagenes :warning:

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

### :eyes: GET General (Ver registros)
1. Elegir GET en el cuadro de opciones.
2. Pegar la siguiente ruta:
```
localhost/rest/post.php
```
3. Oprimir el botón send.
4. Del lado derecho elegir como opción de visualización JSON.

<img src="https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/GETgen.png" alt="GET1">

### :mag: GET Individual (Ver un registro por ID)
1. Elegir GET en el cuadro de opciones.
2. Agregar a la ruta el id que se busca de esta manera por ejemplo:
```
localhost/rest/post.php?id_pelicula=5
```
3. Oprimir el botón send.
4. Del lado derecho elegir como opción de visualización JSON.

<img src="https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/GETind.png" alt="GET2">

### :pencil: POST (Nuevo registro)
1. Elegir POST en el cuadro de opciones.
2. Pegar la siguiente ruta:
```
localhost/rest/post.php
```
3. Clickear la pestaña "Body".
4. Elegir from-data en la pestaña que se desplega.
5. En el campo "KEY" colocar los parametros y en el de "VALUE" el valor eqivalente, de esta manera:


_El id pelicula no se incluye ya que se genera solo_


| KEY | VALUE |
|------------------|----------------------|
| nombre_pelicula  | La toalla del mojado |
| director         | Frankie Rivers       |
| genero           | Comedia              |
| fecha_estreno    | 2023-03-07 00:00:00  |


6. Oprimir el botón send.
7. Visualizar al lado derecho el nuevo registro y elegir como opción de visualización JSON.
<img src="https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/post.png" alt="POST">

### :pencil2: PUT (Actualizar registro)
1. Elegir PUT en el cuadro de opciones.
2. Agregar a la ruta el id que se busca actualizar, por ejemplo:
```
localhost/rest/post.php?id_pelicula=24
```
3. Clickear la pestaña "Params".
4. Aparecera el id pelicula antes señalado, colocar el parametro y valor que se busca actualizar, asi:


| KEY | VALUE |
|-------------|----------|
| id_pelicula | 24       |
| genero      | Suspenso |


5. Oprimir el botón send.
<img src="https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/PUT.png" alt="PUT">

### :x: DELETE (Borrar registro)
1. Elegir DELETE en el cuadro de opciones.
2. Agregar la ruta con el id del registro que se desea borrar:
```
localhost/rest/post.php?id_pelicula=24
```
5. Oprimir el botón send.
6. Si al buscar con un GET el registro del mismo id nos aparece un "false" el registro ha sido borrado.
<img src="https://github.com/RaulAlvaradoT/REST-API-EXP10/blob/main/Imagenes/DELETE.png" alt="DELETE">

## Autor ✒️
* **Raúl Alvarado** - *Exposición 10* - [Instagram ajjaj](https://www.instagram.com/raulalvarado.jpg/)
