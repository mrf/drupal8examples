<?php
/**
 * @file
 * Contains \Drupal\presentation\Controller\PresentationController.
 */

namespace Drupal\presentation\Controller;
use Drupal\Core\Controller\ControllerBase;

class PresentationController extends ControllerBase {
  public function myPage() {
    $element = array(
      '#markup' => 'Hello, world',
    );
    return $element;
  }
}
?>
