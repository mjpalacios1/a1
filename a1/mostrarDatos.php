
<?php
 error_reporting(0);
  $Nombre=$_REQUEST['txtnombre'];
  $nomb2=$_REQUEST['txtnombre2'];
  $Apellido=$_REQUEST['txtapellido'];
  $Apellido2=$_REQUEST['txtapellido2'];
  $Genero=$_REQUEST['genero'];
  $Fecha=$_REQUEST['bday'];
  $ecivil=$_REQUEST['estadoCivil'];
  $nhijos=$_REQUEST['nhijos'];
  $email=$_REQUEST['txtemail'];
  $telef=$_REQUEST['txttelefono'];
  $Fechae=$_REQUEST['Egreso'];
  $nivel=$_REQUEST['nivelEducacion'];
  $estatura=$_REQUEST['estatura'];
  $peso=$_REQUEST['peso'];
  $Verificacion=$_REQUEST['pwd'];
  $CodigoM=$_REQUEST['codigo'];
  $servidor=mysqli_connect("localhost","root","","empleoya");
  if(isset($_REQUEST['btnGuardar'])){
    $sql="insert into usuario (nombre, segundoNombre, apellido,segundoApellido, genero, fechaNacimiento, estadoCivil, numeroHijos, estatura,peso,email, telefono, educacion, fechaEgreso, fechaRegistro, horaRegistro, hojaVida, numeroVerificacion) VALUES ('$Nombre', '$nomb2', '$Apellido', '$Apellido2', '$Genero', '$Fecha', '$ecivil', $nhijos,$estatura,$peso ,'$email', '$telef', '$nivel','','','','hojaVida','$Verificacion');";
    $ejecutar=$servidor->query($sql);

    $sql2="select codigo from usuario where nombre='$Nombre' and segundoNombre='$nomb2' and apellido='$Apellido' and segundoApellido='$Apellido2';";
    
    $ejecutar=$servidor->query($sql2);
    while($fila = mysqli_fetch_array($ejecutar))
    {
    echo "<br> Su codigo es: " . $fila['codigo'];
    }
      echo " <!DOCTYPE html>
<html>
<link rel=\"stylesheet\" href=\"/w3.css\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/lib/w3-theme-indigo.css\">
<head>
  <title>Formulario en HTML5</title>
  <meta charset=\"UTF-8\">
  <style>
    body { font-size: 16px; font-family: sans-serif; }
    .fieldset-principal {
      padding-left: 2em;
      padding-right: 2em;
      margin-top: 10px;
      margin-bottom: 10px;
      border: 2px solid #395870;
      box-shadow: 3px 6px 2px rgba(0, 0, 0, .3);
    }

    .fieldset-principal > legend {
      padding: 0.2em 0.5em;
      border:1px solid;
      background: #395870;
      background: linear-gradient(#49708f, #293f50);
      color: white;
    }
    legend { font-weight: bold; }

  </style>
</head>
<body class=\"w3-theme-l3\">
<form method=\"POST\" action=\"../menu.html\">
<ul>
  <input type=\"image\" src=\"https://pngimage.net/wp-content/uploads/2018/06/icono-nuevo-registro-png-4.png\" align=\"left\" width=\"30\" height=\"30\" alt=\"Submit\">
<h2>Se ha registrado correctamente</h2>
  <fieldset class=\"fieldset-principal\">
  <input type=\"hidden\" id=\"idReserva\" name=\"idReserva\" value=\"123\">
  <legend>Datos Personales</legend>
  Nombre: ".$Nombre."
  <br>Segundo Nombre: ".$nomb2."
  <br>Apellido:  ".$Apellido."
   <br>Segundo Apellido:  ".$Apellido2."
   <br>Fecha de Nacimiento: ".$Fecha."
   <br>Estado Civil:".$ecivil."
 </fieldset>

<fieldset class=\"fieldset-principal\">
  <legend>Datos de Contacto</legend>
  E-mail: ".$email."
   <br>Teléfono: ".$telef."
  
</fieldset>

<fieldset class=\"fieldset-principal\">
  <legend>Nivel de Educación</legend>
  <br> Ultimo nivel completado: ".$nivel."
   <br>Fecha de Egreso: ".$Fechae."
   <br> 
   <br><input class=\"w3-btn w3-black w3-center\" type\"=\"submit\" value=\"IR A LA PAGINA PRINCIPAL\">
</fieldset>
</form>
</body>
</html>";
}
if(isset($_REQUEST['btnAutenticarDG'])){
    $sql="select * from  usuario WHERE codigo='$CodigoM'and numeroVerificacion='$Verificacion';";
    $ejecutar=$servidor->query($sql);
    $fila = mysqli_fetch_array($ejecutar);
    switch ($fila['educacion']) {
    case 'Primaria':
        $aux="<select name=\"nivelEducacion\">
  <option selected=\"true\" value=\"1\">Primaria</option>
  <option value=\"2\">Bachiller</option>
  <option value=\"3\">Tecnologia</option>
  <option value=\"4\">Ingenieria/Licenciatura</option>
  <option value=\"5\">Maestria/Posgrado</option>
</select>";
        break;
    case 'Bachiller':
           $aux="<select name=\"nivelEducacion\">
  <option value=\"1\">Primaria</option>
  <option selected=\"true\" disabled=\"disabled\" value=\"2\">Bachiller</option>
  <option value=\"3\">Tecnologia</option>
  <option value=\"4\">Ingenieria/Licenciatura</option>
  <option value=\"5\">Maestria/Posgrado</option>
</select>";
        break;
    case 'Tecnologia':
          $aux="<select name=\"nivelEducacion\">
  <option value=\"1\">Primaria</option>
  <option value=\"2\">Bachiller</option>
  <option selected=\"true\" value=\"3\">Tecnologia</option>
  <option value=\"4\">Ingenieria/Licenciatura</option>
  <option value=\"5\">Maestria/Posgrado</option>
</select>";
        break;
    case 'Ingenieria/Licenciatura':
          $aux="<select name=\"nivelEducacion\">
  <option value=\"1\">Primaria</option>
  <option value=\"2\">Bachiller</option>
  <option value=\"3\">Tecnologia</option>
  <option selected=\"true\" value=\"4\">Ingenieria/Licenciatura</option>
  <option value=\"5\">Maestria/Posgrado</option>
</select>";
        break;
     case 'Maestria/Posgrado':
          $aux="<select name=\"nivelEducacion\">
  <option value=\"1\">Primaria</option>
  <option value=\"2\">Bachiller</option>
  <option value=\"3\">Tecnologia</option>
  <option value=\"4\">Ingenieria/Licenciatura</option>
  <option selected=\"true\"  value=\"5\">Maestria/Posgrado</option>
</select>";
        break;
    }
    echo "<!DOCTYPE html>
<html>
<link rel=\"stylesheet\" href=\"/w3.css\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/lib/w3-theme-indigo.css\">

<link rel=\"stylesheet\" href=\"../a1/formularios.css\" />
<head>
  <title>Perfil usuario</title>
  <meta charset=\"UTF-8\">
</head>
<body>
<ul>
  <input type=\"image\" src=\"http://hymair.es/wp-content/uploads/2013/06/nuestra-empresa-icon.png\" align=\"left\" width=\"30\" height=\"30\" alt=\"Submit\">
<h2>Su Información</h2>

<form method=\"POST\" action=\"../a1/mostrarDatos.php\">
  
  <fieldset class=\"fieldset-principal\">
  <legend>Autenticación</legend>
  Código: 
  <input type=\"number\" name=\"codigo\" min=\"1\" max=\"20000\" value=\"". $fila['codigo']."\">
  <br><br>
  Número de Verificación: 
   <input type=\"password\" name=\"pwd\" value=\"". $fila['numeroVerificacion']."\"><br><br>
</fieldset>
<fieldset class=\"fieldset-principal\">
  <legend>Actualizar Datos Personales</legend>
  Nombre:  
  <input type=\"text\" name=\"txtnombre\" value=\"". $fila['nombre']."\"> 
  Segundo Nombre:  
  <input type=\"text\" name=\"txtnombre2\" value=\"". $fila['segundoNombre']."\"> <br><br>
  Apellido:  
  <input type=\"text\" name=\"txtapellido\" value=\"". $fila['apellido']."\">&nbsp;&nbsp;&nbsp;&nbsp;
  Segundo Apellido:  
  <input type=\"text\" name=\"txtapellido2\" value=\"". $fila['segundoApellido']."\">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
  Estado Civil:
  <select name=\"estadoCivil\">
  <option value=\"Solter@\">Solter@</option>
  <option value=\"Casad@\">Casad@</option>
  <option value=\"Divorciad@\">Divorciad@</option>
  <option value=\"Viud@\">Viud@</option>
  <option value=\"Unión Libre\">Unión Libre</option>
</select> <br><br>
  Número de hijos: 
  <input type=\"number\" name=\"nhijos\" min=\"0\" max=\"20\" value=\"". $fila['numeroHijos']."\"><br><br>
 </fieldset>
 <fieldset class=\"fieldset-principal\">
  <legend>Aspecto Físico</legend>
  Estatura (cm): <input type=\"range\" name=\"estatura\" min=\"90\" max=\"300\" step=\"15\" value=\"". $fila['estatura']."\"><br><br>
  Peso : <input type=\"range\" name=\"peso\" min=\"90\" max=\"300\" step=\"15\" value=\"". $fila['peso']."\"><br><br>
 
</fieldset>
<fieldset class=\"fieldset-principal\">
  <legend>Datos de Contacto</legend>
  E-mail: <input type=\"email\" name=\"txtemail\"  value=\"". $fila['email']."\"><br><br>
  Teléfono: <input type=\"tel\" name=\"txttelefono\"  value=\"". $fila['telefono']."\"><br><br>
</fieldset>

<fieldset class=\"fieldset-principal\">
  <legend>Actualizar Nivel de Educacion</legend>
  Seleccione el nivel de educación solicitado:
  ".$aux." <br><br>
   Fecha de Egreso: <input type=\"month\" name=\"Egreso\" value=\"". $fila['fechaEgreso']."\"><br><br>
 
</fieldset>
<fieldset class=\"fieldset-principal\">
   <input type=\"submit\" name=\"btnActualizarDA\"value=\"Actualizar\">
  <input type=\"reset\" value=\"Limpiar\">
  <input type=\"submit\" name=\"btnEliminar\"value=\"Eliminar Perfil\">
</fieldset>
  
 
</form> 
</body>
</html>
";

  }

  if(isset($_REQUEST['btnActualizarDA'])){
     $sql="update usuario set nombre='$Nombre', segundoNombre='$nomb2',apellido='$Apellido',segundoApellido= '$Apellido2',genero='$Genero', fechaNacimiento='$Fecha',estadoCivil='$ecivil',numeroHijos='$nhijos',peso='$peso', email='$email', telefono='$telef'
   ,educacion='$nivel' WHERE codigo='$CodigoM';";
    $ejecutar=$servidor->query($sql);
    echo $servidor->error;
         echo " <!DOCTYPE html>
<html>
<link rel=\"stylesheet\" href=\"/w3.css\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/lib/w3-theme-indigo.css\">
<head>
  <title>Formulario en HTML5</title>
  <meta charset=\"UTF-8\">
  <style>
    body { font-size: 16px; font-family: sans-serif; }
    .fieldset-principal {
      padding-left: 2em;
      padding-right: 2em;
      margin-top: 10px;
      margin-bottom: 10px;
      border: 2px solid #395870;
      box-shadow: 3px 6px 2px rgba(0, 0, 0, .3);
    }

    .fieldset-principal > legend {
      padding: 0.2em 0.5em;
      border:1px solid;
      background: #395870;
      background: linear-gradient(#49708f, #293f50);
      color: white;
    }
    legend { font-weight: bold; }

  </style>
</head>
<body class=\"w3-theme-l3\">
<form method=\"POST\" action=\"../menu.html\">
<ul>
  <input type=\"image\" src=\"https://pngimage.net/wp-content/uploads/2018/06/icono-nuevo-registro-png-4.png\" align=\"left\" width=\"30\" height=\"30\" alt=\"Submit\">
<h2>Se ha registrado correctamente</h2>
  <fieldset class=\"fieldset-principal\">
  <input type=\"hidden\" id=\"idReserva\" name=\"idReserva\" value=\"123\">
  <legend>Datos Personales</legend>
  Nombre: ".$Nombre."
  <br>Segundo Nombre: ".$nomb2."
  <br>Apellido:  ".$Apellido."
   <br>Segundo Apellido:  ".$Apellido2."
   <br>Fecha de Nacimiento: ".$Fecha."
   <br>Estado Civil:".$ecivil."
 </fieldset>

<fieldset class=\"fieldset-principal\">
  <legend>Datos de Contacto</legend>
  E-mail: ".$email."
   <br>Teléfono: ".$telef."
  
</fieldset>

<fieldset class=\"fieldset-principal\">
  <legend>Nivel de Educación</legend>
  <br> Ultimo nivel completado: ".$nivel."
   <br>Fecha de Egreso: ".$Fechae."
   <br> 
   <br><input class=\"w3-btn w3-black w3-center\" type\"=\"submit\" value=\"IR A LA PAGINA PRINCIPAL\">
</fieldset>
</form>
</body>
</html>";

    
  }
  if(isset($_REQUEST['btnEliminar'])){
    $sql="delete from  usuario WHERE codigo=$CodigoM and numeroVerificacion=$Verificacion;";
    $ejecutar=$servidor->query($sql);
    echo " <!DOCTYPE html>
<html>
<h1 style=\"text-align: center;\"><strong>EmpleoYa</strong>&nbsp;</h1>
<p>Su perfil ha sido eliminado con &eacute;xito&nbsp;</p>
<p>Regrese pronto</p>
<input type=\"image\" src=\"https://png.pngtree.com/element_origin_min_pic/17/09/06/3435f456a1913f2590263fd55248bd9e.jpg\" align=\"center\" width=\"300\" height=\"300\" alt=\"Submit\">
</html>" ;
  }
  
?>