<?php
get_header(); ?>

<div class="wrapper">
    <div class="container">
        <div class="tableLayout">
            
                <?php get_template_part('menu');?>
            <?php
            if(have_posts()){

            ?>
            <div class="mainCont">
                <?php
                while (have_posts()) {
                     the_post();
                 
                ?>
                <div class="pageTitle">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="breadcrumb">
                    <a href="#">Home</a>
                    <span class="delimiter">&gt;</span>
                    <span class="current"><?php the_title();?></span>
                </div>                
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yicj8wQ2YIo" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php }?>
                <div class="innerBox">
                    <div class="row">
                        <div class="col-sm-9">
                            <?php
                            while (have_posts()) {
                                 the_post();
                             
                            ?>
                            <div class="videoDesc">
                                <div class="vdoDescTop">
                                    <div class="vdoDescLft">
                                        <h5><?php the_title();?></h5>
                                        <div class="flowCascade">Travel and Living</div>
                                    </div>
                                    <div class="vdoDescRgt">
                                        <h5>3 years ago</h5>
                                        <div class="vdoInfo">
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 2:1</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 8509</span>
                                            <span><i class="fa fa-comment" aria-hidden="true"></i> 3</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <p><?php the_content();?></p>
                                
                                <div class="embedShare">
                                    <span><i class="fa fa-code" aria-hidden="true"></i> Embed Code</span>
                                    <textarea onclick="this.select()" id="embedcode" name="embedcode" rows="7">&lt;embed src="http://demo.cohhe.com/snaptube/wp-content/plugins/contus-video-gallery/hdflvplayer/hdplayer.swf" id="vh-embed-code" flashvars="baserefW=http://demo.cohhe.com/snaptube&amp;vid=89&amp;shareIcon=false&amp;email=false&amp;showPlaylist=false&amp;zoomIcon=false&amp;copylink=http://demo.cohhe.com/snaptube/videogallery/first-date-tips1443429287/&amp;embedplayer=true" width="620" height="350" allowfullscreen="true" allowscriptaccess="always" type="application/x-shockwave-flash" wmode="transparent"&gt;</textarea>
                                </div>
                                
                                <div class="showLess">
                                    <span><i class="fa fa-angle-down" aria-hidden="true"></i> Show less</span>
                                </div>
                            </div>
                            <?php 
                            }
                            ?>
                            <div id="comments">
                                <h6><span>3</span> comments</h6>
                                <ul class="commentlist">
                                    <li>
                                        <div class="comment">
                                            <div class="avatar"><img src="images/user.jpg" alt=""></div>
                                            <div class="comment-content">
                                                <span class="fn">Bear</span>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
                                                <a class="reply" href="JavaScript:void(0);">Reply</a>
                                            </div>
                                            <div class="commentRespond">
                                                <span class="cancelReply">Reply <a href="JavaScript:void(0);">Cancel reply</a></span>
                                                <p>Your email address will not be published. All fields are required.</p>
                                                <form class="commentForm" action="#" method="post">
                                                    <textarea class="form-control" cols="45" rows="8" aria-required="true"></textarea>
                                                    <div class="formBox">
                                                        <input class="form-control" type="text" placeholder="Name">
                                                        <input class="form-control" type="email" placeholder="Email">
                                                    </div>
                                                    <input class="button" type="submit" value="Post Comment">
                                                </form>
                                            </div>
                                        </div>
                                        
                                        <ul class="children">
                                            <li>
                                                <div class="comment">
                                                    <div class="avatar"><img src="images/user.jpg" alt=""></div>
                                                    <div class="comment-content">
                                                        <span class="fn">Kapyapo</span>
                                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                                        <a class="reply" href="JavaScript:void(0);">Reply</a> 
                                                    </div>
                                                                              
                                                    <div class="commentRespond">
                                                        <span class="cancelReply">Reply <a href="JavaScript:void(0);">Cancel reply</a></span>
                                                        <p>Your email address will not be published. All fields are required.</p>
                                                        <form class="commentForm" action="#" method="post">
                                                            <textarea class="form-control" cols="45" rows="8" aria-required="true"></textarea>
                                                            <div class="formBox">
                                                                <input class="form-control" type="text" placeholder="Name">
                                                                <input class="form-control" type="email" placeholder="Email">
                                                            </div>
                                                            <input class="button" type="submit" value="Post Comment">
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <div class="comment">
                                            <div class="avatar"><img src="images/user.jpg" alt=""></div>
                                            <div class="comment-content">
                                                <span class="fn">John</span>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text.</p>
                                                <a class="reply" href="JavaScript:void(0);">Reply</a>
                                            </div>
                                            
                                            <div class="commentRespond">
                                                <span class="cancelReply">Reply <a href="JavaScript:void(0);">Cancel reply</a></span>
                                                <p>Your email address will not be published. All fields are required.</p>
                                                <form class="commentForm" action="#" method="post">
                                                    <textarea class="form-control" cols="45" rows="8" aria-required="true"></textarea>
                                                    <div class="formBox">
                                                        <input class="form-control" type="text" placeholder="Name">
                                                        <input class="form-control" type="email" placeholder="Email">
                                                    </div>
                                                    <input class="button" type="submit" value="Post Comment">
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                                <div id="commentRespond" class="commentRespond">
                                    <h3>Reply <a href="#" style="display:none;">Cancel reply</a></h3>
                                    <p>Your email address will not be published. All fields are required.</p>
                                    <form class="commentForm" action="#" method="post">
                                        <textarea class="form-control" cols="45" rows="8" aria-required="true"></textarea>
                                        <div class="formBox">
                                            <input class="form-control" type="text" placeholder="Name">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                        <input class="button" type="submit" value="Post Comment">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="vdoAuthorSidebar">
                                <div class="likeSocial">
                                    <div class="likes"><i class="fa fa-heart-o" aria-hidden="true"></i> Like!</div>
                                    <div class="likesCount">255</div>
                                </div>
                                
                                <div class="vdoAuthorInfo">
                                    <span class="vdoAuthorText">Video author:</span>
                                    <div class="vdoAuthorDesc">
                                        <div class="avatar"><img src="images/user.jpg" alt=""></div>
                                        <div class="vdoAuthorDescIn">
                                            <span class="vdoAuthorName">janis</span>
                                            <span class="author-videos"><i class="fa fa-video-camera" aria-hidden="true"></i> 73 videos</span>
                                            <span class="author-comments"><i class="fa fa-comment" aria-hidden="true"></i> 0 comments</span>
                                        </div>
                                    </div>
                                    <span class="authorMoreText">Other videos by janis:</span>
                                    <div class="vdoBox">
                                        <div class="imgBox">
                                            <div class="imgBoxIn">
                                                <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/EpFR_UYhOKY?autoplay=1" title="Wild Country" tabindex="0"></a>
                                                <a class="viewMore" href="#" tabindex="0"></a>
                                                <img src="images/img28.jpg" alt="Wild Country">
                                            </div>
                                        </div>
                                        <div class="vdoInfoTxt">
                                            <h4><a href="#">Wild Country</a></h4>
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 4:20</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 502</span>
                                            <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                            <span><i class="fa fa-heart" aria-hidden="true"></i> 2</span>
                                        </div>
                                    </div>
                                    <div class="vdoBox">
                                        <div class="imgBox">
                                            <div class="imgBoxIn">
                                                <a class="vboPlay fancybox.iframe" href="http://www.youtube.com/embed/hbuMIj9wrH0?autoplay=1" title="Visit to the Leather Maker" tabindex="0"></a>
                                                <a class="viewMore" href="#" tabindex="0"></a>
                                                <img src="images/img29.jpg" alt="Visit to the Leather Maker">
                                            </div>
                                        </div>
                                        <div class="vdoInfoTxt">
                                            <h4><a href="#">Visit to the Leather Maker</a></h4>
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> 4:20</span>
                                            <span><i class="fa fa-eye" aria-hidden="true"></i> 502</span>
                                            <span><i class="fa fa-comment" aria-hidden="true"></i> 0</span>
                                            <span><i class="fa fa-heart" aria-hidden="true"></i> 2</span>
                                        </div>
                                    </div>
                                    <a class="viewAll" href="#" rel="author">View all 73 videos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                
            }
            ?>
        </div>
    </div>
</div>
<?php 
get_footer();
?>
