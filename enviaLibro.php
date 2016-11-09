<?php

  include('conexion.php');

  $nombre = $_POST['nombre'];
  $autor = $_POST['autor'];
  $edicion = $_POST['edicion'];
  $ano = $_POST['ano'];
  $editorial = $_POST['editorial'];
  $isbn = $_POST['isbn'];
  $idioma = $_POST['idioma'];
  $pag = $_POST['pag'];
  $desc = $_POST['desc'];
  $codigo = $_POST['codigo'];
  $id = $_POST['id'];


  mysqli_query($conexion, "INSERT INTO libros(nombre, autor, edicion, ano, editorial, isbn, idioma, pag, descripcion, codigo, id)
    VALUES ('$nombre', '$autor', '$edicion', '$ano', '$editorial', '$isbn', '$idioma', '$pag', '$desc', '$codigo', '$id')");
  mysqli_close($conexion);
 ?>