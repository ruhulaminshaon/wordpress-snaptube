<?php get_header();?>

<!--===================================-->
<!--============= WRAPPER =============-->
<!--===================================-->
<div class="wrapper">
    <div class="container">
        <div class="tableLayout">
            <?php get_template_part('menu');?>
            <div class="mainCont">
                <div class="followed">
                <?php
                $followed=new WP_Query(array(
                    'post_type'=>'followed',
                    'post_per_page'=>1
                ));
                    if($followed->have_posts()):
                        while($followed->have_posts()):
                            $followed->the_post();
                ?>
                <h2><?php the_title();?></h2>
                <p><?php the_content();?></p>
                <?php
                        endwhile;
                    else:
                ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php
                    endif;
                ?>
                    
                </div>
            <?php
            $arg=array();
            $categori=get_categories();
            $c=0;
            foreach($categori as $key)
            {
                $cat_id=$key->term_id;
                $args=array(
                    'post_type'=>'vedio',
                    'posts_per_page'=>4,
                    'category'=>$cat_id,
                    'post_status'=>'publish',
                    'orderby'=>'name',
                    'order' => 'ASC'
                );
                $category1 = get_category($cat_id);
                $count = $category1->category_count;
                $all_video = get_posts( $args );
            ?>    
                <div class="vdoGroup1">
                    <h2><?php echo $key->cat_name;?><a class="vdoCount" href="#"><?php echo $count;?> videos</a> <a class="followBtn" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a></h2>
                    <div class="row">
                        
                        <div class="col-sm-10">
                            <div class="row">
                            <?php
                            $counter=0;
                            foreach($all_video as $single_video)
                            {
                                $video_id=get_post_meta($single_video->ID,'vedio',true);
                                $API_key  = 'AIzaSyCMVmtH3jtbXSTyx-qUZsBxzdfCI8Nr6Jo';
                                $arrContextOptions=array(
                                        "ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false,
                                        ),
                                    );  
                                $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics,contentDetails&id='.$video_id.'&key='.$API_key.'', false, stream_context_create($arrContextOptions)));

                                $time=$videoList->items[0]->snippet->publishedAt ; 
                                    if($conter==2)
                                    {
                            ?>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="vdoRgtBox">
                            <?php
                                    }/*end if counter==2*/
                                    if($counter<2)
                                    {
                            ?>
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
                                            <h4><a href="#"><?php echo wp_trim_words(get_the_content(),40,'...');?></p>
                                            <span><i class="fa fa-user" aria-hidden="true"></i> <?php the_author();?></span>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i><?php echo the_date('y');?> years ago</span>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                    }/*end if conter <2*/
                                    elseif($counter >1 && $counter<4)
                                    {
                            ?>
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
                            <?php
                                    }/*end elseif counter >1 && $counter<4*/
                                    $counter++;
                                    if(count($all_video)>2 && $counter == count($all_video))
                                    {
                            ?>
                                <div class="clear"></div>
                                <a class="thumbMore" href="<?php echo get_category_link( $key->term_id); ?>"><span class="plus">+</span><?php echo $count-4;?> more</a>
                            <?php
                                    }/*end if all_video >2*/
                                    if(count($all_video)<=2 && $counter == count($all_video))
                                    {
                            ?>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="vdoRgtBox">
                                <div class="clear"></div>
                                <a class="thumbMore" href="<?php echo get_category_link( $key->term_id); ?>"><span class="plus">+</span><?php echo $count-4;?> more</a>
                            <?php
                                    }/*end if all_video<2*/
                                }
                            ?>
                                

                            </div>
                        </div>
                    </div>
                </div>
                        <?php
                            }
                        ?>
              
                
                <div class="vdoGroup2">
                    <h2>People <a class="vdoCount" href="#">64 videos</a> <a class="followBtn" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a></h2>
                    <div class="slider">
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="vdoBox">
                                            <div class="imgBox">
                                                <div class="imgBoxIn">
                                                    <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/VS4G5SRuLSg?autoplay=1" title="Harsh Lighting"></a>
                                                    <a class="viewMore" href="#"></a>
                                                    <img src="images/img9.jpg" alt="Winter Landscapes">
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 7:13</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2105</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 62</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vdoTxt">
                                                <h4><a href="#">Harsh Lighting</a></h4>
                                                <p>You've probably learned it's a bad idea to shoot on the beach at noon due to harsh lighting. However, with proper technique using a reflector and the right camera settings, you can get some great shots with sof..</p>
                                                <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vdoBox">
                                            <div class="imgBox">
                                                <div class="imgBoxIn">
                                                    <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/e1e8rNqpMc4?autoplay=1" title="Wild America"></a>
                                                    <a class="viewMore" href="#"></a>
                                                    <img src="images/img10.jpg" alt="Winter Landscapes">
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 7:13</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2105</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 62</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vdoTxt">
                                                <h4><a href="#">Wild America</a></h4>
                                                <p>This film features some of the incredible wildlife seen in the American Southwest (Arizona, New Mexico, and California) and Mexico. Rattlesnakes feature prominently, as well as other reptile species, birds, an..</p>
                                                <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="vdoBox">
                                            <div class="imgBox">
                                                <div class="imgBoxIn">
                                                    <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/6v2L2UGZJAM?autoplay=1" title="Amazing nature"></a>
                                                    <a class="viewMore" href="#"></a>
                                                    <img src="images/img11.jpg" alt="Winter Landscapes">
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 7:13</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2105</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 62</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vdoTxt">
                                                <h4><a href="#">Amazing nature</a></h4>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you ..</p>
                                                <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vdoBox">
                                            <div class="imgBox">
                                                <div class="imgBoxIn">
                                                    <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/wr4d2FfivA4?autoplay=1" title="Emperors of the Ice"></a>
                                                    <a class="viewMore" href="#"></a>
                                                    <img src="images/img12.jpg" alt="Winter Landscapes">
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 7:13</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2105</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 62</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vdoTxt">
                                                <h4><a href="#">Emperors of the Ice</a></h4>
                                                <p>Wildlife photographer Paul Nicklen dives beneath the Antarctic ice to capture the "bubbly" emperor penguins in action, and risks being mistaken for his subjects by some very hungry predators. There are many var..</p>
                                                <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                
                <div class="vdoGroup3">
                    <h2>Other videos <a class="vdoCount" href="#">131 videos</a> <a class="followBtn" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Follow</a></h2>
                    <div class="slider">
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/G2hH1mwCYzE?autoplay=1" title="Holy Monks "></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img17.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">3D Short Film</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Out of Bounds is a graduation film made at The Animation Workshop, Den..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/yltlJEdSAHw?autoplay=1" title="Rollin Wild"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img18.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Cupidon</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Animation Movie Cupidon is a Animation Short Film HD. This short movie..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/hPovrwqaErs?autoplay=1" title="Commandments"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img19.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Alice Amv</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Alice Amv - Alice in Wonderland Full Movie Game 2014 - Full Alice trib..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/FrjQrXc80cY?autoplay=1" title="Tolerantia"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img20.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Baby Hazel Games</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Baby Hazel Games - Baby and Kids Games Movie Dora Games for Kids - Dor..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/hRHbeYZhtgA?autoplay=1" title="Electroshock"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img21.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Animation Movie - FAT</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>FAT is a funny animation movie hd made by 3 students in 2011, the film..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/7u2aX7mG2NU?autoplay=1" title="Ice Age 4"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img22.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Ratatouille</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Disney's Ratatouille official movie game LIKE for more videos.</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/j6PbonHsqW0?autoplay=1" title="3D Short Film"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img23.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Holy Monks</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Out of Bounds is a graduation film made at The Animation Workshop, Den..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/gJ7xINoeFPk?autoplay=1" title="Cupidon"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img24.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Rollin Wild</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>It is a long established fact that a reader will be distracted by the..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/yf1trNG2PE0?autoplay=1" title="Alice Amv"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img25.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Commandments</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Uploaded by Lokesh Bade. This channel is a Non-Profit one and all the..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/JuyB7NO0EYY?autoplay=1" title="Baby Hazel Games"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img26.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Tolerantia</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Animals are eukaryotic organisms of the kingdom Animalia or Metazoa. T..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/yltlJEdSAHw?autoplay=1" title="Animation Movie - FAT"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img18.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Electroshock</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>It is a long established fact that a reader will be distracted by the..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-5">                            
                                                <div class="vdoBox">
                                                    <div class="imgBox">
                                                        <div class="imgBoxIn">
                                                            <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/aCTawrBVgkc?autoplay=1" title="Ratatouille"></a>
                                                            <a class="viewMore" href="#"></a>
                                                            <img src="images/img27.jpg" alt="Winter Landscapes">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="vdoTxt">
                                                    <h4><a href="#">Ice Age 4</a></h4>
                                                    <div class="vdoInfo">
                                                        <span><i class="fa fa-clock-o" aria-hidden="true"></i> 3:36</span>
                                                        <span><i class="fa fa-eye" aria-hidden="true"></i> 2143</span>
                                                        <span><i class="fa fa-comment" aria-hidden="true"></i> 2</span>
                                                        <span><i class="fa fa-heart" aria-hidden="true"></i> 22</span>
                                                    </div>
                                                    <p>Arctic Games is a video game based on the film of the same name. You n..</p>
                                                    <span><i class="fa fa-user" aria-hidden="true"></i> janis</span>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i> 3 years ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<?php get_footer();?>


<!-- 
I am a back-end developer.I have advanced Knowledge of PHP, good knowledge of JavaScript, Bootstrap & jQuery and basic knowledge of HTML & CSS.

-->