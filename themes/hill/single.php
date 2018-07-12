<?php
					
								
   						the_content( sprintf(
						esc_html__( 'Continue reading %s', 'hill' ),
						the_title( '<span class="screen-reader-text">', '</span>', false )
					) );
	
						
					the_tags('<div class="hill-tagcloud-box"><h3 class="hill-title-tagcloud">'.esc_html__('Post Tags', 'hill').'</h3>', '', '</div>');

					$author_desc = get_the_author_meta( 'description' );
					if($author_desc):
						
					?>
