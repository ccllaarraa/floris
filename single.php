<?php

get_header();
?>



        <header class="auri-menu" id="header" >
                                <ul class="menu-left">
                                        <li><a href="<?php echo home_url(); ?>"><img class="logo-auri logo-auri-static" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Floris Dutoit" ></a></li>
                </ul>

                <a class="about" href="./about">about</a>
        </header>
   

                                
                <header class="auri-menu-mobile" id="header" >
                        <a class="index close" id="menu-button" >index</a>
                                        <ul class="menu-left">
                                                <li><a href="<?php echo home_url(); ?>"><img class="logo-auri logo-auri-static" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="Floris Dutoit" ></a></li>
                        </ul>

                        <a class="about" href="./about">about</a>

                
                                        <div id="menu">
                                                <ul>
                                                        <?php 
                                                        global $loop;
                                                        $all_posts = array( 'post_type' => 'post', 'posts_per_page' => -1 );
                                                        $loop = new WP_Query( $all_posts );
                                                        if($loop->have_posts()){
                                                        while($loop->have_posts()){
                                                                $loop->the_post();
                                                        ?>
                                                        <li><a href="<?php the_permalink(); ?>" class="menu-title"><div class="circle"></div><?php the_title(); ?></a></li>
                                                        <?php
                                                        }
                                                        }
                                                        wp_reset_query();
                                                        ?>
                                                </ul>
                                                </div>
                                                        
                        </header>
                     



        <div class="project-page">
        <?php 
                        $back = get_field('background_projet');
                        ?>                    
<div class="background" style="background-color:<?php  echo $back  ?>;">
                <div class="project-gal">
                 <?php 
                        $images = get_field('gallery');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $images ): ?>
                        <ul class='project-gallery'>
                                <?php foreach( $images as $image): ?>
                                <li>
                                <img class="project-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                </li>
                                <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                
                </div>

                <div class="project-info">
                        <?php 
                                $titre = get_field('titre_du_projet'); 
                                $stitre = get_field('sous_titre'); 
                                $link = get_field('lien'); 
                                $desc = get_field('description'); 
                        ?>
                        <div class='project-page-titre'><?php echo $titre; ?></div>
                        <div class='project-page-stitre'><?php echo $stitre; ?></div>
                        <div class='project-page-lien'>
                         <?php if( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                 ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif ?>
                        </div>
                        <div class='project-page-desc'><?php echo $desc; ?></div>




                </div>

                <div class="project-menu">
                 <ul class="" >
                        <?php 
                        global $loop;
                        $all_posts = array( 'post_type' => 'post', 'posts_per_page' => -1 );
                        $loop = new WP_Query( $all_posts );
                                if($loop->have_posts()){
                                while($loop->have_posts()){
                                $loop->the_post();

                              ?>
                               

                                <li class="li-projects-links"><a href="<?php the_permalink(); ?>" class="projects-links">
                                        <div class="projects-dots"></div>
                                        
                                        <span class="project-page-title-menu" style="background-color:<?php  echo $back  ?>;" > <?php the_title(); ?></span>
                                 
                                </a></li>
                                <?php
                                }
                                }
                                wp_reset_query();
                                ?>
                        </ul>


                </div>








        </div>








<?php

get_footer();
?>