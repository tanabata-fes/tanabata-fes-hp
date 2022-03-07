<?php get_header(); ?>
<?php if (wp_is_mobile()): ?>
	<?php get_template_part('mobile/privacy'); ?>
<?php else: ?>
	<?php get_template_part('desktop/privacy'); ?>
<?php endif; ?>
<?php get_footer(); ?>