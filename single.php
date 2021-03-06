<?php get_header(); ?>
<div class="row sidebar_bg radius10" id="opp">
<?php locate_template('parts-nav-sidebar.php', true, false); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="eight columns pull-four wrapper radius-left offset-topgutter">
		<?php locate_template('parts-nav-breadcrumbs.php', true, false); ?>	
		<section>
				<h2><?php the_title();?></h2>
					<?php if ( has_post_thumbnail()) { ?> 
						<div class="floatright">
							<?php the_post_thumbnail('full',array('class'	=> "radius-topleft")); ?>
						</div>
					<?php } ?>
				<?php the_content(); ?>
		</section>
	</div>	<!-- End main content (left) section -->
<?php endwhile; endif; ?>	
</div> 
<?php get_footer(); ?> 