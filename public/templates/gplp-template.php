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
						<div class="gplp-form">
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
							<div class="form-container">
								<h3>Download Ebook Here</h3>
								<?php echo do_shortcode(trim(get_field('form'))); ?>
							</div>
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
								<div class="borderbottom"></div>
							</div>
							<?php
						}
						?>
					</div>
					<div class="gplp-social-links">
						<?php
						$social_links = [];
						for ($sl=1; $sl<=4; $sl++) {
							$social_link = '';
								$social_link['url'] = trim(get_field('social_link_'.$sl));
								$social_link['icon'] = get_field('social_link_'.$sl.'_icon');
								$social_link['title'] = get_field('social_link_'.$sl.'_title');
								$social_links[$sl] = $social_link;
							if ($sl >2 ) {
								$social_link['show'] = get_field('checkbox_'.$sl.'_show');
								if ($social_link['show'] ) {
									$social_links[$sl] = $social_link;
								} else {
									unset($social_links[$sl]);
								}
							}
						}
						foreach ($social_links as $social) {
							?>
							<div class="gplp-social-link">
								<?php 
								if ($social['url']) {
								?>
									<a href="<?php echo esc_url($social['url']); ?>">
									<i class="fa fa-<?php echo trim($social['icon']); ?>" aria-hidden="true"></i> 
									<?php echo " (".trim($social['title']).") "; ?>
									</a>
							<?php
								} else {
								?>
									<a href="#">
										<i class="fa fa-<?php echo trim($social['icon']); ?>" aria-hidden="true"></i> 
										<?php echo " (".trim($social['title']).") "; ?>
									</a>
								<?php
								}
								?>
							</div>
							<?php
						}
						?>
					</div>
				<footer class="">
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