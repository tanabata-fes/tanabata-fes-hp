<?php get_header(); ?>
  <?php if (is_mobile()): ?>
	<?php get_template_part('mobile/committee'); ?>
  <?php else: ?>
	<?php get_template_part('desktop/committee'); ?>
  <?php endif; ?>
<?php get_footer(); ?>