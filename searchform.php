     <div class="col-3">
        <div class="search-area">
            <span class="closebtn">×</span>
            <div class="search-field">
                <form method="get"  action="<?php echo esc_url(home_url('/')); ?>" >
                   <input type="text" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'elizama');?>" value="<?php echo get_search_query(); ?>" name="s">
                   <button type="submit"><img src="<?php  echo esc_url(get_template_directory_uri(). '/assets/fonts/svg/search.svg');?>"></button>
                </form>
            </div>
        </div>
    </div>

