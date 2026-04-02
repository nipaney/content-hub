<?php

namespace Drupal\hub_core\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class RequestSubscriber implements EventSubscriberInterface {

  public static function getSubscribedEvents() {
    return [
      KernelEvents::REQUEST => ['onRequest'],
    ];
  }

  public function onRequest(RequestEvent $event) {
    \Drupal::logger('hub_core')->notice('Request triggered.');
  }

}
