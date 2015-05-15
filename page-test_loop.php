<?php
/* Template Name: Test Loop */
?>

<?php get_header(); ?>
	
	<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		
		<!-- START MAIN CONTENT -->
		<div id="inner-content" class="cf container inside_page_content">
			<div class="row">
				<main id="main" class="col-xs-12 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<section class="cf" itemprop="articleBody">
								
							<!-- START THE LOOP -->
							<div class="container"> <!-- Start the Container -->
								<?php $counter = 1; //counter tracks the number of the post we're on ?>
								<?php if( have_rows('services') ): ?>
									
									<div class="row"> <!-- Start the Row -->
										
										<!-- DEFINE THE ACF VARIABLES -->
										<?php while( have_rows('services') ): the_row(); 
											// vars
											$icon = get_sub_field('service_icon');
											$title = get_sub_field('service_title');
											$subtitle = get_sub_field('service_subtitle');
											$copy = get_sub_field('service_copy');
										?>
										
										<!--START THE LOOP ITEM -->
										<div class="col-xs-12 col-sm-4" style="margin-bottom:60px;">
											<span class="<?php echo $icon; ?>" style="font-size:4em; color:red;"></span>
											<h2><?php echo $title; ?></h2>
											<h5><?php echo $subtitle; ?></h5>
											<p><?php echo $copy; ?></p>
										</div>
										<!-- END THE LOOP ITEM -->
										
										<?php if ($counter % 3 == 0) { echo '<div class="cf"></div>';} // This is equal to the numbers of columns we've defined above ?>
										<?php $counter++; // This increases the value of $counter by 1 for every loop iteration ?>
										
										<?php endwhile; ?>
									
									</div> <!-- End the Row -->
								
								<?php endif; ?>
							
							</div> <!-- End the Container -->
							<!-- END THE LOOP -->
							
							
							
							
							
							
							
						</section> <?php // end article section ?>
					</article>
					
					<?php endwhile; endif; ?>
					
				</main>
				
			</div> <!-- end .row -->
		</div> <!-- end .container -->
		<!-- END MAIN CONTENT -->
		
	
	</div> <!-- end #content -->

<?php get_footer(); ?>