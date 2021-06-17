add_filter('woocommerce_return_to_shop_text', 'codeithub_prefix_store_button');
/**
 * Change 'Return to Shop' text on button
 */
function codeithub_prefix_store_button() {
        $store_button = "Back to Store"; // Change text as required

        return $store_button;
}
