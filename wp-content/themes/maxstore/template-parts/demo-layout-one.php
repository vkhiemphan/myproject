<h2 class="text-center clear demo-categories">
  <?php esc_html_e( 'Danh mục sản phẩm', 'maxstore' ); ?>
</h2>
<hr />								
<?php echo do_shortcode( '[product_categories number="4" parent="0"]' ); ?>  								
<h2 class="text-center clear demo-products">
  <?php esc_html_e( 'Xem nhiều nhất', 'maxstore' ); ?>
</h2>
<hr />								
<?php echo do_shortcode( '[recent_products per_page="8" columns="4"]' ); ?>