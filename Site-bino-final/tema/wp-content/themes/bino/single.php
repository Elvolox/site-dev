<?php get_header(); ?> <!-- Chamando o cabeçalho (header.php)-->

<section id="portfolio" class="portfolio sections">
            <div class="col">
                <div class="row">
                    <div class="row">
                        <div style="clear:both;"></div>
                        <div id="portfoliowork">
                        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                            <div class="single_portfolio  video">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'd-block'));?>
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
                        <?php else : get_404_template(); endif;  ?> <!-- arquivo de erro 404 not found configurado mas , não utilizado-->
                    </div>
                </div>
            </div>
        </section> 
<?php get_footer();?> <!-- Chamando o rodapé (footer.php)-->