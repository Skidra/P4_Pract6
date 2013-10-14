<html>
 <head>  
<h1>Base de Datos</h1> 
 </head>
 
 <body>      
 
<form method="post" action="ver_bd.php">
<input type="submit" value="Eliminar" />
<input type="submit" value="Editar" />
<input type="submit" value="Visualizar" />
</form>                


<table border="1">

 <?php
 $conexion = mysql_connect("localhost","root","");
 mysql_select_db("directorio");
 $consulta = "SELECT * FROM contacto";
 
 $ejecutar_consulta = mysql_query($consulta,$conexion);
 
 
 while ($registro = mysql_fetch_array($ejecutar_consulta))
 {   
 echo "<tr>";
	echo "<td>".$registro["id"]." </td> ";
	echo "<td>".$registro["nombre"]." </td>  ";
	echo "<td>".$registro["telefono"]." </td> ";
	echo "<br/ >";
 echo "</tr>";
 }
 ?>
 <!-- Cerramos tabla -->
 </table>

                                                 
 </body>                                                                 
 </html>