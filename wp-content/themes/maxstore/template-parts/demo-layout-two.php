<h2 class="clear demo-categories">
  <?php esc_html_e( 'Danh mục sản phẩm', 'maxstore' ); ?>
</h2>								
<?php echo do_shortcode( '[product_categories number="4" parent="0"]' ); ?>								
<h2 class="clear demo-products">
  <?php esc_html_e( 'Sản phẩm khuyến mãi', 'maxstore' ); ?>
</h2>								
<?php echo do_shortcode( '[sale_products per_page="5" columns="5"]' ); ?>								
<h2 class="clear demo-products">
  <?php esc_html_e( 'Được xem nhiều', 'maxstore' ); ?>
</h2>								
<?php echo do_shortcode( '[recent_products per_page="8" columns="4"]' ); ?>
