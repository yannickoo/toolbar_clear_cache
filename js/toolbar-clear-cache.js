/**
 * @file
 * Attaches behaviors for the Toolbar Clear Cache module.
 */

(function ($) {

"use strict";

Drupal.behaviors.toolbarClearCache = {
  attach: function (context) {
    var $context = $(context);

    // Find all contextual links placeholders, if any.
    var $toolbarClearCacheLinks = $('.toolbar-clear-cache', context).once('toolbar-clear-cache');
    if ($toolbarClearCacheLinks.length === 0) {
      return;
    }

    $toolbarClearCacheLinks.each(function () {
      $(this).attr('href', this.href + '?destination=' + Drupal.encodePath(drupalSettings.currentPath));
    });

  }
};

})(jQuery);
