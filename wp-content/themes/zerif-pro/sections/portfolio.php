<?php	
		$args = array('post_type' => 'portofolio', 'posts_per_page' => $zerif_portofolio_number);
	$zerif_query = new WP_Query( $args );
	if ( $zerif_query->have_posts() ):
					echo '<div class="col-md-12" id="portfolio-list">';
					echo '<ul class="cbp-rfgrid">';
					while ( $zerif_query->have_posts() ) :
						$zerif_query->the_post();
						?>
						<!-- PROJECT -->	
						<li data-scrollreveal="enter left after 0s over 1s">
						<a href="<?php the_permalink(); ?>" class="more">
							<?php
							if ( has_post_thumbnail($post->ID) ):
								echo get_the_post_thumbnail($post->ID, 'zerif_project_photo'); 
							endif;
							?>
							<div class="project-info">
								<div class="project-details">
									<h5 class="white-text red-border-bottom">
										<?php the_title(); ?>
									</h5>
									<div class="details white-text">
										<?php
										$categories = get_the_category();
										$separator = ' ';
										if($categories):
											foreach($categories as $category):
												echo $category->cat_name.$separator;
											endforeach;
										endif;
										?>
									</div>
								</div>
							</div>
							</a>
						</li>
						<!-- / PROJECT -->
						<?php
					endwhile;
					echo '</ul>';
					echo '</div>';
	endif;
	wp_reset_postdata();
?>