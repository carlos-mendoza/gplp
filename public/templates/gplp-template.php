<?php 
/**
 * Single movie template
 * used if the theme does not have a custom template for the CPT single post
 * or as an example to use the shortcodes
 */

load_template(dirname( __FILE__ ) . '/header-gplp.php', true);
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main movie" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="gplp-header">
					<p><i class="fa fa-bolt" aria-hidden="true"></i> Going Public</p>
				</div>

					<header class="gplp-title">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<h2 class="gplp-subtitle"><?php echo trim(get_field('subtitle')); ?></h2>
					</header>
					<div class="gplp-main-content">
						<div class="gplp-image">
							<?php
							$gplp_image = get_field('image');
							if ($gplp_image) {
								?>
								<img src="<?php echo $gplp_image['url'];?>" alt="<?php echo $gplp_image['alt'];?>">
								<?php
							}
							?>
						</div><!-- .gplp-image -->
						<div class="gplp-form">
							<h3>Download Ebook Here</h3>
							<?php echo do_shortcode(trim(get_field('form'))); ?>
						</div>
					</div>
					<div class="gplp-features">
						<?php
						for ($f=1; $f<=3; $f++) {
							?>
							<div class="gplp-feature">
								<i class="fa fa-<?php echo trim(get_field('featured_icon_'.$f)); ?>" aria-hidden="true"></i> 
								<h3><?php echo trim(get_field('featured_title_'.$f)); ?></h3>
								<p><?php echo trim(get_field('featured_text_'.$f)); ?></p>
							</div>
							<?php
						}
						?>
					</div>
					<div class="gplp-social-links">
						<?php
						for ($sl=1; $sl<=4; $sl++) {
							?>
							<div class="gplp-social-link">
								<a href="<?php echo trim(get_field('social_link_'.$sl)); ?>">
									<i class="fa fa-<?php echo trim(get_field('social_link_'.$sl.'_icon')); ?>" aria-hidden="true"></i> 
									<?php echo " (".trim(get_field('social_link_'.$sl.'_title')).") "; ?>
								</a>
							</div>
							<?php
						}
						?>
					</div>
				<footer class="entry-footer">
					<div class="gplp-footer-menu">
						<?php
							wp_nav_menu( array(
							    'menu' => 'gplp_footer_menu',
							) );
						?>
					</div>
					<div class="gplp-copyright">
						<p>Copyright <?php echo date('Y'); ?>. <?php echo get_bloginfo('name'); ?>. All Rights Reserved</p>
					</div>
				</footer><!-- .entry-footer -->

			</article><!-- #post-## -->
<?php
		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php 
load_template(dirname( __FILE__ ) . '/footer-gplp.php', true);
?>