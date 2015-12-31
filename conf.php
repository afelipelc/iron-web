<?php
/* Archivo de configuracion del sitio 
modularizado
*Definicion de valores por defecto y datos para cada uno
de los modulos
*/
define('MODULO_DEFECTO', 'home');
define('LAYOUT_DEFECTO', 'main.php');
define('MODULO_ERROR', 'error');
define('MODULO_PATH', realpath('./content/'));
define('LAYOUT_PATH', realpath('./layouts/'));



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

$conf['home']=array(
  'archivo'=>'home.php',
  'layout'=> LAYOUT_DEFECTO );

?>