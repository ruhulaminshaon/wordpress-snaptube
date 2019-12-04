<?php
get_header(); ?>

<div class="wraperp">
	<div class="container">
        <div class="tableLayout">
		<?php get_template_part('menu');?>
            <div class="mainCont">
                <div class="followed">
				<?php 
				if ( have_posts() ) : 
					while (have_posts()) :
					the_post();
				?>
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'snaptube' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					
					<div class="vdoBox">
                        <div class="imgBox">
                            <div class="imgBoxIn">
                                <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/yicj8wQ2YIo?autoplay=1" title="First Date Tips"></a>
                                <a class="viewMore" href="#"></a>
                                <img src="images/img1.jpg" alt="Winter Landscapes">
                                <div class="vdoInfo">
                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 7:13</span>
                                    <span><i class="fa fa-eye" aria-hidden="true"></i> 2105</span>
                                    <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                    <span><i class="fa fa-heart" aria-hidden="true"></i> 62</span>
                                </div>
                            </div>
                        </div>
                        <div class="vdoTxt">
                            <h4><a href="<?php the_permalink();?>"><?php  the_title();?></a></h4>
                            <p><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p>
                            <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                            <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                        </div>
                    </div>
            	<?php 
            		endwhile;
            	 else : ?>
					<h1 class="page-title"><?php _e( 'Nothing Found', 'snaptube' ); ?></h1>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- .wrap -->

<?php 
get_footer();
?>
<!-- <div class="vdoGroup1">
                    <h2>Travel and Living <a class="vdoCount" href="#">52 videos</a> <a class="followBtn" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a></h2>
                    <div class="row">
                        
                        <div class="col-sm-10">
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="vdoBox">
                                        <div class="imgBox">
                                            <div class="imgBoxIn">
                                                <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/yicj8wQ2YIo?autoplay=1" title="First Date Tips"></a>
                                                <a class="viewMore" href="#"></a>
                                                <img src="images/img1.jpg" alt="Winter Landscapes">
                                                <div class="vdoInfo">
                                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 7:13</span>
                                                    <span><i class="fa fa-eye" aria-hidden="true"></i> 2105</span>
                                                    <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                                    <span><i class="fa fa-heart" aria-hidden="true"></i> 62</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vdoTxt">
                                            <h4><a href="#">Winter Landscapes</a></h4>
                                            <p>Pick up some first date tips for every zodiac sign from famed astrologer Jenny Lynch in this Howcast video. It is a long established fact that a reader will be distrac..</p>
                                            <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="vdoBox">
                                        <div class="imgBox">
                                            <div class="imgBoxIn">
                                                <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/ke2y1HfY3T8?autoplay=1" title="Predicting Compatibility"></a>
                                                <a class="viewMore" href="#"></a>
                                                <img src="images/img2.jpg" alt="Winter Landscapes">
                                                <div class="vdoInfo">
                                                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> 7:13</span>
                                                    <span><i class="fa fa-eye" aria-hidden="true"></i> 2105</span>
                                                    <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                                    <span><i class="fa fa-heart" aria-hidden="true"></i> 62</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vdoTxt">
                                            <h4><a href="#">Predicting Compatibility</a></h4>
                                            <p>Learn how to predict compatibility with your astrological chart from famed astrologer Jenny Lynch in this Howcast video. It is a long established fact that a reader wi..</p>
                                            <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="vdoRgtBox">
                                <div class="vdoRgtBoxIn">
                                    <div class="vdoRgt">
                                        <div class="vdoRgtIn">
                                            <div class="vdoBox">
                                                <div class="imgBox">
                                                    <div class="imgBoxIn">
                                                        <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/ALB6mVmHptM?autoplay=1" title=""></a>
                                                        <a class="viewMore" href="#"></a>
                                                        <img src="images/img3.jpg" alt="Winter Landscapes">
                                                        <div class="vdoInfo">Love &amp; Marriage</div>
                                                    </div>
                                                </div>
                                                <div class="vdoTxt">
                                                    <p>Learn how to use your chart to predict when you will fall in love or even get married in t..</p>
                                                    <span><i class="fa fa-eye" aria-hidden="true"></i> 1059</span>
                                                    <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                                    <span><i class="fa fa-heart" aria-hidden="true"></i> 17</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vdoRgtBoxIn">
                                    <div class="vdoRgt">
                                        <div class="vdoRgtIn">
                                            <div class="vdoBox">
                                                <div class="imgBox">
                                                    <div class="imgBoxIn">
                                                        <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/3yKjCZP7KUQ?autoplay=1" title=""></a>
                                                        <a class="viewMore" href="#"></a>
                                                        <img src="images/img4.jpg" alt="Winter Landscapes">
                                                        <div class="vdoInfo">Read the Heart Line</div>
                                                    </div>
                                                </div>
                                                <div class="vdoTxt">
                                                    <p>Learn how to find and read the heart line from psychotherapist and palm reading expert Ell..</p>
                                                    <span><i class="fa fa-eye" aria-hidden="true"></i> 955</span>
                                                    <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                                    <span><i class="fa fa-heart" aria-hidden="true"></i> 12</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <a class="thumbMore" href="#"><span class="plus">+</span>52 more</a>
                            </div>
                        </div>
                    </div>
                </div> -->