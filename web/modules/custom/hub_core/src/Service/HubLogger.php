<?php

namespace Drupal\hub_core\Service;

use Drupal\Core\Logger\LoggerChannelFactoryInterface;

class HubLogger {

  protected $logger;

  public function __construct(LoggerChannelFactoryInterface $logger_factory) {
    $this->logger = $logger_factory->get('hub_core');
  }

  public function log($message) {
    $this->logger->notice($message);
  }

}
