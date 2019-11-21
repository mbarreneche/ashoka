<?php

require_once("clases/dbMysql.php");


if (isset($_FILES["foto"]) && isset($_POST["submit"])) {
   
    $db = new dbMysql;
    $foto = $_FILES["foto"];
    $fotoName = $_FILES["foto"]["name"];
    $fotoTmpName = $_FILES["foto"]["tmp_name"];
    $fotoSize = $_FILES["foto"]["size"];
    $fotoError = $_FILES["foto"]["error"];
    $fotoType = $_FILES["foto"]["type"];
    $ext = strtolower(pathinfo($fotoName, PATHINFO_EXTENSION));
    $formatosPermitidos = array("jpg", "jpeg", "png");
   

   if (in_array($ext, $formatosPermitidos)) {
    if ($fotoError === 0)   { 
      $destino = "img_perfiles/".$fotoName;
      move_uploaded_file($fotoTmpName, $destino);
      $perfil = new perfil($_POST); 
      $db->guardarPerfil($perfil);  
      $lastId = $db->lastId();
      $id = $lastId->getId();
      $db->updateFoto($id, $fotoName);
      header("Location:perfiles_carga.php");
      exit; }


     else {
        echo "Hubo un error en la carga de la foto"; 
        
    }
   }   else {
       echo "La extension de la foto es incorrecta. Solo se permiten JPG, JPEG y PNG";
   }
};

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carga de Perfiles</title>
</head>
<body>
    <div class="container">


    <form class="form" action="perfiles_carga.php" method="post" enctype="multipart/form-data">
<div style="margin:10px;">
<label for="responsable">Responsable</label>
<input id="responsable"  name="responsable" type="text" value="">
</div><div style="margin:10px;">
<label for="pais">Pais</label>
<input id="pais"  name="pais" type="text" value="">
</div><div style="margin:10px;">
<label for="nombre">Nombre</label>
<input id="nombre"  name="nombre" type="text" value="">
</div><div style="margin:10px;">
<label for="apellido">Apellido</label>
<input id="apellido"  name="apellido" type="text" value="">
</div><div style="margin:10px;">
<label for="bajada">Bajada</label>
<input id="bajada"  name="bajada" type="text" value="">
</div><div style="margin:10px;">
<label for="categoria">Categoria</label>
<input id="categoria"  name="categoria" type="text" value="">
</div><div style="margin:10px;">
<label for="subcategoria">Subcategoria</label>
<input id="subcategoria"  name="subcategoria" type="text" value="">
</div><div style="margin:10px;">
<label for="resumen">Resumen</label>
<textarea id="resumen"  name="resumen" rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="historia">Historia</label>
<textarea id="historia"  name="historia" rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="rol">Rol Actual</label>
<input id="rol"  name="rol" type="text" value="">
</div><div style="margin:10px;">
<label for="org_fund">Otras organizaciones fundadas</label>
<input id="org_fund"  name="org_fund" type="text" value="">
</div><div style="margin:10px;">
<label for="foco">Foco poblacional</label>
<textarea id="foco"  name="foco"  rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="influencia">Áreas de influencia</label>
<textarea id="influencia"  name="influencia"  rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="replicacion">Replicación independiente</label>
<textarea id="replicacion"  name="replicacion"  rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="cambio_perspectiva">Cambio de perspectiva</label>
<textarea id="cambio_perspectiva"  name="cambio_perspectiva"  rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="empoderamiento">Empoderamiento de personas</label>
<textarea id="empoderamiento"  name="empoderamiento"  rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="cambios_economicos">Cambios en el sistema económico</label>
<textarea id="cambios_economicos"  name="cambios_economicos"  rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="politicas_publicas">Políticas públicas</label>
<textarea id="politicas_publicas"  name="politicas_publicas"  rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="frase_nueva">Frase nueva</label>
<textarea id="frase_nueva"  name="frase_nueva"  rows="5" cols="50"></textarea>
</div><div style="margin:10px;">
<label for="foto">foto</label>
<input id="foto"  name="foto" type="file" value="">
</div><div style="margin:20px;">
<button type="submit" name="submit">Guardar</button>
</div>

    </form>
    </div>
</body>
</html>