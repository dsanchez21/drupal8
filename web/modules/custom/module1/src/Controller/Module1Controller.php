<?php

namespace Drupal\module1\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class Module1Controller.
 *
 * @package Drupal\module1\Controller
 */
class Module1Controller extends ControllerBase {

  /**
   * Prints the current time.
   *
   * @return array
   *   A render array containing the current time.
   */
  public function render() {
    return [
      '#theme' => 'post_list',
      '#titulo' => 'Titulo',
      '#items' => array('Post1', 'Post2', 'Post3', 'Post4'),
    ];
  }

}
