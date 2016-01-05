<?php
error_reporting(E_ALL);
header('Content-Type: text/html; charset=ISO-8859-1');

include('conf.php');

if (!empty($_GET['page']))
  $modulo = $_GET['page'];
else
  $modulo = MODULO_DEFECTO;

if (empty($conf[$modulo]))
    $modulo = MODULO_ERROR;

if (empty($conf[$modulo]['layout']))
    $conf[$modulo]['layout'] = LAYOUT_DEFECTO;
    
$path_layout = LAYOUT_PATH.'/'.$conf[$modulo]['layout'];
$path_modulo = MODULO_PATH.'/'.$conf[$modulo]['archivo'];

if (file_exists($path_layout))
  include( $path_layout );
else
  if (file_exists( $path_modulo ))
      include( $path_modulo );
  else
    die('Oops! ocurrio un error al cargar el módulo <b>'.$modulo.'</b>. No existe el archivo <b>'.$conf[$modulo]['archivo'].'</b> en el servidor, la dirección introducida puede ser erronea');
?>