<form method="get"
      action="<?php bloginfo('home'); ?>/"> 
    <input type="text" value=""name="s" id="search"/>
    <input type="submit" class="submit" name="button" id="searchsubmit" value="<?php esc_attr_e( '', 'geckomedia' ); ?>" />
</form>