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
                                
                                
                            </div>
                            <?php 
                            }
                            ?>
                           
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
