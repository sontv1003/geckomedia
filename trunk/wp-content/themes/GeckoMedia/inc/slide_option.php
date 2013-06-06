<?php
add_action('admin_menu','geckomedia_menu_page');

function geckomedia_menu_page(){
    add_theme_page('Geckomedia Slide option','Slide Option','manage_options','geckomedia-slide-option','geckomedia_setting_page');
}

add_action('admin_init','geckomedia_register_setting');

function geckomedia_register_setting(){
    register_setting('geckomedia_group','geckomedia_id');
}

function geckomedia_setting_page(){ ?>
<div class="wrap">
    <?php screen_icon(); ?>
    <h2> Geckomedia Setting Slide</h2> </br>
    <form id="geckomedia_setting" method="post" action="options.php">
        <?php settings_fields('geckomedia_group') ?>
        <table class="geckomedia_page">
            <tr valign="top">
                <th scope="row"> Điền id của các post hoặc page muốn hiển thị trong slide(VD: 12,33,4): </th>
                <td><input type="text" value="<?php echo get_option('geckomedia_id');?>" name="geckomedia_id" /></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>

<?php }

?>
