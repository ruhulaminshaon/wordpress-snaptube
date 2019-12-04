<div class="sidebar">
    <?php
    if(function_exists('wp_nav_menu')){
        $args = array(
            'theme_location'  => 'left_menu',        
            'container'       => 'ul',
            'menu_class'      => 'menu'
            ); 
        wp_nav_menu( $args );
    }else{
        echo "menu is empty!";
    }
    ?>
    
</div>