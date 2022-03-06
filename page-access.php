<?php get_header(); ?>
<?php if (wp_is_mobile()): ?>
	<?php get_template_part('mobile/access'); ?>
<?php else: ?>
	<?php get_template_part('desktop/access'); ?>
<?php endif; ?>
<?php get_footer(); ?>