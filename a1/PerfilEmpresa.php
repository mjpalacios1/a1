<!DOCTYPE html>
<html>

<link rel="stylesheet" href="/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">

<link rel="stylesheet" href="../a1/formularios.css" />
<head>
  <title>Perfil Empresa</title>
  <meta charset="UTF-8">
</head>
<body>
<ul>
  <input type="image" src="http://hymair.es/wp-content/uploads/2013/06/nuestra-empresa-icon.png" align="left" width="30" height="30" alt="Submit">
<h2>Su Información</h2>

<form method="POST" action="../a1/mostrarEmpresa.php">
  
  <fieldset class="fieldset-principal">
  <legend>Autenticación</legend>
  Código: 
  <input type="number" name="codigo" min="1" max="20000"><br><br>
  Número de Verificación: 
  <input type="password" name="pwd"><br><br>
   <input type="submit" name="btnAutenticarDG"value="Autenticar">
</fieldset>  
 
</form> 
</body>

</html>
