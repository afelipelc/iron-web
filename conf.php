<?php
/* Archivo de configuracion del sitio 
modularizado
*Definicion de valores por defecto y datos para cada uno
de los modulos
*/
define('MODULO_DEFECTO', 'home');
define('LAYOUT_DEFECTO', 'steel.php');
define('MODULO_ERROR', 'error');
define('MODULO_PATH', realpath('./content'));
define('LAYOUT_PATH', realpath('./layouts'));

//la ruta se tomó desde el servidor al indicar que había un error en el archivo de módulo al intentar escanear la carpeta
$gallerypath = '/home/content/p3pnexwpnas02_data03/37/2762237/html/content/galleries/';


//localhost/app/?page=cellardoor
$conf['cellardoor'] = array(
  'archivo'=>'cellardoor.php' );
$conf['drivewaydoor'] = array(
  'archivo'=>'drivewaydoors.php' );
$conf['firescape'] = array(
  'archivo'=>'firescape.php' );
$conf['railinghanddraling'] = array(
  'archivo'=>'railinghanddraling.php' );
$conf['securitydoor'] = array(
  'archivo'=>'securitydoor.php' );
$conf['staircase'] = array(
  'archivo'=>'staircase.php' );
$conf['steelfences'] = array(
  'archivo'=>'steelfences.php' );
$conf['structuralsteel'] = array(
  'archivo'=>'structuralsteel.php' );
$conf['window'] = array(
  'archivo'=>'window.php' );
$conf['about'] = array(
  'archivo'=>'about.html' );
$conf['services'] = array(
  'archivo'=>'services.html' );

$conf['home']=array(
  'archivo'=>'home.php',
  'layout'=> LAYOUT_DEFECTO );

?>