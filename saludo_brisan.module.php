<?php

/**
 * @file
 * Contains saludo_brisan.module.
 */

use Drupal\Core\Render\Element;

/**
 * Implements hook_theme().
 */
function saludo_brisan_theme() {
  return [
    'saludo_brisan' => [
      'variables' => [
        'nombre' => NULL,
      ],
      'template' => 'saludo-brisan',
    ],
  ];
}