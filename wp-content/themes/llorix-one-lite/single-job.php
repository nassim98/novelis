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
				//get_template_part( 'content', 'job' );
				echo ' <h2 style="color: #f16c20; margin-top: 10px;
    margin-bottom: 0px; text-align:center; ">';echo get_post_meta(get_the_ID(),'wpcf-poste',true); echo '</h2>';
                


				echo '<h2 style="color: #f16c20; font-size:20px;margin-top: 10px;
    margin-bottom: 0px;">Description d\'entreprise :</h2>';
				echo get_post_meta(get_the_ID(),'wpcf-description-d-entreprise',true); 

				 /*echo ' <font face="arial" size="4" color="black">Description d\'entreprise </font>';
            echo get_post_meta(get_the_ID(),'wpcf-description-d-entreprise',true); echo "<br>";*/

                  

                echo ' <h2 style="color: #f16c20; font-size:20px;  margin-top: 10px;
    margin-bottom: 0px;">Nombres de poste proposés :</h2>';
                 echo get_post_meta(get_the_ID(),'wpcf-nbr-postes',true);

                  echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;">Description du poste : </h2>';
            echo '<span>'."  ".get_post_meta(get_the_ID(),'wpcf-description-du-poste',true).'</span>';

             echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;">Type de diplôme  :</h2>';
                echo get_post_meta(get_the_ID(),'wpcf-type-de-diplome',true);echo '<br>';

                  echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;">Niveau d\'experience  : </h2>';
                 echo get_post_meta(get_the_ID(),'wpcf-niveau-d-experience',true); echo '<br>';

              echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;"><i class="fa fa-map-marker colored-text" style="color:grey;"></i> Ville  : </h2>';
                echo get_post_meta(get_the_ID(),'wpcf-ville',true); echo '<br>';

              echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;">Les langues nécessaires :</h2>';
                  echo get_post_meta(get_the_ID(),'wpcf-langues',true); echo "<br>";

          

           

            

            echo '<h2 style="color: #f16c20; font-size:20px;">Le dernier delai :</h2>';
                echo get_post_meta(get_the_ID(),'wpcf-le-dernier-delai',true); echo "<br>";
            
            echo ' <h2 style="color: #f16c20; font-size:20px;">Type de contrat :</h2>';
                  echo get_post_meta(get_the_ID(),'wpcf-types-de-contrat',true); echo "<br><br>";
						
			echo '<a href="http://localhost/novelis/contact/?preview=true" >  
				<button>Postuler</button>
					</a>';


				/*the_post_navigation();

				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/
			}
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div>
</div><!-- .content-wrap -->

<?php get_footer(); ?>
