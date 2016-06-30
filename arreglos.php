<?php

# Los arreglos son variables que nos permiten almacenar múltiples valores.

# Ejemplo de un arreglo con los días de la semana.
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

# En los arreglos podemos almacenar cualquier tipo de dato, incluso podemos almacenar un arreglo dentro de otro

$arreglo = array('cadenas de texto', 1, array('asd', 123), true);

# Ejemplo en el que mostramos los días de la semana en pantalla a partir de nuestro arreglo llamado semana

echo $semana[0] . '<br>';
echo $semana[1] . '<br>';
echo $semana[2] . '<br>';
echo $semana[3] . '<br>';
echo $semana[4] . '<br>';
echo $semana[5] . '<br>';
echo $semana[6] . '<br>';


# tipos de arreglos

# 1. Arreglo indexado - Como el que vimos en el ejemplo anterior

# 2. Arreglo asociativo: En el cual podemos acceder a los valores del arreglo mediante cadenas de texto que nosotros especifiquemos. Por ejemplo: 

# 3. Arreglos Multidimensionales: Son aquellos que contienen un arreglo dentro de otro arreglo


?>