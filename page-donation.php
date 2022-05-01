<?php get_header(); ?>
<?php if (wp_is_mobile()): ?>
	<?php get_template_part('mobile/donation'); ?>
<?php else: ?>
	<?php get_template_part('desktop/donation'); ?>
<?php endif; ?>
<?php get_footer(); ?>