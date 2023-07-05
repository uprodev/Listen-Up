<?php get_header(); ?>

<?php if (!is_front_page()): ?>
	<div class="page-header">
		<div class="page-header__container">
			<div class="page-header__content">
				<div class="page-header__breadcrumbs breadcrumbs">
					<nav aria-label="breadcrumb">
						<ul class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display() ?></ul>
					</nav>
				</div>
				<h1 class="title-center"><?php the_title() ?></h1>
			</div>
		</div>
	</div>
<?php endif ?>

<?php the_content() ?>

<?php get_footer(); ?>