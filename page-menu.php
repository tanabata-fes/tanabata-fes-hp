<?php get_header(); ?>
  <?php if (is_mobile()): ?>
	<?php get_template_part('mobile/menu'); ?>
  <?php else: ?>
    <a href="..">Go To Top</a>
  <?php endif; ?>
<?php get_footer(); ?>