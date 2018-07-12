<?php
		global $user_login, $current_user;
    get_currentuserinfo();
    $user_info = get_userdata($current_user->ID);
    $roles = array (
        'administrator',
        'Subscriber',
‘Editor’,
‘customer’,
    );

if (is_user_logged_in() && array_intersect( $roles, $user_info->roles)) {
			
								
   						the_content( sprintf(
						esc_html__( 'Continue reading %s', 'hill' ),
						the_title( '<span class="screen-reader-text">', '</span>', false )
					) );
	
	} else {

 echo'';

}

						
					the_tags('<div class="hill-tagcloud-box"><h3 class="hill-title-tagcloud">'.esc_html__('Post Tags', 'hill').'</h3>', '', '</div>');

					$author_desc = get_the_author_meta( 'description' );
					if($author_desc):
						
					?>
