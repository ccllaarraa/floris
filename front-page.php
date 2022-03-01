<?php
get_header();
?>





<div class="front-desktop">

        <!-- background -->
        <?php 
            $loop = new WP_Query( array( 'post_type' => 'homepage', 'posts_per_page' => 100 ) ); 
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

        <?php
        $color = get_field('couleur_de_fond'); ?>
        <div class="background" style="background-color:<?php echo $color ?>;"></div>
        <div class="png-img">
            <?php
                $image = get_field('png'); ?>
            <img  src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                
        </div>         
        <?php endwhile; ?>


<header class="auri-menu" id="header" >
			<ul class="menu-left">
				<li><a href="<?php echo home_url(); ?>"><img class="logo-auri" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/header.gif" alt="Auriane Preud'homme" ></a></li>
            </ul>

            <a class="about" href="./about">about</a>
</header>

<div class="projects">
    <?php 
    $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 100 ) ); 
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>

<?php $link = get_permalink ( $post->ID ); ?>      

    <div class="project">

   

        <div class="project-link">
            <div class='ctn-home-image'>
                <?php
                    $image = get_field('image_principale');
                    $width = $image['sizes']['medium-width'];
                    $height = $image['sizes']['medium-height'];
                        if ($height > $width) { ?>
                            <img class="home-image--portait" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php } else {  ?>
                            <img class="home-image--landscape" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php } ?>
            </div>

            <?php $recent = get_field('projet_recent'); ?> 
            <div class="recent-image"><?php if( $recent ): ?> **** <?php endif; ?></div>
            

                <div style="display:none;">
         
                        <div class="caption-ctn">
                            <a href="<?php echo $link ?>" class="project-link-home">
                                    <div class="caption-title">   <?php if( $recent ): ?>**** recent project:<?php endif; ?>  <?php the_title(); ?></div>
                            </a>
                        </div>
                    
                </div>  

        </div>

    



        



       
       
       
    </div>






    <?php endwhile; ?>
    </div>
</div>


<!-- mobile template -->
 


<div class="front-mobile">


        <!-- background -->
        <?php 
            $loop = new WP_Query( array( 'post_type' => 'homepage', 'posts_per_page' => 100 ) ); 
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

        <?php
        $color = get_field('couleur_de_fond'); ?>
        <div class="background" style="background-color:<?php echo $color ?>;"></div>
        <?php if ( !get_field('png_sur_mobile') ) : ?>
        

                <div class="png-img">
                    <?php
                        $image = get_field('png'); ?>
                    <img  src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        
                </div>        
                
        <?php endif; ?>
        <?php endwhile; ?>



        <header class="auri-menu-mobile" id="header" >
                    <a class="index close" id="menu-button" >index</a>
                
                    
                
                    <ul class="menu-left">
                        <li><a href="<?php echo home_url(); ?>"><img class="logo-auri" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/header.gif" alt="Auriane Preud'homme" ></a></li>
                    </ul>

                    <a class="about" href="./about">about</a>

            <!-- sliding menu -->
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


        <!-- sldier mobile -->
        <div class="projects-mobile">
            <?php 
            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 100 ) ); 
            while ( $loop->have_posts() ) : $loop->the_post();
            $link = get_permalink ( $post->ID ); ?>      



            <div class="project">
                <a href="<?php echo $link ?>" class="project-link">
                    <div class='ctn-home-image'>
                        <?php
                            $image = get_field('image_principale');
                            $width = $image['sizes']['medium-width'];
                            $height = $image['sizes']['medium-height'];
                                if ($height > $width) { ?>
                                    <img class="home-image--portait" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php } else {  ?>
                                    <img class="home-image--landscape" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                <?php } ?>
                                
                            
                    </div>

                    <?php $recent = get_field('projet_recent'); ?> 
                    <div class="recent-image"><?php if( $recent ): ?> **** <?php endif; ?></div>
                    
                        <div style="display:none;">
                            <div class="caption-ctn-mob">
                                    <div class="caption-title"><?php if( $recent ): ?>**** recent project:<?php endif; ?>  <?php the_title(); ?>
                                    </div>
                            </div>
                        </div> 
                

                </a>

            </div>

            <?php endwhile; ?>
        </div>






   </div>









<?php
get_footer();
?>  
