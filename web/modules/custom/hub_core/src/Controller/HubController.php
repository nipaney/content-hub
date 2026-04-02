<?php

namespace Drupal\hub_core\Controller;

use Drupal\Core\Controller\ControllerBase;

class HubController extends ControllerBase {
  public function dashboard() {
    return [
      '#markup' => 'Welcome to Hub Dashboard',
    ];
  }
}
