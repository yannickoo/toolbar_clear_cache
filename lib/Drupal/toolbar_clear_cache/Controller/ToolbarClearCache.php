<?php

/**
 * @file
 * Contains \Drupal\toolbar_clear_cache\Controller\ToolbarClearCache.
 */

namespace Drupal\toolbar_clear_cache\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Component\Utility\Url;


/**
 * Controller routines for toolbar cache clear routes.
 */
class ToolbarClearCache extends ControllerBase {

  public function clearCache() {
    drupal_flush_all_caches();
    drupal_set_message($this->t('Caches cleared.'));

    $destination = drupal_get_destination();
    return new RedirectResponse(url($destination['destination']));
  }

}
