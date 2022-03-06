<?php get_header(); ?>
  <?php if (wp_is_mobile()): ?>
	<?php get_template_part('mobile/about'); ?>
  <?php else: ?>
	<?php get_template_part('desktop/about'); ?>
  <?php endif; ?>
<?php get_footer(); ?>