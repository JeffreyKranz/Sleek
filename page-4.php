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
			<div style="display: inline-block; width: 100%;">
				<div class="icon-column">
					<a href="<?php the_field('icon_left_link');?>">
						<img class="icon-image" src="<?php the_field('icon_left');?>" />
					</a>				
					<?php the_field('icon_left_text');?>
					<a href="<?php the_field('icon_left_link');?>)">
						<button><?php the_field('icon_left_button_text')?></button>
					</a>
				</div>
				<div class="icon-column">
					<a href="<?php the_field('icon_center_link');?>">
						<img class="icon-image" src="<?php the_field('icon_center');?>" />
					</a>				
					<?php the_field('icon_center_text');?>
					<a href="<?php the_field('icon_center_link');?>">
						<button><?php the_field('icon_center_button_text');?></button>
					</a>
				</div>
				<div class="icon-column">
					<a href="<?php the_field('icon_right_link');?>">
						<img class="icon-image" src="<?php the_field('icon_right');?>" />
					</a>				
					<?php the_field('icon_right_text');?>
					<a href="<?php the_field('icon_right_link');?>">
						<button><?php the_field('icon_right_button_text');?></button>
					</a>
				</div>
			</div>
			<div class="textBar"><?php the_field(text_bar_2)?>
			</div>
				<div class="posts-recent">
					<ul>
						<?php
							$args = array( 'numberposts' => '3' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
							}
						?>
					</ul>
				</div>
			<div class="final-cta" style="padding: 40px; font-size: 30pt">
				<div style="margin-bottom: 30px;"><?php the_field(final_cta)?></div>
				<?php the_field(form)?>
			</div>


			<?php do_action('foundationPress_page_before_entry_content'); ?>

			<!-- <footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action('foundationPress_page_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_page_after_comments'); ?> -->


		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
		
<?php get_footer(); ?>