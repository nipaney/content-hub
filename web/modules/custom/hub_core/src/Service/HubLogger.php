<?php

namespace Drupal\hub_core\Service;

use Drupal\Core\Logger\LoggerChannelFactoryInterface;

/**
 * Builds the Content Hub page output.
 */
class HubLogger {

  /**
   * Entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $logger;

  public function __construct(LoggerChannelFactoryInterface $logger_factory) {
    $this->logger = $logger_factory->get('hub_core');
  }

  /**
   * Builds the Content Hub page output.
   */
  public function log($message) {
    $this->logger->notice($message);
  }

}
