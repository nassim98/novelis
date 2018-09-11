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

    echo "<br><br>";

    echo '<img  style="width:500px; margin-left:auto; margin-right:auto;display:block;" src="'. get_post_meta(get_the_ID(),'wpcf-image',true);echo '"></img>';
                


				echo '<br><h2 style="color: #f16c20; font-size:20px;margin-top: 10px;
    margin-bottom: 0px;">  <i class="fa fa-building colored-text" style="color: #343434;"></i>  Description d\'entreprise :</h2>';
			//	echo get_post_meta(get_the_ID(),'wpcf-description-d-entreprise',true); 
				echo "<p style='max-width:600px;'> ".get_post_meta(get_the_ID(),'wpcf-description-d-entreprise',true);echo"</p>";


				 /*echo ' <font face="arial" size="4" color="black">Description d\'entreprise </font>';
            echo get_post_meta(get_the_ID(),'wpcf-description-d-entreprise',true); echo "<br>";*/

                   

                echo ' <h2 style="color: #f16c20; font-size:20px;  margin-top: 10px;
    margin-bottom: 0px;">Nombres de poste proposés  : <span style="    color: #313131;">'.get_post_meta(get_the_ID(),'wpcf-nbr-postes',true); echo'</span> </h2>';
                




                  echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;">Description du poste : </h2>';
            echo '<span>'."  ".get_post_meta(get_the_ID(),'wpcf-description-du-poste',true).'</span>';

             echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;"><i class="fa fa-graduation-cap colored-text" style="color: #343434;"></i> Type de diplôme  :</h2>';
                echo '<p>  '.get_post_meta(get_the_ID(),'wpcf-type-de-diplome',true);echo '</p>';

                  echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;">Niveau d\'expérience  : </h2>';
                 echo'<p> '.get_post_meta(get_the_ID(),'wpcf-niveau-d-experience',true); echo '</p>';

              echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;"><i class="fa fa-map-marker colored-text" style="color: #343434;"></i> Ville  : </h2>';
                echo get_post_meta(get_the_ID(),'wpcf-ville',true); echo '<br>';

              echo ' <h2 style="color: #f16c20; font-size:20px;    margin-top: 10px;
    margin-bottom: 0px;">Les langues nécessaires :</h2>';
                  echo'<p> '. get_post_meta(get_the_ID(),'wpcf-langues',true); echo "</p>";

          

           

            

            echo '<h2 style="color: #f16c20; font-size:20px;">Le dernier delai :</h2>';
                echo get_post_meta(get_the_ID(),'wpcf-le-dernier-delai',true); echo "<br>";
            
            echo ' <h2 style="color: #f16c20; font-size:20px;">Type de contrat :</h2>';
                  echo get_post_meta(get_the_ID(),'wpcf-types-de-contrat',true); echo "<br><br>";
						
			echo '<a href="http://localhost/novelis/postuler/" >  
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
