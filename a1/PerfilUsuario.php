<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">

<link rel="stylesheet" href="../a1/formularios.css" />
<head>
  <title>Perfil Usuario</title>
  <meta charset="UTF-8">
</head>
<body>
<ul>
  <input type="image" src="https://image.flaticon.com/icons/svg/23/23657.svg" align="left" width="30" height="30" alt="Submit">
<h2>Su Información</h2>

<form method="POST" action="../a1/mostrarDatos.php">
  
  <fieldset class="fieldset-principal">
  <legend>Autenticación</legend>
  Código: ]
  <input type="number" name="codigo" min="1" max="20000"><br><br>
  Número de Verificación: 
  <input type="password" name="pwd"><br><br>
  <input type="submit" name="btnAutenticarDG"value="Autenticar">
</fieldset>  
</form> 
</body>
</html>

