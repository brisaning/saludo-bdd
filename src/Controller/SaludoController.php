<?php

namespace Drupal\saludo_brisan\Controller;

use Drupal\Core\Controller\ControllerBase;

class SaludoController extends ControllerBase {

  public function saludo() {
    $account = \Drupal::currentUser();
    $nombre = $account->isAnonymous() ? $this->t('visitante') : $account->getDisplayName();

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