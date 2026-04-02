<?php

namespace Drupal\hub_core\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Builds the Content Hub page output.
 */
class HubController extends ControllerBase {

  /**
   * Builds the Content Hub page output.
   */
  public function dashboard() {
    return [
      '#markup' => 'Welcome to Hub Dashboard',
    ];
  }

}
