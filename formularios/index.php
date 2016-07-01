<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Enviando datos desde un formulario</title>
</head>
<body>
  
  <form action="recibe.php" method="">
    <input type="text" name="nombre" placeholder="Nombre: "><br>
    
    <label for="hombre">Hombre</label>
    <input type="radio" name="sexo" id="hombre" value="hombre">

    <label for="mujer">Mujer</label>
    <input type="radio" name="sexo" id="mujer" value="hombre"> <br>

    <select name="year" id="year">
      <option value="2000">2000</option>
      <option value="1994">1994</option>
      <option value="1995">1995</option>
    </select><br>
    
    <label for="terminos">Acepta los terminos?</label>
    <input type="checkbox" name="terminos" id="terminos" value="true"><br>
    <input type="submit" name="enviar" value="Enviar">
  </form>

</body>
</html>