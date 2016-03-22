<div class="search-field-wrapp" action="<?php echo home_url() ?>">
    <form action="<?php echo home_url( '/' ) ?>" method="get">
        <input class="search-field input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s">
        <button class="search-btn" type="submit"><span></span></button>
        <input type="hidden" name="post_type" value="product">
    </form>
</div>