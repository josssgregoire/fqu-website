<?php
	$zerif_bottomribbon_text = get_theme_mod('zerif_bottomribbon_text');
	if( !empty($zerif_bottomribbon_text) ):
		echo '<section class="separator-one" id="ribbon_bottom">';
			echo '<div class="color-overlay">';
				echo '<h3 class="container text" data-scrollreveal="enter left after 0s over 1s">';
					echo $zerif_bottomribbon_text;
				echo '</h3>';	
				
				$zerif_bottomribbon_buttonlabel = get_theme_mod('zerif_bottomribbon_buttonlabel');
				$zerif_bottomribbon_buttonlink = get_theme_mod('zerif_bottomribbon_buttonlink');
					
				if( !empty($zerif_bottomribbon_buttonlabel) && !empty($zerif_bottomribbon_buttonlink) ):
					echo '<div data-scrollreveal="enter right after 0s over 1s">';
						echo '<a href="'.$zerif_bottomribbon_buttonlink.'" class="btn btn-primary custom-button green-btn">'.$zerif_bottomribbon_buttonlabel.'</a>';
					echo '</div>';
				endif;
			echo '</div>';
		echo '</section>';	
	endif;
?>