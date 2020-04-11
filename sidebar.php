<?php
// Dynamic Sidebar
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}?>
<div class="col-12 col-md-4 meta ">
    <div class="elizama-sidebar elizama-card">
    	<span class="elizama-sidebar-container elizama-widget">
    		 <div class="search-bar">

                <a class="elizama-dg bg-white hvr-bounce-to-top" href="javascript:;"><?php _e('Search','elizama');?></a>
            </div>

        <?php get_search_form();?>

    	<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </span>
    </div>
</div>
	<!-- Sidebar fallback content -->
