<?php

namespace Drupal\saludo_brisan\Controller;

use Drupal\Core\Controller\ControllerBase;

class SaludoController extends ControllerBase {

  public function saludo() {
    // Obtiene el usuario actual a través del servicio
    $account = \Drupal::currentUser();
    // Obtener el nombre del usuario o "visitante" si es anónimo
    $nombre = $account->isAnonymous() ? $this->t('visitante') : $account->getDisplayName();

    // Construir el render array con el template
    return [
      '#theme' => 'saludo_brisan',
      '#nombre' => $nombre,
      '#attached' => [
        'library' => [
          'saludo_brisan/saludo-styles',
        ],
      ],
    ];
  }
}