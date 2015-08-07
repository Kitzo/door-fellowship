<?php
/*
* Template Name: Home Page
*/
get_header(); ?>
<div class="body-bg">
	<div class="container">
		<div class="container-box">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
					<div class="home-service">
						Sunday Services: 10AM - 12PM 470 Pine Street Williamsport PA 17701
					</div><!--Close home-services-->
				</div><!--Close col-->
				<div class="col-xs-12 vol-sm-12 col-md-3 col-lg-3">
					<div class="btn btn-default btn-directions">
						Get Directions
					</div>
				</div>
			</div><!--Close row-->
		</div><!--Close container-box-->
	</div><!--Close container-->
	<div class="clear-container">
		<div class="row center">
			<div id="messages" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<a href="<?php bloginfo('home'); ?>/messages/">
					<div class="callout messages">
						<img src="<?php bloginfo('template_url'); ?>/img/messages.jpg"/>
						<h2>Messages</h2>
					</div><!--Close callout-->
				</a><!--Close messages link-->
			</div><!--Close Messages-->
			<div id="devotions" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="callout devotions">
					<img src="<?php bloginfo('template_url'); ?>/img/BIBLE.jpg"/>
					<h2>Devotions</h2>
				</div><!--Close callout-->
			</div><!--Close Devotions-->
			<div id="events" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="callout events">
					<img src="<?php bloginfo('template_url'); ?>/img/calendar.jpg"/>
					<h2>Events</h2>
				</div><!--Close callout-->
			</div><!--Close Events-->
		</div><!--Close row-->
	</div><!--Close clear-container-->
	<div class="container">
		<div class="container-box">
			<div class="row">
				<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 content">
						<article>
							<header>
								<h1 class="page-title" itemprop="headline">
									<?php the_title(); ?>
								</h1>
							</header><!--Close Header-->
							<section itemprop="articleBody">
								<?php if(has_post_thumbnail() ){ ?>
									<?php the_post_thumbnail(array(200,200), array('class'=>'img-thumbail pull-left margin-right')); ?>
								<?php } ?>
								<?php the_content(); ?>
							</section><!--Close Section-->
						</article><!--Close Article-->
					</div><!--Close content-->
			<?php endwhile; else : ?><!--End while loop, continues if statement-->
				Sorry there may be a problem.
				<?php get_search_form(); ?>
			<?php endif; ?><!--Close if Statement-->
			<?php wp_reset_query(); ?><!--Reset Chcek On Query-->
			</div><!--Close row-->
		</div><!--Close container-box-->
	</div><!--Close container-->
</div><!--Close body-bg-->
<?php get_footer(); ?>