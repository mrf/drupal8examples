<?php
/**
 * @file
 * Contains \Drupal\presentation\Controller\PresentationController.
 */

namespace Drupal\presentation\Controller;
use Drupal\Core\Controller\ControllerBase;

class PresentationController extends ControllerBase {
  public function myPage() {
    $seconds_to_wait = \Drupal::config('presentation.settings')->get('seconds_to_wait');
    $element = array(
      '#markup' => $seconds_to_wait,
    );
    return $element;
  }
}
?>
