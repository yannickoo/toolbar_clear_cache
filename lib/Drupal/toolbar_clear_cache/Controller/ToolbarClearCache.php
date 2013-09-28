<?php

/**
 * @file
 * Contains \Drupal\toolbar_clear_cache\Controller\ToolbarClearCache.
 */

namespace Drupal\toolbar_clear_cache\Controller;

use \Symfony\Component\HttpFoundation\RedirectResponse;


/**
 * Controller routines for toolbar cache clear routes.
 */
class ToolbarClearCache {

  public function clearCache() {
    drupal_flush_all_caches();
    drupal_set_message(t('Caches cleared.'));
    return new RedirectResponse(url($_SERVER['HTTP_REFERER']));
  }

}
