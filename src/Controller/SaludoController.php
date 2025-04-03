<?php

namespace Drupal\saludo_brisan\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;

class SaludoController extends ControllerBase {

  public function saludo(AccountInterface $account) {
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