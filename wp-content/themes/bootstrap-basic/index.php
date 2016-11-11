<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php get_sidebar('left'); ?> 
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="site-main" role="main">
						<?php if (have_posts()) { ?> 
						<?php 
						// start the loop
						while (have_posts()) {
							the_post();
							
							/* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('content', get_post_format());
						}// end while
						
						bootstrapBasicPagination();
						?> 
						<?php } else { ?> 
						<?php get_template_part('no-results', 'index'); ?>
						<?php } // endif; ?> 
					</main>
				</div>
<?php get_sidebar('right'); ?> 
</section>
<section id="saiba">
	<div class="container">
		<div class="col-md-12 show">
			<h2>Saiba como funciona</h2>
		</div>
		<div class="col-md-offset-1 col-md-11">
			<p><a class="btn  btn btn-warning btn-lg" href="#" role="button">ENTRAR EM CONTATO</a></p>
		</div>
	</div>

	<div id="saibaMobile" class="container hidden">
		<div class="row">
			<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/chef_solto.png" alt="chef">
		</div>
		<div class="row">
			<p><a class="btn  btn btn-warning btn-block" href="#" role="button">ENTRAR EM CONTATO</a></p>
		</div>
	</div>
</section>
<?php get_footer(); ?> 