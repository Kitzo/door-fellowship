<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input id="autocomplete" title="type &quot;a&quot;" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder=" Help you find anything?" />
	</div>
</form>