<?php
/*
Plugin Name: Plugin Organizer
Description: Hardcode-only disable plugins based on URL/page and improve site performance
Version: 1.0
Author: Fabio Lucas Pampin
Author URI: https://github.com/Copperdust
License: All right reserved
*/

class PluginOrganizer
{

  public $all_plugins = array(
    'CBDAffs-plugin/index.php',
    'PDFEmbedder-premium/mobile_pdf_embedder.php',
    'accordion-pro/accordion-pro.php',
    'affiliate-wp-pushover/affiliate-wp-pushover.php',
    'affiliate-wp/affiliate-wp.php',
    'affiliatewp-affiliate-area-tabs/affiliatewp-affiliate-area-tabs.php',
    'affiliatewp-force-pending-referrals/affwp-force-pending-referrals.php',
    'affiliatewp-order-details-for-affiliates/affiliatewp-order-details-for-affiliates.php',
    'affiliatewp-show-affiliate-coupons/affiliatewp-show-affiliate-coupons.php',
    'affiliatewp-store-credit/affiliatewp-store-credit.php',
    'affiliatewp-tiered-affiliate-rates/affiliate-wp-tiered-rates.php',
    'affiliatewp-woocommerce-redirect-affiliates/affwp-wc-redirect-affiliates.php',
    'allow-html-in-category-descriptions/html-in-category-descriptions.php',
    'amazon-s3-and-cloudfront/wordpress-s3.php',
    'capability-manager-enhanced/capsman-enhanced.php',
    'cbdfx-logic/cbdfx-logic.php',
    'classic-editor/classic-editor.php',
    'custom-order-numbers-for-woocommerce/custom-order-numbers-for-woocommerce.php',
    'disable-author-pages-littlebizzy/disable-author-pages.php',
    'duplicate-post/duplicate-post.php',
    'easy-table-of-contents/easy-table-of-contents.php',
    'envato-market/envato-market.php',
    'facebook-for-woocommerce/facebook-for-woocommerce.php',
    'hide-this/hide-this.php',
    'hm-product-sales-report-pro/hm-product-sales-report.php',
    'hotjar/hotjar.php',
    'id-services/verifypass.php',
    'ignitewoo-updater/ignitewoo-updater.php',
    'log-http-requests/log-http-requests.php',
    'nav-menu-roles/nav-menu-roles.php',
    'omnisend-connect/omnisend-woocommerce.php',
    'perfmatters/perfmatters.php',
    'postaffiliatepro/postaffiliatepro.php',
    'pushalert-web-push-notifications/pushalert.php',
    'pw-bogo/pw-woocommerce-bogo-free.php',
    'pw-gift-cards/pw-gift-cards.php',
    'really-simple-ssl/rlrsssl-really-simple-ssl.php',
    'redis-cache-pro/redis-cache-pro.php',
    'refersion-for-woocommerce/refersion.php',
    'remove-admin-menus-by-role/remove-admin-menus-by-role.php',
    'revoffers-advertiser-integration/revoffers-advertiser-integration.php',
    'rewardsystem/rewardsystem.php',
    'rich-snippets-wordpress-plugin/rich-snippets-wordpress-plugin.php',
    'search-exclude/search-exclude.php',
    'shareasale-wc-tracker/shareasale-wc-tracker.php',
    'shortcoder/shortcoder.php',
    'sitemap-with-woocommerce/index.php',
    'snip-yotpo-bridge/snip-yotpo-bridge.php',
    'tinymce-advanced/tinymce-advanced.php',
    'transients-manager/transients-manager.php',
    'user-switching/user-switching.php',
    'webgility_wp_woocommerce/webgility_wp_woocommerce.php',
    'weight-based-shipping-for-woocommerce/plugin.php',
    'woo-gutenberg-products-block/woocommerce-gutenberg-products-block.php',
    'woo-product-bundle-premium/index.php',
    'woocommerce-bolder-product-alerts/woocommerce-bolder-product-alerts.php',
    'woocommerce-conditional-shipping-and-payments/woocommerce-conditional-shipping-and-payments.php',
    'woocommerce-conversion-tracking-pro/woocommerce-conversion-tracking-pro.php',
    'woocommerce-conversion-tracking/conversion-tracking.php',
    'woocommerce-free-gift-coupons/woocommerce-free-gift-coupons.php',
    'woocommerce-google-analytics-pro/woocommerce-google-analytics-pro.php',
    'woocommerce-pdf-invoices-packing-slips/woocommerce-pdf-invoices-packingslips.php',
    'woocommerce-shipment-tracking/woocommerce-shipment-tracking.php',
    'woocommerce-shipstation-integration/woocommerce-shipstation.php',
    'woocommerce-snap-pixel-master/pixel.php',
    'woocommerce-zapier/woocommerce-zapier.php',
    'woocommerce/woocommerce.php',
    'wordpress-importer/wordpress-importer.php',
    'wp-crontrol/wp-crontrol.php',
    'wp-ses/wp-ses.php',
    'wpseo-local/local-seo.php',
    'yikes-inc-easy-custom-woocommerce-product-tabs/yikes-inc-easy-custom-woocommerce-product-tabs.php',
    'yotpo-social-reviews-for-woocommerce/wc_yotpo.php',
    'zopim-live-chat/zopim.php',
  );

