<?php
/**
 * @file
 * Contains \Drupal\presentation\Plugin\Block\SimpleBlock.
 */

namespace Drupal\presentation\Plugin\Block;

use Drupal\block\Annotation\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a 'Presentation: simple block' block.
 *
 * @Block(
 *   id = "presentation_simple",
 *   subject = @Translation("Presentation: simple block"),
 *   admin_label = @Translation("Presentation: simple block")
 * )
 */
class SimpleBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => t("My block content"),
    );
  }
}
