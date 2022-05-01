<?php get_header(); ?>
<?php if (wp_is_mobile()): ?>
	<?php get_template_part('mobile/home'); ?>
<?php else: ?>
	<?php get_template_part('desktop/home'); ?>
<?php endif; ?>
<?php get_footer(); ?>