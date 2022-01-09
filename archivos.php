<?php
function Subir($nombre,$direccion){
  $destino = "Archivos/" . $nombre;
  $move = move_uploaded_file($direccion,$destino);
  /*if ($move) {
    echo "Se agrego correctamente el archivo";
  }else{
    echo "No se pudo cargar el archivo";
  }*/
}
 ?>