  public $always_enabled = array(
    'woocommerce-conversion-tracking-pro/woocommerce-conversion-tracking-pro.php',
    'woocommerce-conversion-tracking/conversion-tracking.php',
    'woocommerce-google-analytics-pro/woocommerce-google-analytics-pro.php',
    'wordpress-seo-premium/wp-seo-premium.php',
    'wp-rocket/wp-rocket.php',
    "woocommerce/woocommerce.php",
    'zopim-live-chat/zopim.php',
    'shareasale-wc-tracker/shareasale-wc-tracker.php',
    'woo-product-bundle-premium/index.php',
    'cbdfx-logic/cbdfx-logic.php',
    'hotjar/hotjar.php',
    'redis-cache-pro/redis-cache-pro.php',
  );

  public $cart_and_checkout = array(
    'woocommerce-shipstation-integration/woocommerce-shipstation.php',
    'woocommerce-square/woocommerce-square.php',
    'woocommerce-conditional-shipping-and-payments/woocommerce-conditional-shipping-and-payments.php',
    'woo-product-bundle-premium/index.php',
    'weight-based-shipping-for-woocommerce/plugin.php',
    'rewardsystem/rewardsystem.php',
  );

  public $cart = array();

  public $checkout = array();

  function __construct()
  {
    // Save URL to class variable for easy access later
    $this->url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

    // Define our own DOING_AJAX - we are too early in the execution flow to
    // have that defined and we need it
    $this->ajax =
      (bool) strpos($this->url, '/wp-admin/admin-ajax.php') !== false ||
      (bool) strpos($this->url, 'wc-ajax') !== false;

    // Filter active plugins
    $this->add_our_filter('option_active_plugins');
  }

  /**
   * Determine the current post's post type. This should only be called from the
   * CMS on the edit post page, as we assume the post id will be in the post
   * variable on the URL
   */
  public function get_post_type()
  {
    // We are getting the post a bit early over here, but it shouldn't matter,
    // WordPress caches all this. Plus we are 'caching' the post type so it's
    // only done once.
    if (!isset($this->post_type)) {
      $post = WP_Post::get_instance($_GET['post']);
      $this->post_type = $post->post_type;
    }
    return $this->post_type;
  }

  /**
   * Self descriptive. Wrapper for add_filter when the method to call's name is
   * the filter's name
   */
  public function add_our_filter($tag, $priority = 10, $accepted_args = 1)
  {
    add_filter($tag, array($this, $tag), $priority, $accepted_args);
  }

  /**
   * Self descriptive. Wrapper for add_action when the method to call's name is
   * the action's name
   */
  public function add_our_action($tag, $priority = 10, $accepted_args = 1)
  {
    add_action($tag, array($this, $tag), $priority, $accepted_args);
  }

  /**
   * Self descriptive. Wrapper for remove_filter when the method to call's name
   * is the filter's name
   */
  public function remove_our_filter($tag, $priority = 10, $accepted_args = 1)
  {
    remove_filter($tag, array($this, $tag), $priority, $accepted_args);
  }

  /**
   * Self descriptive. Wrapper for remove_action when the method to call's name
   * is the action's name
   */
  public function remove_our_action($tag, $priority = 10, $accepted_args = 1)
  {
    remove_action($tag, array($this, $tag), $priority, $accepted_args);
  }

  /**
   * Filter which plugins are active. This is a replacement for the Plugin
   * Organizer plugin, which, while it works, doesn't allow for complex
   * filtering using RegEx, only static URLs, or checking for post types.
   * It doesn't even allow partial URL matching...
   */
  public function option_active_plugins($plugins)
  {

    // Do not act if...
    //  - We are updating
    //  - We are on the plugins page
    //  - We are doing an AJAX request
    if (
      strpos($this->url, '/wp-admin/update-core.php') !== false ||
      strpos($this->url, '/wp-admin/plugins.php') !== false ||
      $this->ajax
    ) {
      return $plugins;
    }

    // Cart page filter
    if (strpos($this->url, '/cart') !== false) {
      return array_merge($this->always_enabled, $this->cart_and_checkout, $this->cart);
    }

    // // Checkout page filter
    // if (strpos($this->url, '/checkout') !== false) {
    //   return array_merge($this->always_enabled, $this->cart_and_checkout, $this->checkout);
    // }

    return $plugins;
  }
}

// Hook ourselves as early as possible
add_action('muplugins_loaded', function () {
  new PluginOrganizer();
});
