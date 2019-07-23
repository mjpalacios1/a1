<?php
error_reporting(0);
  $Nombre=$_REQUEST['txtnombre'];
  $Fecha=$_REQUEST['bday'];
  $Descripcion=$_REQUEST['descrip'];
  $email=$_REQUEST['txtemail'];
  $telef=$_REQUEST['txttelefono'];
  $nivel=$_REQUEST['nivelEducacion'];
  $eMax=$_REQUEST['edad1'];
  $eMin=$_REQUEST['edad2'];
  $verificacion=$_REQUEST['pwd'];
  $CodigoM=$_REQUEST['codigo'];
  $servidor=mysqli_connect("localhost","root","","empleoya");
  if(isset($_REQUEST['btnGuardar'])){

    $sql="insert into empresa (nombre, descripcion, verificacion, fechaFundacion, email, telefono, nivelEducacion, edadMinima, edadMaxima) VALUES ('$Nombre', '$Descripcion', '$verificacion', '$Fecha', '$email',  $telef, $nivel, $eMin, '$eMax');";
    $ejecutar=$servidor->query($sql);
    $sql2="select codigo from empresa where nombre='$Nombre' and descripcion='$Descripcion' and email='$email' and telefono='$telef';";
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
<form method=\"POST\" action=\"../a1/index.html\">
<ul>
  <input type=\"image\" src=\"https://pngimage.net/wp-content/uploads/2018/06/icono-nuevo-registro-png-4.png\" align=\"left\" width=\"30\" height=\"30\" alt=\"Submit\">
<h2>Se ha registrado correctamente</h2>
  <fieldset class=\"fieldset-principal\">
  <input type=\"hidden\" id=\"idReserva\" name=\"idReserva\" value=\"123\">
  <legend>Datos Personales</legend>
  Nombre: ".$Nombre."
   <br>Fecha de Fundacion: ".$Fecha."
   <br>Descripcion:".$Descripcion."
 </fieldset>

<fieldset class=\"fieldset-principal\">
  <legend>Datos de Contacto</legend>
  E-mail: ".$email."
   <br>Teléfono: ".$telef."
  
</fieldset>

<fieldset class=\"fieldset-principal\">
   <br><input class=\"w3-btn w3-black w3-center\" type\"=\"submit\" value=\"IR A LA PAGINA PRINCIPAL\">
</fieldset>
</form>
</body>
</html>";
  }

   if(isset($_REQUEST['btnAutenticarDG'])){

    $sql="select * from  empresa WHERE codigo='$CodigoM'and verificacion='$verificacion';";
    $ejecutar=$servidor->query($sql);
    $fila = mysqli_fetch_array($ejecutar);
    switch ($fila['nivelEducacion']) {
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
  <option value=\"Primaria\">Primaria</option>
  <option selected=\"true\"  value=\"Bachiller\">Bachiller</option>
  <option value=\"Tecnologia\">Tecnologia</option>
  <option value=\"Ingenieria/Licenciatura\">Ingenieria/Licenciatura</option>
  <option value=\"Maestria/Posgrado\">Maestria/Posgrado</option>
</select>";
        break;
    case 'Tecnologia':
          $aux="<select name=\"nivelEducacion\">
  <option value=\"Primaria\">Primaria</option>
  <option value=\"Bachiller\">Bachiller</option>
  <option selected=\"true\" disabled=\"disabled\" value=\"Tecnologia\">Tecnologia</option>
  <option value=\"Ingenieria/Licenciatura\">Ingenieria/Licenciatura</option>
  <option value=\"Maestria/Posgrado\">Maestria/Posgrado</option>
</select>";
        break;
    case 'Ingenieria/Licenciatura':
          $aux="<select name=\"nivelEducacion\">
  <option value=\"Primaria\">Primaria</option>
  <option value=\"Bachiller\">Bachiller</option>
  <option value=\"Tecnologia\">Tecnologia</option>
  <option selected=\"true\"  value=\"Ingenieria/Licenciatura\">Ingenieria/Licenciatura</option>
  <option value=\"Maestria/Posgrado\">Maestria/Posgrado</option>
</select>";
        break;
     case 'Maestria/Posgrado':
          $aux="<select name=\"nivelEducacion\">
  <option value=\"Primaria\">Primaria</option>
  <option value=\"Bachiller\">Bachiller</option>
  <option value=\"Tecnologia\">Tecnologia</option>
  <option value=\"Ingenieria/Licenciatura\">Ingenieria/Licenciatura</option>
  <option selected=\"true\" value=\"Maestria/Posgrado\">Maestria/Posgrado</option>
</select>";
        break;
    }
    echo "<!DOCTYPE html>
<html>
<link rel=\"stylesheet\" href=\"/w3.css\">
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/lib/w3-theme-indigo.css\">

<link rel=\"stylesheet\" href=\"../a1/formularios.css\" />
<head>
  <title>Perfil Empresa</title>
  <meta charset=\"UTF-8\">
</head>
<body>
<ul>
  <input type=\"image\" src=\"http://hymair.es/wp-content/uploads/2013/06/nuestra-empresa-icon.png\" align=\"left\" width=\"30\" height=\"30\" alt=\"Submit\">
<h2>Su Información</h2>

<form method=\"POST\" action=\"mostrarEmpresa.php\">
  
  <fieldset class=\"fieldset-principal\">
  <legend>Autenticación</legend>
  Código:
   <input type=\"number\"  readonly=\"readonly\" name=\"codigo\" min=\"1\" max=\"20000\" value=\"". $fila['codigo']."\"><br><br>
  Número de Verificación: 
  <input type=\"password\"  readonly=\"readonly\" name=\"pwd\" value=\"". $fila['verificacion']."\"><br><br>
  <br><br>
</fieldset>
<fieldset class=\"fieldset-principal\">
  <legend>Actualizar Datos Generales</legend>
  Nombre:  
  <input type=\"text\" name=\"txtnombre\" value=\"". $fila['nombre']."\"> 
  Fecha de Fundación: 
  <input type=\"date\" name=\"bday\" value=\"". $fila['fechaFundacion']."\"><br><br>
  Descripción breve:
  <input type=\"text\" name=\"descrip\" value=\"". $fila['descripcion']."\">  <br><br>
 </fieldset>
<fieldset class=\"fieldset-principal\">
  <legend>Datos de Contacto</legend>
  E-mail: <input type=\"email\" name=\"txtemail\"  value=\"". $fila['email']."\"><br><br>
  Teléfono: <input type=\"tel\" name=\"txttelefono\"  value=\"". $fila['telefono']."\"><br><br>


</fieldset>

<fieldset class=\"fieldset-principal\">
  <legend>Actualizar Aspirantes</legend>
  Seleccione el nivel de educación solicitado:
  ".$aux." <br><br>
Edad mínima: 
  <input type=\"number\" name=\"edad1\" min=\"16\" max=\"100\" value=\"". $fila['edadMinima']."\">
  Edad máxima: 
  <input type=\"number\" name=\"edad2\" min=\"20\" max=\"100\"  value=\"". $fila['edadMaxima']."\"><br><br>
  
</fieldset>
<fieldset class=\"fieldset-principal\">
 <input type=\"submit\" name=\"btnActualizar\"value=\"Actualizar\">
  <input type=\"reset\" value=\"Limpiar\">
  <input type=\"submit\" name=\"btnEliminar\"value=\"Eliminar Perfil\">
</fieldset>
</form> 
</body>
</html>";

}
if(isset($_REQUEST['btnActualizar'])){
  $CodigoM=$_REQUEST['codigo'];
   $sql="update empresa set nombre='$Nombre', descripcion='$Descripcion', fechaFundacion='$Fecha', email='$email', telefono='$telef'
   , nivelEducacion='$nivel', edadMinima='$eMin', edadMaxima='$eMax' WHERE codigo='$CodigoM';";
    $ejecutar=$servidor->query($sql);
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
<form method=\"POST\" action=\"../a1/index.html\">
<ul>
  <input type=\"image\" src=\"https://pngimage.net/wp-content/uploads/2018/06/icono-nuevo-registro-png-4.png\" align=\"left\" width=\"30\" height=\"30\" alt=\"Submit\">
<h2>Se ha registrado correctamente</h2>
  <fieldset class=\"fieldset-principal\">
  <input type=\"hidden\" id=\"idReserva\" name=\"idReserva\" value=\"123\">
  <legend>Datos Personales</legend>
  Nombre: ".$Nombre."
   <br>Fecha de Fundacion: ".$Fecha."
   <br>Descripcion:".$Descripcion."
 </fieldset>

<fieldset class=\"fieldset-principal\">
  <legend>Datos de Contacto</legend>
  E-mail: ".$email."
   <br>Teléfono: ".$telef."
  
</fieldset>

<fieldset class=\"fieldset-principal\">
   <br><input class=\"w3-btn w3-black w3-center\" type\"=\"submit\" value=\"IR A LA PAGINA PRINCIPAL\">
</fieldset>
</form>
</body>
</html>";
}
 if(isset($_REQUEST['btnEliminar'])){
   $sql="delete from  empresa WHERE codigo=$CodigoM;";
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