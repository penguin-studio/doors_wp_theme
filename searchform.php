<div class="search-field-wrapp" action="<?php echo home_url() ?>">
    <form name="search" action="<?php echo home_url( '/' ) ?>">
        <input class="search-field input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s">
        <button class="search-btn" type="submit"><span></span></button>
    </form>
</div>