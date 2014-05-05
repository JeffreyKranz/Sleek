<?php get_header(); ?>

	<div class="small-12 large-12 columns" role="main">
	
	<?php do_action('foundationPress_before_content'); ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="hero" style="background-image:url(<?php the_field('home_hero_image');?>)">
				<header>
					<h1 class="entry-title center"><?php the_field(home_title, '4'); ?></h1>
				</header>
				<div class="heroWrapper grayBackground">
					<?php the_field(home_hero_text, '4');?>
				</div>
			</div>
			<div class="textBar"><?php the_field(text_bar_1)?></div>
			<!-- <div class="hexagonParent">
				<a href="#">
					<div class="hexagonA"></div>
					<div class="hexagonB center">Test</div>
					<div class="hexagonC"></div>
				</a>	
			</div> -->
			<div class="icon-column">
				<a href="<?php the_field('icon_left_link');?>">
					<img src="<?php the_field('icon_left');?>" />
				</a>				
				<p><?php the_field('icon_left_text');?></p>
				<a href="<?php the_field('icon_left_link');?>)">
					<button><?php the_field('icon_left_button_text')?></button>
				</a>
			</div>
			<div class="icon-column">
				<a href="<?php the_field('icon_center_link');?>">
					<img src="<?php the_field('icon_center');?>" />
				</a>				
				<p><?php the_field('icon_center_text');?></p>
				<a href="<?php the_field('icon_center_link');?>">
					<button><?php the_field('icon_center_button_text');?></button>
				</a>
			</div>
			<div class="icon-column">
				<a href="<?php the_field('icon_right_link');?>">
					<img src="<?php the_field('icon_right');?>" />
				</a>				
				<p><?php the_field('icon_right_text');?></p>
				<a href="<?php the_field('icon_right_link');?>">
					<button><?php the_field('icon_right_button_text');?></button>
				</a>
			</div>
			<?php do_action('foundationPress_page_before_entry_content'); ?>

			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action('foundationPress_page_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_page_after_comments'); ?>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
		
<?php get_footer(); ?>