<?php
/**
 * The template for displaying content.
 *
 * @package llorix-one-lite
 */
?>
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">-->

<article itemscope itemprop="blogPosts" itemtype="http://schema.org/BlogPosting" itemtype="http://schema.org/BlogPosting" <?php post_class( 'border-bottom-hover' ); ?> title="<?php /* translators: %s is the post title */ printf( esc_html__( 'Blog post: %s', 'llorix-one-lite' ), get_the_title() ); ?>">
	<header class="entry-header">

			<!--<div class="post-img-wrap">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

					<?php
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					?>
					<?php
					$image_id         = get_post_thumbnail_id();
					$image_url_big    = wp_get_attachment_image_src( $image_id, 'llorix-one-lite-post-thumbnail-big', true );
					$image_url_mobile = wp_get_attachment_image_src( $image_id, 'llorix-one-lite-post-thumbnail-mobile', true );
					?>
					<picture itemscope itemprop="image">
					<source media="(max-width: 600px)" srcset="<?php echo esc_url( $image_url_mobile[0] ); ?>">
					<img src="<?php echo esc_url( $image_url_big[0] ); ?>" alt="<?php the_title_attribute(); ?>">
					</picture>
					<?php
						} else {
					?>
					<picture itemscope itemprop="image">
					<source media="(max-width: 600px)" srcset="<?php echo llorix_one_lite_get_file( '/images/no-thumbnail-mobile.jpg' ); ?> ">
					<img src="<?php echo llorix_one_lite_get_file( '/images/no-thumbnail.jpg' ); ?>" alt="<?php the_title_attribute(); ?>">
					</picture>
					<?php } ?>

				</a>
				<?php llorix_one_lite_post_date_index_box_trigger(); ?>
			</div>-->

			<?php llorix_one_lite_before_entry_meta_content_trigger(); ?>
			

		<?php the_title( sprintf( '<h1 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>', apply_filters( 'llorix_one_lite_filter_article_title_on_index', true ) ); ?>
		<div class="colored-line-left"></div>
		<div class="clearfix"></div>

	</header><!-- .entry-header -->
	<div itemprop="description" class="entry-content entry-summary">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php
				echo ' <font face="arial" size="4" color="black">  Poste :</font>';
                echo get_post_meta(get_the_ID(),'wpcf-poste',true); echo "<br>";


				 echo ' <font face="arial" size="4" color="black">  Secteur d\'activité :</font>';
                echo get_post_meta(get_the_ID(),'wpcf-secteur-dactivite',true); echo "<br>";

                echo ' <font face="arial" size="4" color="black">  Nombres de poste proposés :</font>';
                 echo get_post_meta(get_the_ID(),'wpcf-nbr-postes',true); echo "<br>";
                 echo ' <font face="arial" size="4" color="black"> Type de diplômes :</font>';
                 echo get_post_meta(get_the_ID(),'wpcf-type-de-diplome',true); echo "<br>";

               echo '<a href="';echo the_permalink();echo '">  En savoir plus</a>';

			$ismore = strpos( $post->post_content, '<!--more-->' );
			if ( $ismore ) {
			the_content( /* translators: %s is the post link */
			sprintf( esc_html__( 'Read more %s ...', 'llorix-one-lite' ), '<span class="screen-reader-text">' . esc_html__( 'about ', 'llorix-one-lite' ) . get_the_title() . '</span>' )
		);
			} else {
			the_excerpt();
			}
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'llorix-one-lite' ),
					'after'  => '</div>',
				)
			);
		?>
	</a></div><!-- .entry-content -->
	<div class="entry-meta list-post-entry-meta">
				<span itemscope itemprop="author" itemtype="http://schema.org/Person" class="entry-author post-author">
					<span  itemprop="name" class="entry-author author vcard">
						
						<i class="fa fa-map-marker colored-text"></i>


						<!--<i class="fa fa-user" aria-hidden="true"></i>-->
						<?php   echo get_post_meta(get_the_ID(),'wpcf-ville',true); ?>

						

					</span>
				</span>
				<?php llorix_one_lite_after_author_in_entry_meta_trigger(); ?>
			<!--	<span class="posted-in entry-terms-categories" itemprop="articleSection">
					<i class="fa fa-folder" aria-hidden="true"></i>
					<?php _e( 'Posted in', 'llorix-one-lite' ); ?>
					<?php
						/* translators: used between list items, there is a space after the comma */
						$categories_list = get_the_category_list( esc_html__( ', ', 'llorix-one-lite' ) );
						$pos             = strpos( $categories_list, ',' );
						if ( $pos ) {
						echo substr( $categories_list, 0, $pos );
						} else {
						echo $categories_list;
						}
					?>
				</span>-->
				<?php llorix_one_lite_after_categories_in_entry_meta_trigger(); ?>
				<?php echo '<span style="color:red"; class="post-comments">Dernier délai ';echo get_post_meta(get_the_ID(),'wpcf-le-dernier-delai',true);echo'</span>' ;?>
				<!--<a href="<?php comments_link(); ?>" class="post-comments">
					<i class="fa fa-comment" aria-hidden="true"></i>
					<?php comments_number( esc_html__( 'No comments', 'llorix-one-lite' ), esc_html__( 'One comment', 'llorix-one-lite' ), esc_html__( '% comments', 'llorix-one-lite' ) ); ?>
				</a>-->
			</div><!-- .entry-meta -->

</article><!-- #post-## -->
