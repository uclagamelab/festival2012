<?php
/*
Template Name: Festival Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="twelvecol clearfix" role="main">
						<section id="what" class="quote">
							<blockquote>A two day festival of experimental games, demos, game art, performances, music and tournaments. Admission is free and open to the public!</blockquote>
						</section>
						<hr/>
						<section id="when">
							<h1>Dates</h1>
							<p><span class="time">May 9th from 7 to 10pm</span> at the Hammer Museum</p>
							<p><span class="time">May 10th from 6 to 10pm</span> at the Broad Art Center, UCLA</p>
						</section>
						<hr/>
						<section id="where">
							<h1>Directions</h1>
							<p id="hammer-parking">
								The Hammer Museum is located at the northeast corner of Westwood and Wilshire Boulevards in Westwood Village, 3 blocks east of the 405 freeway's Wilshire Boulevard exit. <a href="http://maps.google.com/maps?hl=en&q=10899+Wilshire+Blvd+90024">View Map</a>
							</p><!-- hammer-parking -->
							<p id="broad-parking">
								Directions and parking info for the Broad Art Center, UCLA can be found here: <a href="http://dma.ucla.edu/information/directions/">http://dma.ucla.edu/information/directions/</a>
							</p><!-- broad-parking -->
						</section>
						<hr/>
						<section id="who" class="row">
							<h1>Presenting the following Games</h1>

							<!-- begin wordpress loop -->
							<?php query_posts('cat=1'); ?>
							<?php $c = 0; ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php $custom_fields = get_post_custom(); ?>

							<article id="post-<?php the_ID(); ?>" class="game-article sixcol <?php echo $c++&1 ? 'last' : ''?>" role="article">
								
								<header>

									<h1><?php the_title(); ?></h1>
									<p>
										by <?php echo $custom_fields['credits'][0]; ?>
									<p>
								</header> <!-- end article header -->
							
								<section class="post-content">
									<?php the_post_thumbnail('gaf-thumb'); ?>
									<div><?php the_content(); ?></div>
							
								</section> <!-- end section.post-content -->
								<footer>
									<a href="<?php echo $custom_fields['link'][0]; ?>" class="game-link">project home page</a>
								</footer>
							
							</article> <!-- end article -->
							<?php endwhile; else: ?>
							<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
							<?php endif; ?>
						</section><!-- end #showcase -->

					</div> <!-- end #main -->
    									
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>