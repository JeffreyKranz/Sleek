<?php get_header(); ?>

	<div class="small-12 large-12 columns" role="main">
	
	<?php do_action('foundationPress_before_content'); ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="hero" style="background-image:url(<?php the_field('lp_hero_image');?>)">
				<header>
					<h1 class="entry-title center" style="color: #ffffff"><?php the_field(lp_headline, '53'); ?></h1>
				</header>
				<div class="lp-product">
				<img src="<?php the_field('lp_product_image', '53');?>">
				</div>
				<div class="heroWrapper grayBackground">
					<?php the_field(lp_hero_text, '53');?>
				</div>
			</div>
		
			<div class="author">
				<div class="textBar"><?php the_field(text_bar_1)?></div>
				<img src="<?php the_field('author_mugshot', '53');?>">
				<div class="bio"><?php the_field(author_bio, '53') ?></div>
				<hr>
			</div>
			<div class="textBar" style="width: 100%;"><?php the_field(text_bar_2, '53')?></div>
			<div style="width: 100%;">
				<div class="icon-column">
					<img class="icon-image" src="<?php the_field('benefit_icon_left');?>" />
					<?php the_field('benefit_text_left');?>
				</div>
				<div class="icon-column">
					<img class="icon-image" src="<?php the_field('benefit_icon_center');?>" />
					<?php the_field('benefit_text_center');?>
				</div>
				<div class="icon-column">
					<img class="icon-image" src="<?php the_field('benefit_icon_right');?>" />
					<?php the_field('benefit_text_right');?>
				</div>
				<hr style="opacity: 0;">
			</div> 

			<div class="textBar"><?php the_field(text_bar_3)?> </div>
			
				<div class="endorsement">
					<img src="<?php the_field('endorser_mugshot1', '53');?>">
					<div class="plug"><?php the_field(endorsement1, '53') ?></div>
					<hr>
				</div>
				<div class="endorsement">
					<img src="<?php the_field('endorser_mugshot2', '53');?>">
					<div class="plug"><?php the_field(endorsement2, '53') ?></div>
					<hr>
				</div>
				<div class="endorsement">
					<img src="<?php the_field('endorser_mugshot3', '53');?>">
					<div class="plug"><?php the_field(endorsement3, '53') ?></div>
				</div>
				<hr style="opacity: 0;">
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