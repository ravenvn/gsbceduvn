<form method="get" class="td-search-form-widget" action="<?php echo esc_url(home_url( '/' )); ?>">
    <div role="search">
        <input class="td-widget-search-input" type="text" placeholder="Tìm kiếm" value="<?php echo get_search_query(); ?>" name="s" id="s" /><input class="wpb_button wpb_btn-inverse btn" type="submit" id="searchsubmit" value="" />
    </div>
</form>