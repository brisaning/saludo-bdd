<?php

/**
 * @file
 * Contains saludo_brisan.module.php.
 */

 use Drupal\Core\Render\Element;

 /**
  * Implements hook_theme().
  */
 function saludo_brisan_theme($existing, $type, $theme, $path) {
   return [
     'saludo_brisan' => [
       'render element' => 'elements',
       'variables' => [
         'nombre' => NULL,
       ],
       'template' => 'saludo-brisan',
       'path' => $path . '/templates',
     ],
   ];