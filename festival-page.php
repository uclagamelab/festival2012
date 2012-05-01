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
						<section id="locations" class="twelvecol">
							<article id="location-hammer" class="sixcol clearfix">
								<header><h1><span class="time">May 9th from 7 to 10pm</span><br/> at the Hammer Museum</h1></header>
								<p>10899 Wilshire Boulevard<br/> Los Angeles, CA 90024</p>
								<p>Parking is available under the Museum. Rates are $3 for the first three hours with Museum stamp; $1.50 for each additional 15 minutes. There is a $3 flat rate after 6:00 p.m.. There is a $3 flat rate on Saturdays and Sundays.  Parking for people with disabilities is provided on levels P1 and P3. <a href="http://hammer.ucla.edu/visit/index.html">More info about getting to the Hammer</a></p>
							</article>
							<article id="location-broad" class="sixcol last clearfix">
								<header><h1><span class="time">May 10th from 6 to 10pm</span><br/> at the Broad Art Center EDA, UCLA<h1></header>
								<p>240 Charles E. Young Dr.<br/> Room 1250<br/> Los Angeles CA</p>
								<p>The EDA (Room 1250) is located on the first floor of the Broad Art Center. All-day parking ($11) and short-term parking (payable at pay stations) are available in Lot 3 (enter the campus at Hilgard and Westholme avenues). <a href="http://dma.ucla.edu/information/directions/">Directions to the Broad Art Center</a></p>
							</article>
						</section>
						<hr/>
						<section id="who" class="row">
							<h1>Presenting the following Games</h1>

							<!-- begin wordpress loop -->
							<?php query_posts('cat=1'); ?>
							<?php $c = 0; ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php $custom_fields = get_post_custom(); ?>

							<article id="post-<?php the_ID(); ?>" class="game-article sixcol clearfix <?php echo $c++&1 ? 'last' : ''?>" role="article">
								
								<header>

									<h1><?php the_title(); ?></h1>
									<p>
										by <?php echo $custom_fields['credits'][0]; ?>
									<p>
								</header> <!-- end article header -->
							
								<section class="post-content">
									<?php the_post_thumbnail('gaf-thumb'); ?>
									<div><?php the_excerpt(); ?></div>
							
								</section> <!-- end section.post-content -->
								<?php if($custom_fields['link'][0] != ""){ ?>
								<footer>
									<a href="<?php echo $custom_fields['link'][0]; ?>" class="game-link">project home page</a>
								</footer>
								<?php } ?>
							
							</article> <!-- end article -->
							<?php endwhile; else: ?>
							<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
							<?php endif; ?>
						</section><!-- end #showcase -->

					</div> <!-- end #main -->
    									
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>