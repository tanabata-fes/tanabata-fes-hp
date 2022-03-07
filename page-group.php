<?php get_header(); ?>
  <?php if (is_mobile()): ?>
	<?php get_template_part('mobile/group'); ?>
  <?php else: ?>
	<?php get_template_part('desktop/group'); ?>
  <?php endif; ?>
<?php get_footer(); ?>