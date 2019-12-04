
<!--===================================-->
<!--============= FOOTER ==============-->
<!--===================================-->
<footer class="footer">
    <div class="container">
        <div class="ftrBox">
            <div class="ftrInner">
            	<?php
				    if(function_exists('wp_nav_menu')){
				        $args = array(
				            'theme_location'  => 'footer_menu',        
				            'container'       => 'ul',
				            'menu_class' => 'ftrMenu'
				            ); 
				        wp_nav_menu( $args );
				    }
				?>
                <div class="ftrInfo">
                	<?php
		                $logo=new WP_Query(array(
		                    'post_type'=>'logo',
		                    'post_per_page'=>1
		                ));
		                if($logo->have_posts()):
		                    $logo->the_post();
		            ?>
						<a class="ftrLogo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_post_thumbnail('logo-thumb');?></a> 
                    	<p><?php the_title();?></p>
                    <?php
		                endif;
	                ?>
                </div>
            </div>
        	<span class="backTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
        </div>
    </div>
</footer>


<div id="loginPop">
    <h3>Login</h3>
    <form action="#" method="post">
        <input class="form-control" type="text" name="login" placeholder="Username">
        <input class="form-control" type="password" name="password" placeholder="Password">
        <input class="button" type="submit" value="Login">
        <span>or</span>
        <a href="#">Sign up</a>
        <a class="forgot" href="#">Forgot password</a>
    </form>
</div>
<?php wp_footer(); ?>
</body>
</html>