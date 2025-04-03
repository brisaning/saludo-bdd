<?php

/**
 * @file
 * Implementación de hooks para el módulo Saludo Brisan.
 */

/**
 * Implements hook_theme().
 */
function saludo_brisan_theme() {
  return [
    'saludo_brisan' => [
      'variables' => ['nombre' => NULL],
      'template' => 'saludo-brisan',
    ],
  ];
}