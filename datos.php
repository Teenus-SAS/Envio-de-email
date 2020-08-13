<?php
    $conexion = mysqli_connect("localhost","root","","Encuesta" );
    $select= mysqli_query($conexion,"select * from preguntas");
      while($aaa=mysqli_fetch_assoc($select)){
        $arr[]=$aaa;
  }
echo json_encode($arr);
 ?>
