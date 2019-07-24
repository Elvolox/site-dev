
<?php get_header(); ?>
        <!--Inicio da home -->
        <!-- Carousel -->
        <section id="home" class="home"></section>
        <div class="overlay">
            <div class="home_skew_border">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider text-center">                                
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h3>Our Clients Are Our First Priority</h3>
                                        <h1>WELCOME TO BINO</h1>
                                        <div class="separator"></div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley
                                            of type and scrambled it to make a type specimen book.</p>
                                        <div class="home_btn">
                                            <a href="" class="btn btn-lg m_t_10">GET
                                                STARTED NOW</a>
                                            <a href="" class="btn btn-default">LEARN
                                                MORE</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h3><?php the_title();?></h3>
                                        <h1><?php the_title();?></h1>
                                        <div class="separator"></div>
                                        <p><?php the_excerpt();?></p>
                                        <div class="home_btn">
                                            <a href="" class="btn btn-lg m_t_10">GET
                                                STARTED NOW</a>
                                            <a href="" class="btn btn-default">LEARN
                                                MORE</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Carousel -->
                <div class="scrooldown">
                    <a href="#feature"><i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
        </section>
        <!--Fim da home -->


        <!--Seção da Sleek Desing  -->
        <section id="feature" class="feature sections">
            <div class="container">
                <div class="row">
                    <div class="main_feature text-center">

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-clone"></i>
                                </div>

                                <h4>SLEEK DESIGN</h4>
                                <div class="separator3"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                    Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-heart-o"></i>
                                </div>

                                <h4>CLEAN CODE</h4>
                                <div class="separator3"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                    Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <h4>CREATIVE IDEAS</h4>
                                <div class="separator3"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                    Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_feature">
                                <div class="single_feature_icon">
                                    <i class="fa fa-comments-o"></i>
                                </div>

                                <h4>FREE SUPPORT</h4>
                                <div class="separator3"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                    Lorem Ipsum has been the industry.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Fim da seção Seek Desing -->
        <hr />

        <!-- Inicio da seção Recent Works -->
        <section id="portfolio" class="portfolio sections">
            <div class="container-fluid">
                <div class="row">
                    <div class="main_portfolio">
                        <div class="col-sm-12">
                            <div class="head_title text-center">
                                <h2>RECENT WORKS</h2>
                                <div class="subtitle">
                                    It has survived not only five centuries, but also the leap scrambled it to make a
                                    type.
                                </div>
                                <div class="separator"></div>
                            </div>
                        </div>

                        
                        <div style="clear:both;"></div>
                        <div id="portfoliowork">
                        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                            <div class="single_portfolio tile scale-anm web grid-item-width2 video">
                                <?php the_post_thumbnail();?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="grid_item_overlay ">
                                        <div class="separator4"></div>
                                        <h3><?php the_title();?></h3>
                                        <?php the_excerpt();?>
                                    </div>
                                </a>
                            </div>
                        <div style="clear:both;"></div>
                        <?php endwhile;?>
                        <?php else : get_404_template(); endif;  ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fim da seção RECENT WORKS-->



        <!-- Inicio da seção CASE STUDY -->
        <section id="study" class="study text-center wow fadeIn" data-wow-duration="2s" data-wow-dealy="1.5s">
            <div class="container">
                <div class="row">
                    <div class="main_study_area sections">
                        <div class="head_title text-center">
                            <h2>CASE STUDY</h2>
                            <div class="subtitle">
                                A brief story about how this process works, keep an eye till the end.
                            </div>
                            <div class="separator"></div>
                        </div>
                        <div class="single_study_content">
                            <div class="col-sm-6">
                                <div class="single_study_slid_area">
                                    <div class="single_study_text">
                                        <div class="study_slider">
                                            <div class="item">
                                                <div class="s_study_icon">
                                                    <i class="fa fa-lightbulb-o"></i>
                                                </div>
                                                <h4>aCCUMULATE CREATIVE IDEAS</h4>
                                                <div class="separator3"></div>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting let.
                                                    Lorem Ipsum has been the industry.
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    let.
                                                    Lorem Ipsum has been the industry Printing and typelorem Ipsum has
                                                    been the setting let.</p>

                                                <a href="" class="btn btn-lg">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_study_right_img">
                                <div class="col-sm-6">
                                    <div class="single_study_img">
                                        <?php the_post_thumbnail();?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Fim da seção CASE STUDY -->



        <!-- Inicio da seção OUR BLOG -->
        <section id="blog" class="blog">
            <div class="container-fluid">
                <div class="row">
                    <div class="main_blog sections">
                        <div class="head_title text-center">
                            <h2>OUR BLOG</h2>
                            <div class="subtitle">
                                Suspendisse sed eros mollis, tincidunt felis eget, interdum eratullam sit amet odio.
                            </div>
                            <div class="separator"></div>
                        </div><!-- End off Head_title -->
                        <?php
                                    //args
                                    $my_args = array(
                                        'post_type' => 'post',
                                        'post_per_page' => 8,
                                    );

                                    //query
                                    $my_query = new WP_Query ($my_args);
                                    ?>

                                    <?php if(have_posts()) : while(have_posts()) : the_post();?>
                        <div class="main_blog_content">
                       
                            <div class="col-sm-6">
                                <div class="single_blog_area textwhite">
                                    <div class="row">
                                        <div class="col-sm-6 no-padding">
                                            <div class="single_blog_img">
                                            <?php the_post_thumbnail();?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 no-padding">
                                            <div class="single_blog_text s_b_left">
                                                <p>art/t-shirt</p>
                                                <h3><?php the_title();?></h3>
                                                <div class="separator2"></div>
                                                <p><?php the_excerpt();?></p>

                                                <a href="<?php the_permalink(); ?>" class="read_more">Read More >></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?> 
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Fim da seção Our Blog -->

<?php get_footer(); ?>