<?php
/**
 * The template for displaying all single posts.
 *
 * @package llorix-one-lite
 */

	get_header();
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<div class="content-wrap">
	<div class="container">

		<div id="primary" class="content-area 
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
echo 'col-md-8';
} else {
				echo 'col-md-12';}
?>
">
			<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content', 'job' );
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

				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div><!-- .content-wrap -->

<?php get_footer(); ?>
