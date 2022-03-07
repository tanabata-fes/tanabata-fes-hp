<?php get_header(); ?>
  <?php if (is_mobile()): ?>
	<?php get_template_part('mobile/contact'); ?>
  <?php else: ?>
	<?php get_template_part('desktop/contact'); ?>
  <?php endif; ?>
<?php get_footer(); ?>