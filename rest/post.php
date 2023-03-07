<?php
include "config.php";
include "utils.php";


$dbConn =  connect($db);

/*
  listar todos los posts o solo uno
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['id_pelicula']))
    {
      //Mostrar un post en especifico 
      $sql = $dbConn->prepare("SELECT * FROM peliculas where id_pelicula=:id_pelicula");
      $sql->bindValue(':id_pelicula', $_GET['id_pelicula']);  //Se pide ID
      $sql->execute();
      header("HTTP/1.1 200 OK");  //Se regresa codigo de OK
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  ); //Se regresa resultado en formato JSON
      exit();
	  }
    else {
      //Mostrar lista de post
      $sql = $dbConn->prepare("SELECT * FROM peliculas");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll()  );
      exit();
	}
}

// Crear un nuevo post, insertar registro
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = $_POST;
    $sql = "INSERT INTO peliculas
          (nombre_pelicula, director, genero, fecha_estreno)
          VALUES
          (:nombre_pelicula, :director, :genero, :fecha_estreno)";
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();
    if($postId)
    {
      $input['id_pelicula'] = $postId;
      header("HTTP/1.1 200 OK");
      echo json_encode($input);
      exit();
	 }
}

//Borrar
if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
	$id = $_GET['id_pelicula'];
  $statement = $dbConn->prepare("DELETE FROM peliculas where id_pelicula=:id_pelicula");
  $statement->bindValue(':id_pelicula', $id);
  $statement->execute();
	header("HTTP/1.1 200 OK");
	exit();
}

//Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
    $input = $_GET;
    $postId = $input['id_pelicula'];
    $fields = getParams($input);

    $sql = "
          UPDATE peliculas
          SET $fields
          WHERE id_pelicula='$postId'
           ";

    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);

    $statement->execute();
    header("HTTP/1.1 200 OK");
    exit();
}


//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>