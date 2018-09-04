<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Talon
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();


			get_template_part( 'template-parts/content', 'job' );
			 echo ' <font face="arial" size="4" color="black">Description d\'entreprise </font>';
            echo get_post_meta(get_the_ID(),'wpcf-description-d-entreprise',true); echo "<br>";
                  echo ' <font face="arial" size="4" color="black">Description du poste </font>';
            echo get_post_meta(get_the_ID(),'wpcf-description-du-poste',true); echo "<br>";
              echo ' <font face="arial" size="4" color="black">Les langues nécessaires </font>';
                  echo get_post_meta(get_the_ID(),'wpcf-langues',true); echo "<br>";
            echo ' <font face="arial" size="4" color="black">Niveau d\'experience </font>';
                 echo get_post_meta(get_the_ID(),'wpcf-niveau-d-experience',true); echo "<br>";
            echo ' <font face="arial" size="4" color="black">Type de diplôme </font>';
                echo get_post_meta(get_the_ID(),'wpcf-type-de-diplome',true); echo "<br>";
            echo ' <font face="arial" size="4" color="black">Poste </font>';
                echo get_post_meta(get_the_ID(),'wpcf-poste',true); echo "<br>";
            echo ' <font face="arial" size="4" color="black">Le dernier delai</font>';
                echo get_post_meta(get_the_ID(),'wpcf-le-dernier-delai',true); echo "<br>";
            echo ' <font face="arial" size="4" color="black">Nombres de poste proposés </font>';
                 echo get_post_meta(get_the_ID(),'wpcf-nbr-postes',true); echo "<br>";
            echo ' <font face="arial" size="4" color="black">Type de contrat</font>';
                  echo get_post_meta(get_the_ID(),'wpcf-types-de-contrat',true); echo "<br>";
						
			echo '<a href="http://localhost/novelis/contact/?preview=true" >  
				<button>Postuler</button>
					</a>';


			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if ( get_theme_mod('fullwidth_single', 0) != 1 ) :
	get_sidebar();
endif; ?>
</div>
<?php get_footer(); ?>
