<?php


/** 
* pathinfo  => PATHINFO_BASENAME
*           => PATHINFO_DIRNAME
            => PATHINFO_FILENAME
            => PATH_EXTENSION
*/

//  pathinfo('documento.txt', PATHINFO_BASENAME);

/*$resultados = glob('sessions/*.{php,txt,html}', GLOB_BRACE);
print_r($resultados);*/


/** 
* Conocer el nombre base de un archivo
*
*/
//echo basename('carpeta1/carpeta2/archivo.php', '.php');

/** 
* Devuelve el directorio padre de la ruta
*/

echo dirname('carpeta1/carpeta2/archivo.php');

?>