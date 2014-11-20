<?php
	if (function_exists('register_sidebar')) {
		   /**
			* Creates a sidebar
			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
			*/
			$args = array(
				'name'          => __( 'Sidebar Widgets' ),
				'id'            => 'Sidebar Widgets',
				'description'   => 'Widgets for the Sidebar',
				'before_widget' => '<aside id="%1$s" class="widget &2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widgettitle">',
				'after_title'   => '</h3>'
			);
		
			register_sidebar( $args );
	}
?>