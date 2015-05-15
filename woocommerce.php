<?php get_header(); ?>

	<div id="content">
		
		<div id="inner-content" class="cf container">
			
			<div class="row">
				
				<main id="main" class="col-xs-12 col-md-8 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					
					<article id="store_template" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						
						<section class="entry-content cf" itemprop="articleBody">
							<?php woocommerce_content(); ?>
						</section>
						

										
					</article>
					
				</main>
				
				<?php get_sidebar('woocommerce'); ?>
				
			</div>
			
		</div>
		
	</div>

<?php get_footer(); ?>
