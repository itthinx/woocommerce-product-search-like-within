# woocommerce-product-search-like-within
Enables search within for WooCommerce Product Search https://www.itthinx.com/shop/woocommerce-product-search/

This plugin implements the woocommerce_product_search_like_within filter, enabling search within.

The filter determines whether matches for search terms are sought within indexed tokens or not.
By default, the filter will return false, only producing exact matches or partial matches that start with search terms.
If it returns true, as is the case when this plugin is enabled, searches will also produce results for terms that match within words.
Note that the processing time can increase substantially and have a negative impact on overall performance, although it will be lighter if appropriate caching is used.

## Usage

Download the zipped plugin, install and activate it. There is no setup and the effect is immediate as soon as the plugin is activated.
