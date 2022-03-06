<!-- head -->
<?php if (wp_is_mobile()): ?>
	<!-- header -->
	<!-- メイン（mobile/home） -->
<?php else: ?>
	<!-- header -->
	<?php get_template_part('desktop/home'); ?>
<?php endif; ?>
